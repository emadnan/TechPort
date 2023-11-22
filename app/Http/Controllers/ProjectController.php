<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use App\Models\status;
use App\Models\techreferred;
use App\Models\trl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    public function projectTargetsPage()
    {
        $projects = project::get();
        return view('projectTargetsPage' , compact('projects'));
    }

    public function projectTargetClickingPage(string $id)
    {
        // $locations = location::get();
        // $sources = foundingsource::get();
        // $missions = missiontype::get();
        // $orgs = orgperformingwork::get();
        // $entities = legalentityrole::get();
        // $projects = project::where('id' , $id)->get();

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
    ->where('projects.id' , $id)
    ->get();

        return view('projectTargetClickingPage' , compact('projOrgs') );
    }

  public function index(string $id)
  {
    $projOrgs = ref_projectorganization::select('orgtype.type as orgtype' , 'humanentity.name as humanName' ,
     'humanentity.surname as humanSurName' , 'location.city' ,'location.state' ,'location.id as locationID' ,
     'projects.name as projectName' , 'projects.description as projectDescription' ,
     'techsector.techsector' , 'techareas.techarea' , 'techniche.techniche' , 'trl.trllevel', 
     'missionType.type as missionType' , 'missionType.id as missionID' , 'orgperformingwork.name as orgName' , 
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
    ->where('projects.id' , $id)
    ->get();
    
// return response()->json($projOrgs);
    return view('lowEvolutionPage' , compact('projOrgs'));

  }

    public function projectPage()
    {
        $projects = project::select('techareas.techarea' , 'missiontype.type','trl.trllevel','foundingsources.name as sourceName','status.status' , 'projects.*')
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
        ->get();
        $techRefs = techreferred::select('techareas.techarea' , 'techsector.techsector' , 'techniche.techniche' , 'ref_techreferred.*')
        ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
        ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
        ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
        ->get();
        $missions = missiontype::get();
        $trls = trl::get();
        $sources = foundingsource::get();
        $statuses = status::get();
        return view('dashboard.projectForm' , compact('projects' , 'techRefs' , 'missions' , 'trls' , 'sources' , 'statuses'));
    }
    public function read( string $id)
    {

        $project = project::select('techareas.techarea' , 'missiontype.type','trl.trllevel','foundingsources.name as sourceName','status.status' , 'projects.*')
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
        ->where('projects.id', $id)
        ->get();
        
        return response()->json(['data'=> $project]);
    }

    public function create(Request $req)
    { 
        $validator = Validator::make($req->all() , [
            'code'=> 'nullable',
            'name'=> 'nullable',
            'description'=> 'nullable',
            'benifit'=> 'nullable',
            'id_doc'=> 'nullable | integer',
            'image'=> 'nullable | image',
            'startdate'=> 'nullable',
            'enddate'=> 'required',
            'id_techreferred'=> 'nullable',
            'projecttarget'=> 'required',
            'id_missiontype'=> 'nullable',
            'id_trlstart'=> 'nullable',
            'id_trlactual'=> 'nullable',
            'id_trlfinal'=> 'nullable',
            'id_foundsource'=> 'nullable',
            'id_status'=> 'nullable',
            'note'=> 'nullable',
        ]);

        if($validator->fails())
        {
            return response()->json(['errors' =>$validator->errors()->toArray() , 'oldInput'=>$req->all()]);
        }

        $filename='';
        if($req->hasfile('image'))
        {
            $image = $req->image;
            $filename = $image->getClientOriginalName();
            // $filename = time().'.'.$image->extension();
            $image->move(public_path('images'), $filename);         //this code is to upload image in public folder of code
        }



        $project = new project;
        $project->code = $req->code;
        $project->name = $req->name;
        $project->description = $req->description;
        $project->benifit = $req->benifit;
        $project->id_doc = $req->id_doc;
        $project->image = $filename;
        $project->startdate = $req->startdate;
        $project->enddate = $req->enddate;
        $project->projecttarget = $req->projecttarget;
        $project->id_techreferred = $req->techreferred;
        $project->id_missiontype = $req->missiontype;
        $project->id_trlstart = $req->trlstart;
        $project->id_trlactual = $req->trlactual;
        $project->id_trlfinal = $req->trlfinal;
        $project->id_foundsource = $req->foundsource;
        $project->id_status = $req->status;
        $project->note = $req->note;
        $project->save();
 
        $id = $project->id;
        if($project)
        {
            $project = project::select('techareas.techarea' , 'missiontype.type','trl.trllevel','foundingsources.name as sourceName','status.status' , 'projects.*')
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
            ->where('projects.id', $id)
            ->get();
            
            return response()->json(['errors'=>false , 'message'=> 'Project Added Successfully In DataBase!!' , 'project'=>$project]);
        }
        else
        {
            return response()->json(['success'=>false , 'errors'=> $project->errors() , 'alert'=>'Project Was Not Added In DataBase!!!!']);
        }  
    }


    public function updatePage(string $id)
    {
        $update = project::find($id);
        return response()->json(['row'=>$update]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'code'=> 'nullable',
            'name'=> 'nullable',
            'description'=> 'nullable',
            'benifit'=> 'nullable',
            'id_doc'=> 'nullable | integer',
            'image'=> 'nullable | image',
            'startdate'=> 'nullable',
            'enddate'=> 'required',
            'id_techreferred'=> 'nullable',
            'projecttarget'=> 'required',
            'id_missiontype'=> 'nullable',
            'id_trlstart'=> 'nullable',
            'id_trlactual'=> 'nullable',
            'id_trlfinal'=> 'nullable',
            'id_foundsource'=> 'nullable',
            'id_status'=> 'nullable',
            'note'=> 'nullable',
        ]);
        if($validator->fails())
        {
            return response()->json(['errors' =>$validator->errors()->toArray() , 'oldInput'=>$req->all()]);
        }
        $id = $req->id;
        $project =  project::where('id', $id)->first();
        if($req->hasfile('image'))
        {
            $image = $req->image;
            $filename = $image->getClientOriginalName();
            // $filename = time().'.'.$image->extension();
            $image->move(public_path('images'), $filename);         //this code is to upload image in public folder of code

            $project->image = $filename;

        }
        $project->code = $req->code;
        $project->name = $req->name;
        $project->description = $req->description;
        $project->benifit = $req->benifit;
        $project->id_doc = $req->id_doc;
        $project->startdate = $req->startdate;
        $project->enddate = $req->enddate;
        $project->projecttarget = $req->projecttarget;
        $project->id_techreferred = $req->techreferred;
        $project->id_missiontype = $req->missiontype;
        $project->id_trlstart = $req->trlstart;
        $project->id_trlactual = $req->trlactual;
        $project->id_trlfinal = $req->trlfinal;
        $project->id_foundsource = $req->foundsource;
        $project->id_status = $req->status;
        $project->note = $req->note;
        $project->save();
    
        // $update = project::where('id', $id)->update([
        //     'code'=>$req->code,
        //     'name'=> $req->name,
        //     'description'=> $req->description,
        //     'benifit'=> $req->benifit,
        //     'id_doc'=> $req->id_doc,
        //     'startdate'=> $req->startdate,
        //     'enddate'=> $req->enddate,
        //     'id_techreferred'=> $req->techreferred,
        //     'projecttarget'=> $req->projecttarget,
        //     'id_missiontype'=> $req->missiontype,
        //     'id_trlstart'=> $req->trlstart,
        //     'id_trlactual'=> $req->trlactual,
        //     'id_trlfinal'=> $req->trlfinal,
        //     'id_foundsource'=> $req->foundsource,
        //     'id_status'=> $req->status,
        //     'note'=> $req->note,
        // ]);
        // $data = project::find($id);
        if($project)
        {
            $update = project::select( 'projects.id as id','techareas.techarea' , 'missiontype.type','trl.trllevel','foundingsources.name as sourceName','status.status' , 'projects.*')
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
            ->where('projects.id', $id)
            ->get();
            return response()->json(['success'=> true , 'message'=>'Project Updated Successfully !!!' , 'data'=> $update]);  
        }
        else
        {
            return response()->json(['success'=> true , 'message'=>'ERROR !!!  Project Not Updated' ]);  

        }
    }

    public function delete(string $id)
    {
        $delete = project::where('id' , $id)->delete();
        if($delete)
        {
            return response()->json(['success'=> true , 'message' => 'Project Deleted Successfully!!!']);
        }
        else
        {   
            return response()->json(['success'=> false , 'errors'=>$delete->errors() , 'message' => 'Project Not Deleted !!!']);
        }
    }
    
    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'projectTargetsPage' , 'projectTargetClickingPage');
    }
}
