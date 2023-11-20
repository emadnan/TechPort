<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function locationsClickingPage (string $id)
    {
        $projOrgs = ref_projectorganization::select('orgtype.type as orgtype' , 'humanentity.name as humanName' ,
     'humanentity.surname as humanSurName' , 'location.city' ,'location.state' ,'location.id as locationID' ,
     'projects.name as projectName' , 'projects.description as projectDescription' , 'status.status as status',
     'techsector.techsector' , 'techareas.techarea' , 'techniche.techniche' , 'trl.trllevel', 
     'missiontype.type as missionType' , 'missiontype.id as missionID' , 'orgperformingwork.name as orgName' , 
     'orgperformingwork.description as orgDescription' , 'orgperformingwork.id as orgID' , 'orgperformingwork.code as orgCode' , 
     'foundingSources.id as sourceID' , 'foundingSources.name as sourceName' , 
     'legalentityrole.name as legalName' ,'legalentityrole.id as legalID' , 'ref_projectorganization.*' , 'projects.*' )

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
    ->where('location.id' , $id)
    ->get();

// return response()->json($projOrgs);
        return view('locationClickingPage' , compact('projOrgs') );
    }
  
    public function index()
    {
        $locations = location::get();
        
        // return response()->json(['locations'=>$locations]);
    return view('locationsPage' , ['data'=>$locations]);
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
        $this->middleware('auth')->except('index' , 'locationsClickingPage');
    }
}
