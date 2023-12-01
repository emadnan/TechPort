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
        // $locations = location::get();
        // $sources = foundingsource::where('id' , $id)->get();
        // $missions = missiontype::get();
        // $orgs = orgperformingwork::get();
        // $entities = legalentityrole::get();
        // $projects = project::get();

    //     $projOrgs = ref_projectorganization::select('orgtype.type as orgtype' , 'humanentity.name as humanName' ,
    //     'humanentity.surname as humanSurName' , 'location.city' ,'location.state' ,'location.id as locationID' ,
    //     'projects.name as projectName' , 'projects.description as projectDescription' , 'status.status as status',
    //     'techsector.techsector' , 'techareas.techarea' , 'techniche.techniche' , 'trl.trllevel', 
    //     'missiontype.type as missionType' , 'missiontype.id as missionID' , 'orgperformingwork.name as orgName' , 
    //     'orgperformingwork.description as orgDescription' , 'orgperformingwork.id as orgID' , 'orgperformingwork.code as orgCode' , 
    //     'foundingSources.id as sourceID' , 'foundingSources.name as sourceName' , 
    //     'legalentityrole.name as legalName' ,'legalentityrole.id as legalID' , 'ref_projectorganization.*' , 'projects.*' )
   
    //    ->join('projects' , 'projects.id' , '=' , 'ref_projectorganization.id_project') 
    //        ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
    //        ->join('trl' , function($join){
    //            $join->on('trl.id' , '=' ,'projects.id_trlstart');
    //            $join->on('trl.id' , '=' ,'projects.id_trlactual');
    //            $join->on('trl.id' , '=' ,'projects.id_trlfinal');
    //        })
    //        ->join('foundingsources' , 'foundingsources.id' , '=' , 'projects.id_foundsource')
    //        ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'projects.id_techreferred')
    //        ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
    //        ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
    //        ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
    //        ->join('status' , 'status.id' , '=' , 'projects.id_status')
    //    ->join('orgperformingwork' , 'orgperformingwork.id' , '=' , 'ref_projectorganization.id_orgperformingwork')
    //        ->join('orgtype' , 'orgtype.id' , '=' , 'orgperformingwork.id_type')
    //        ->join('humanentity' , 'humanentity.id' , '=' , 'orgperformingwork.id_humanentity')
    //        ->join('location' , 'location.id' , '=' , 'orgperformingwork.id_location')
    //        ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
    //    ->where('foundingsources.id' , $id)
    //    ->get();


    // $projOrg = foundingsource::with('projects.missiontype','projects.status' , 'projects.techreferred.techarea' , 'projects.orgperformingworks')


    $projOrg = foundingsource::with('projects.missiontype','projects.status' , 'projects.techreferred.techarea' , 'projects.orgperformingworks.location' , 'projects.legalentityroles')
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
        $sources = foundingsource::get();
        return view('foundSourcesPage' , ['data' => $sources]);
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

        $validator = Validator::make($req->all(),[
            'name'=> 'required',
             'code'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $fsCreate = DB::table('foundingsources')->insert([
            'code'=> $req->code,
            'name'=> $req->name,
            'note'=> $req->note,
        ]);

        if($fsCreate)
        {
            $latestID = foundingsource::latest()->value('id');
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
            'code'=>'required', 
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $fsUpdate = DB::table('foundingsources')->where('id',$id)->update([
            'code'=> $req->code,
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