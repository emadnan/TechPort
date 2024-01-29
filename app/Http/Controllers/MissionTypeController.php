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
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MissionTypeController extends Controller
{
    
    public function index()
    {
        $missions = missiontype::paginate(10);
        return view('missionTypePage' , compact('missions'));
    }

    public function missionTypeClickingPage(string $id)
    {
    $projOrg = missiontype::with('projects.legalentityroles' , 'projects.trlactual' ,'projects.foundingsource','projects.status'  , 'projects.techreferred.techarea' , 'projects.orgperformingworks.location', 'projects.project_target')
    // ->with('orgperformingworks.location' , 'orgperformingworks.humanentity' , 'orgperformingworks.orgtype')
    ->with('trls.projects.trlactual')
    ->where('id' , $id)
    ->first();

    $count = $projOrg->projects->unique('id')->count();
    $active = $projOrg->projects->where('status.status' , 'Active')->count();
    $complete = $projOrg->projects->where('status.status' , 'Completed')->count();
    $partnership = $projOrg->projects->where('status.status' , 'Partnership')->count();

    $allTrls = trl::with('projects.trlactual')->get();


    // return response()->json($projOrg);

        return view('missionTypeClickingpage' , compact('projOrg' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls'));
    }

    public function getProjectsLengthByMissionID(string $missionID ,string $trlID)
    {
        $project = project::where('id_missiontype' , $missionID)
                   ->where('id_trlactual' , $trlID)
                   ->count();
        
        return response()->json(compact('project'));
    }
    

    public function missionTypePage ()
    {
        $mission = DB::table('missiontype')->get();
        return view('dashboard.missionTypeForm' , ['data'=>$mission]);
    }

    public function read (string $id)
    {
        $read = Db::table('missiontype')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('createMissionType');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'type'=> 'required',
            'description'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('missiontype')->insert([
            'type'=> $req->type,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = missiontype::latest()->value('id');
            $newRow = DB::table('missiontype')->where('id', $latestID)->get();
            return response()->json(['message' => 'Mission Type  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Mission Type  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upMission = DB::table('missiontype')->where('id', $id)->get();
        return response()->json(['row'=>$upMission]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'type'=> 'required',
            'description'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;

        $Update = DB::table('missiontype')->where('id',$id)->update([
            'type'=> $req->type,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('missiontype')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Mission Type  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Mission Type Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $delete = DB::table('missiontype')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Mission Type  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Mission Type  Was Not Deleted Successfully']);
        }
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'missionTypeClickingPage' , 'getProjectsLengthByMissionID');
    }

}

