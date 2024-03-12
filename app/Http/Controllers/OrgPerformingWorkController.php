<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\humanentity;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\orgtype;
use App\Models\project;
use App\Models\ref_projectorganization;
use App\Models\techarea;
use App\Models\trl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrgPerformingWorkController extends Controller
{
    public function organizationClickingPage (string $id)
    {

   
    $projOrg = orgperformingwork::with('projects.missiontype' , 'projects.legalentityroles' ,'projects.foundingsource','projects.status' , 'projects.techreferred.techarea' , 'projects.orgperformingworks.location', 'projects.project_target')
    // ->with('orgperformingworks.location' , 'orgperformingworks.humanentity' , 'orgperformingworks.orgtype')
    ->where('id' , $id)
    ->first();

    $allTrls = trl::with('projects.trlactual')->get();

    $count = $projOrg->projects->unique('id')->count();
    $active = $projOrg->projects->where('status.status' , 'Active')->count();
    $complete = $projOrg->projects->where('status.status' , 'Completed')->count();
    $partnership = $projOrg->projects->where('status.status' , 'Partnership')->count();

    $techareas = techarea::with('projects')->get();
    $totalTechareas = techarea::count();

        return view('organizationClickingPage' , compact('projOrg' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls' , 'totalTechareas' , 'techareas'));
    }

    public function getProjectsLengthByOrgID(string $orgID ,string $trlID)
    {
        $project = project::with('ref_projectorganizations.orgperformingwork')
            ->whereHas('ref_projectorganizations', function ($query) use ($orgID) {
            // Use a closure to apply conditions on the relationship
            $query->where('id_orgperformingwork', $orgID);
        })
            ->where('id_trlactual' , $trlID)
            ->count();
        
        return response()->json(compact('project'));
    }

    public function index()
    {
        $orgs = orgperformingwork::paginate(10);
        return view('organizationsPage' , compact('orgs'));

    }

    public function orgPerformingWorkPage()
    {
        $organizations = orgperformingwork::select('orgtype.type' , 'humanentity.name as humanName' , 'humanentity.surname as humanSurName' , 'location.city' , 'orgperformingwork.*')
        ->join('orgtype' , 'orgtype.id' , '=' , 'orgperformingwork.id_type')
        ->join('humanentity' , 'humanentity.id' , '=' , 'orgperformingwork.id_humanentity')
        ->join('location' , 'location.id' , '=' , 'orgperformingwork.id_location')
        ->get();

        $workOrg = orgperformingwork::get();
        $humans = humanentity::get();
        $locations = location::get();
        $orgs = orgtype::get();
       
        // return response()->json(compact('organizations'));
        return view('dashboard.orgPerformingWorkPage' , compact('locations' , 'humans' , 'orgs' ,  'organizations' ));
    }

    public function read(string $id)
    {
        $organizations = orgperformingwork::select('orgtype.type' , 'humanentity.name as humanName' , 'humanentity.surname as humanSurName' , 'location.city' , 'orgperformingwork.*')
        ->join('orgtype' , 'orgtype.id' , '=' , 'orgperformingwork.id_type')
        ->join('humanentity' , 'humanentity.id' , '=' , 'orgperformingwork.id_humanentity')
        ->join('location' , 'location.id' , '=' , 'orgperformingwork.id_location')
        ->where('orgperformingwork.id' , $id)
        ->get();   
        $read = orgperformingwork::where('id' , $id)->get();
        return response()->json(['data' => $organizations]);
    }

    public function create(Request $req)
    {
        $latestCode = orgperformingwork::latest()->value('code');
        if($latestCode === null) {
            $latestCode = 0;
        }

        $validator = Validator::make($req->all() , [
            // 'code' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'website' => 'required|url',
            'description' => 'required',
            'typeoflocation' => 'required',
            'note' => 'nullable',
        ]);

        if($validator->fails())
        {
            return response()->json(['errors' =>$validator->errors()->toArray() , 'oldInput'=>$req->all()]);
        }

        $create = new  orgperformingwork;
        $create->code = $latestCode + 1;
        $create->name = $req->name;
        $create->email = $req->email;
        $create->website = $req->website;
        $create->description = $req->description;
        $create->typeoflocation = $req->typeoflocation;
        $create->id_type = $req->id_type;
        $create->id_humanentity = $req->id_humanentity;
        $create->id_location = $req->id_location;
        $create->note = $req->note;
        $create->save();
        $latestID = $create->id;
        // $id = $req->id;
        if($create)
        {
            $createOrg = orgperformingwork::select('orgtype.type' , 'humanentity.name as humanName' , 'humanentity.surname as humanSurName' , 'location.city' , 'orgperformingwork.*' )
            ->join('orgtype' , 'orgtype.id' , '=' , 'orgperformingwork.id_type')
            ->join('humanentity' , 'humanentity.id' , '=' , 'orgperformingwork.id_humanentity')
            ->join('location' , 'location.id' , '=' , 'orgperformingwork.id_location')
            ->where('orgperformingwork.id' , $latestID)
            ->get();
            // return response()->json($createOrg);
            return response()->json(['errors'=>false , 'message'=> 'Work Organization Added Successfully In DataBase!!' , 'eqRow'=>$createOrg]);
        }
        else
        {
            return response()->json(['errors'=> $create->errors() , 'message'=> 'Work Organization NOT Added Successfully In DataBase!!']);
        }
    }

    public function updatePage(string $id)
    {
        $org = orgperformingwork::where('id', $id)->get();
        return response()->json(['row'=>$org]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            // 'code' => 'required',
            'name' => 'required',
            'email' => 'required|email',
            'website' => 'required|url',
            'description' => 'required',
            'typeoflocation' => 'required',
            'note' => 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = orgperformingwork::where('id',$id)->update([
            // 'code'=> $req->code,
            'name'=> $req->name,
            'email'=> $req->email,
            'website'=> $req->website,
            'description'=> $req->description,
            'typeoflocation'=> $req->typeoflocation,
            'id_type'=> $req->id_type,
            'id_humanentity'=> $req->id_humanentity,
            'id_location'=> $req->id_location,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $updateEQ = orgperformingwork::select('orgtype.type' , 'humanentity.name as humanName' , 'humanentity.surname as humanSurName' , 'location.city' , 'orgperformingwork.*' )
            ->join('orgtype' , 'orgtype.id' , '=' , 'orgperformingwork.id_type')
            ->join('humanentity' , 'humanentity.id' , '=' , 'orgperformingwork.id_humanentity')
            ->join('location' , 'location.id' , '=' , 'orgperformingwork.id_location')
            ->where('orgperformingwork.id' , $id)
            ->get();
            if($updateEQ)
            {
              return response()->json(['message' => 'Working Organization Updated Successfully' , 'updateEQ'=>$updateEQ]);
            }

        }
        else
        {
            return response()->json(['message' => 'Working Organization Was Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete =orgperformingwork::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Working Organization Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Working Organization Was Not Deleted Successfully']);
        }
    }       

    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'organizationClickingPage' , 'getProjectsLengthByOrgID');
    }
}

