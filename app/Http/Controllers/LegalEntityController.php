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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LegalEntityController extends Controller
{
    public function legalEntityClickingPage(string $id)
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
    ->where('legalentityrole.id' , $id)
    ->get();
        return view('legalEntityClickingPage' , compact('projOrgs') );
    }

    public function index()
    {
        $entities = legalentityrole::get();
     return view('legalEntityRolesPage' , ['data'=>$entities]); 
        // return response()->json(['data'=>$entities]);
    }

    public function legalEntityPage ()
    {
        $entity = DB::table('legalentityrole')->get();
        return view('dashboard.legalEntityForm' , ['data'=>$entity]);
    }

    public function read (string $id)
    {
        $heRead = Db::table('legalentityrole')->where('id',$id)->get();

        return response()->json(['data'=>$heRead]);
    }

    public function addPage()
    {
        return view('dashboard.createLegalEntity');
    }

    public function create(Request $req)
    {
        // return response()->json(['message'=>'tempp test'])
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'description'=> 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $create = DB::table('legalentityrole')->insert([
            'name'=> $req->name,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);
        
        if($create)
        {
            $latestID = legalentityrole::latest()->value('id');
            $row = DB::table('legalentityrole')->where('id', $latestID)->get();

            return response()->json(['message' => 'Legal Entity  Added successfully' , 'Row'=>$row]);
        }
        else 
        {
            return response()->json(['message' => 'Legal Entity  Was Not Added successfully']);
        }
        // $legalentityrole = new legalentityrole;
        // $legalentityrole->id = $req->id;
        // $legalentityrole->name = $req->name;
        // $legalentityrole->description = $req->description;
        // $legalentityrole->save();
        // return response()->json(['message'=>'Legal Entity Added successfully' , 'Row'=>$legalentityrole]);
    }

    public function updatePage(string $id)
    {
        $upEntity = DB::table('legalentityrole')->where('id',$id)->get();
        return response()->json(['row'=>$upEntity]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'description'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;

        $Update = DB::table('legalentityrole')->where('id',$id)->update([
            'name'=> $req->name,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);
        if($Update)
        {
            $update = DB::table('legalentityrole')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Legal Entity Role Updated Successfully' , 'update'=>$update]);
            }        }
        else
        {
            return response()->json(['message' => 'Legal Entity Role Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('legalentityrole')->where('id',$id)->delete();
        if($Delete)
        {
            return response()->json(['message' => 'Legal Entity Role  Deleted Successfully' , 'data'=>$Delete]);
        } 
        else
        {
            return response()->json(['message' => 'Legal Entity Role  Was Not Deleted Successfully']);
        }
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'legalEntityClickingPage');
    }
}
