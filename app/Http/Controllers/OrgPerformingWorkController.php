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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrgPerformingWorkController extends Controller
{
    public function organizationClickingPage (string $id)
    {

        $projOrgs = ref_projectorganization::select('orgtype.type as orgtype' , 'humanentity.name as humanName' ,
        'humanentity.surname as humanSurName' , 'location.city' ,'location.state' ,'location.id as locationID' ,
        'projects.name as projectName' , 'projects.description as projectDescription' , 'status.status as status',
        'techsector.techsector' , 'techareas.techarea' , 'techniche.techniche' , 'trl.trllevel', 
        'missiontype.type as missionType' , 'missiontype.id as missionID' , 'orgperformingwork.name as orgName' , 
        'orgperformingwork.description as orgDescription' , 'orgperformingwork.id as orgID' , 'orgperformingwork.code as orgCode' , 
        'foundingSources.id as sourceID' , 'foundingSources.name as sourceName' , 
        'legalentityrole.name as legalName' ,'legalentityrole.id as legalID' , 'ref_projectorganization.*' , 'projects.*' , 'orgperformingwork.*')
   
       ->join('projects' , 'projects.id' , '=' , 'ref_projectorganization.id_project') 
           ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
           ->join('trl' , function($join){
               $join->on('trl.id' , '=' ,'projects.id_trlstart');
               $join->on('trl.id' , '=' ,'projects.id_trlactual');
               $join->on('trl.id' , '=' ,'projects.id_trlfinal');
           })
           ->join('foundingsources' , 'foundingsources.id' , '=' , 'projects.id_foundsource')
           ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'projects.id_techreferred')
           ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
           ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
           ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
           ->join('status' , 'status.id' , '=' , 'projects.id_status')
       ->join('orgperformingwork' , 'orgperformingwork.id' , '=' , 'ref_projectorganization.id_orgperformingwork')
           ->join('orgtype' , 'orgtype.id' , '=' , 'orgperformingwork.id_type')
           ->join('humanentity' , 'humanentity.id' , '=' , 'orgperformingwork.id_humanentity')
           ->join('location' , 'location.id' , '=' , 'orgperformingwork.id_location')
           ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
       ->where('orgperformingwork.id' , $id)
       ->get();
   


        return view('organizationClickingPage' , compact('projOrgs'));
    }

    public function index()
    {
        $orgs = orgperformingwork::get();
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

        $validator = Validator::make($req->all() , [
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
            'typeoflocation' => 'required',
            'note' => 'nullable',
        ]);

        if($validator->fails())
        {
            return response()->json(['errors' =>$validator->errors()->toArray() , 'oldInput'=>$req->all()]);
        }

        $create = new  orgperformingwork;
        $create->code = $req->code;
        $create->name = $req->name;
        $create->description = $req->description;
        $create->typeoflocation = $req->typeoflocation;
        $create->id_type = $req->id_type;
        $create->id_humanentity = $req->id_humanentity;
        $create->id_location = $req->id_location;
        $create->note = $req->note;
        $create->save();

        // $id = $req->id;
        if($create)
        {
            $latestID = orgperformingwork::latest()->value('id');
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
            'code' => 'required',
            'name' => 'required',
            'description' => 'required',
            'typeoflocation' => 'required',
            'note' => 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = orgperformingwork::where('id',$id)->update([
            'code'=> $req->code,
            'name'=> $req->name,
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
        $this->middleware('auth')->except('index' , 'organizationClickingPage');
    }
}

