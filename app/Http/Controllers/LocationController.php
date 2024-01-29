<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use App\Models\trl;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function locationsClickingPage (string $id)
    {

    $projOrg = location::with( 'orgperformingworks.projects.missiontype' , 'orgperformingworks.projects.foundingsource' , 'orgperformingworks.projects.status' ,'orgperformingworks.projects.techreferred.techarea' ,  'orgperformingworks.legalentityroles'  ,  'orgperformingworks.location' ,  'orgperformingworks.projects.trlactual', 'orgperformingworks.projects.project_target' )
    ->where('id' , $id)
    ->first();

    $allTrls = trl::with('projects.trlactual')->get();


    if($projOrg)
    {
        $count = $projOrg->orgperformingworks->flatMap(function($orgperformingwork){
            return $orgperformingwork->projects;
        })->unique('id')->count();

        $active = $projOrg->orgperformingworks->flatMap(function($orgperformingwork){
            return $orgperformingwork->projects->where('status.status' , 'Active');
        })->unique('id')->count();

        $complete = $projOrg->orgperformingworks->flatMap(function($orgperformingwork){
            return $orgperformingwork->projects->where('status.status' , 'Completed');
        })->unique('id')->count();

        $partnership = $projOrg->orgperformingworks->flatMap(function($orgperformingwork){
            return $orgperformingwork->projects->where('status.status' , 'Partnership');
        })->unique('id')->count();
    }


// return response()->json(compact('projOrg' , 'count' , 'active' , 'complete' , 'partnership') );
        return view('locationClickingPage' , compact('projOrg' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls') );
    }

    public function getProjectsLengthByLocationID(string $locationID ,string $trlID)
    {
        $project = project::with('orgperformingworks.location')
            ->whereHas('orgperformingworks', function ($query) use ($locationID) {
            // Use a closure to apply conditions on the relationship
            $query->where('id_location', $locationID);
        })
            ->where('id_trlactual' , $trlID)
            ->count();
        
        return response()->json(compact('project'));
    }
  
    public function index()
    {
        $locations = location::paginate(10);
        
        // return response()->json(['locations'=>$locations]);
        // dd(get_class($locations));
    return view('locationsPage' , compact('locations'));
    }

    public function locationPage ()
    {
        $location = DB::table('location')->get();
        return view('dashboard.locationForm' , ['data'=>$location]);
    }

    public function read (string $id)
    {
        $read = Db::table('location')->where('id',$id)->get();

        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('createLocation');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'state'=> 'nullable',
            'region'=> 'nullable',
            'city'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('location')->insert([
            'state'=> $req->state,
            'region'=> $req->region,
            'city'=> $req->city,
        ]);

        if($Create)
        {
            $latestID = location::latest()->value('id');
            $newRow = DB::table('location')->where('id', $latestID)->get();
            return response()->json(['message' => 'Location  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Location  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upLocation = DB::table('location')->where('id', $id)->get();
                return response()->json(['row'=>$upLocation]);
    }

    public function update(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'state'=> 'nullable',
            'region'=> 'nullable',
            'city'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $locUpdate = DB::table('location')->where('id',$id)->update([
            'state'=> $req->state,
            'region'=> $req->region,
            'city'=> $req->city,
        ]);

        if($locUpdate)
        {
            $update = DB::table('location')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Location  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Location Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $delete = DB::table('location')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Location  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Location  Was Not Deleted Successfully']);
        }
    }
    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'locationsClickingPage' , 'getProjectsLengthByLocationID');
    }
}
