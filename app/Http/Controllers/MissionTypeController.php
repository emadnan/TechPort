<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class MissionTypeController extends Controller
{
    
    public function index()
    {
        $missions = missiontype::get();
        return view('missionTypePage' , ['data'=> $missions]);
    }

    public function missionTypeClickingPage(string $id)
    {
      

    //     $projOrgs = ref_projectorganization::select('orgtype.type as orgtype' , 'humanentity.name as humanName' ,
    //  'humanentity.surname as humanSurName' , 'location.city' ,'location.state' ,'location.id as locationID' ,
    //  'projects.name as projectName' , 'projects.description as projectDescription' , 'status.status as status',
    //  'techsector.techsector' , 'techareas.techarea' , 'techniche.techniche' , 'trl.trllevel', 
    //  'missiontype.type as missionType' , 'missiontype.id as missionID' , 'orgperformingwork.name as orgName' , 
    //  'orgperformingwork.description as orgDescription' , 'orgperformingwork.id as orgID' , 'orgperformingwork.code as orgCode' , 
    //  'foundingSources.id as sourceID' , 'foundingSources.name as sourceName' , 
    //  'legalentityrole.name as legalName' ,'legalentityrole.id as legalID' , 'projects.*' , 'missiontype.*')

    // ->join('projects' , 'projects.id' , '=' , 'ref_projectorganization.id_project') 
    //     ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
    //     ->join('trl' , function($join){
    //         $join->on('trl.id' , '=' ,'projects.id_trlstart');
    //         $join->on('trl.id' , '=' ,'projects.id_trlactual');
    //         $join->on('trl.id' , '=' ,'projects.id_trlfinal');
    //     })
    //     ->join('foundingsources' , 'foundingsources.id' , '=' , 'projects.id_foundsource')
    //     ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'projects.id_techreferred')
    //     ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
    //     ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
    //     ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
    //     ->join('status' , 'status.id' , '=' , 'projects.id_status')
    // ->join('orgperformingwork' , 'orgperformingwork.id' , '=' , 'ref_projectorganization.id_orgperformingwork')
    //     ->join('orgtype' , 'orgtype.id' , '=' , 'orgperformingwork.id_type')
    //     ->join('humanentity' , 'humanentity.id' , '=' , 'orgperformingwork.id_humanentity')
    //     ->join('location' , 'location.id' , '=' , 'orgperformingwork.id_location')
    //     ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
    // ->where('missiontype.id' , $id)
    // ->get();

    $projOrg = missiontype::with('projects.legalentityroles' ,'projects.foundingsource','projects.status' , 'projects.techreferred.techarea' , 'projects.orgperformingworks.location')
    // ->with('orgperformingworks.location' , 'orgperformingworks.humanentity' , 'orgperformingworks.orgtype')
    ->where('id' , $id)
    ->first();

    $count = $projOrg->projects->unique('id')->count();
    $active = $projOrg->projects->where('status.status' , 'Active')->count();
    $complete = $projOrg->projects->where('status.status' , 'Completed')->count();
    $partnership = $projOrg->projects->where('status.status' , 'Partnership')->count();


    // return response()->json($projOrg);

        return view('missionTypeClickingPage' , compact('projOrg' , 'count' , 'active' , 'complete' , 'partnership'));
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
        $this->middleware('auth')->except('index' , 'missionTypeClickingPage');
    }

}

