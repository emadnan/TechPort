<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use App\Models\trl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FoundingSourcesController extends Controller
{

    public function foundSourcesClickingPage( string $id)
    {
    $projOrg = foundingsource::with('projects.missiontype','projects.status' , 'projects.techreferred.techarea' , 'projects.orgperformingworks.location' , 'projects.legalentityroles' , 'projects.project_target')
    ->where('id' , $id)
    ->first();

    $allTrls = trl::with('projects.trlactual')->get();

    $count = $projOrg->projects->unique('id')->count();
    $active = $projOrg->projects->where('status.status' , 'Active')->count();
    $complete = $projOrg->projects->where('status.status' , 'Completed')->count();
    $partnership = $projOrg->projects->where('status.status' , 'Partnership')->count();

        return view('foundSourcesClickingPage' , compact('projOrg' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls' ) );
    }

    public function getProjectsLengthBySourceID(string $sourceID ,string $trlID)
    {
        $project = project::where('id_foundsource' , $sourceID)
                   ->where('id_trlactual' , $trlID)
                   ->count();
        
        return response()->json(compact('project'));
    }

    public function index()
    {
        $sources = foundingsource::paginate(10);
        return view('foundSourcesPage' , compact('sources'));
    }

    public function foundSourcePage ()
    {
        $sources = foundingsource::get();
        return view('dashboard.foundSourceForm' , ['data'=>$sources]);
    }

    public function read (string $id)
    {
        $fsRead = Db::table('foundingsources')->where('id',$id)->get();
        return response()->json(['data'=>$fsRead]);
    }

    public function addPage()
    {
        return view('dashboard.createFoundSource');
    }

    public function create(Request $req)
    {
        $latestCode = foundingsource::latest()->value('code');
        if($latestCode === null) {
            $latestCode = 0;
        }
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            //  'code'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $fsCreate = DB::table('foundingsources')->insert([
            'code'=> $latestCode + 1,
            'name'=> $req->name,
            'note'=> $req->note,
        ]);

        $fsCreate = new foundingsource;
        $fsCreate->code = $latestCode + 1;
        $fsCreate->name = $req->name;
        $fsCreate->note = $req->note;
        $fsCreate->save();
        $latestID = $fsCreate->id;

        if($fsCreate)
        {
            $fsRow = DB::table('foundingsources')->where('id', $latestID)->get();
          return response()->json(['message' => 'Source Added successfully' , 'fsRow'=>$fsRow]);
        }
        else 
        {
            return response()->json(['message' => 'Source Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $fsUpdate = DB::table('foundingsources')->where('id',$id)->get();
                return response()->json(['row'=>$fsUpdate]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            // 'code'=>'required', 
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $fsUpdate = DB::table('foundingsources')->where('id',$id)->update([
            // 'code'=> $req->code,
            'name'=> $req->name,
            'note'=> $req->note,
        ]);
        if($fsUpdate)
        {
            $updateFS = DB::table('foundingsources')->where('id', $id)->get();
                  if($updateFS)
                  {
                    return response()->json(['message' => 'Source Updated Successfully' , 'updateFS'=>$updateFS]);
                  }
        }
        else
        {
            return response()->json(['message' => 'Source Was No Updated Successfully' ]);
        }

    }

    public function delete(string $id)
    {
        $fsDelete = DB::table('foundingsources')->where('id',$id)->delete();
        if($fsDelete)
        {
            return response()->json(['message' => 'Source Deleted Successfully' , 'data'=>$fsDelete]);
        } 
        else
        {
            return response()->json(['message' => 'Source Was Not Deleted Successfully']);
        }
    }
    
public function __construct()
{
    $this->middleware('auth')->except('index' , 'foundSourcesClickingPage' , 'getProjectsLengthBySourceID');
}
}




//          |-----------------------------------------------------------------------------------------|