<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\Project_target;
use App\Models\ref_projectorganization;
use App\Models\status;
use App\Models\techreferred;
use App\Models\trl;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
  public function index(string $id)
  {
    $projOrg = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea' , 'orgperformingworks.location' , 'legalentityroles','trlactual' , 'trlstart' , 'trlfinal')
    ->where('id' , $id)
    ->first();
    
// return response()->json($projOrg);

    return view('lowEvolutionPage' , compact('projOrg'));

  }

  public function downloadPdf(string $id)
  {
    $projOrg = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea' , 'orgperformingworks.location' , 'legalentityroles')
    ->where('id' , $id)
    ->first();

    $pdf = Pdf::loadView('downloadPdf.projectPdf', compact('projOrg'))->setOptions(['defaultFont' => 'sans-serif']);
    return $pdf->stream();

    
// return response()->json($projOrg);
    // return view('lowEvolutionPage' , compact('projOrg'));

  }

    public function projectPage()
    {
        // $projects = project::with('foundingsource' , 'missiontype', 'status' , 'techareas' , 'orgperformingworks.location' , 'legalentityroles' , 'project_target')


        $projects = project::select('techareas.techarea' ,
        'missiontype.type',
        'foundingsources.name as sourceName',
        'status.status' , 'project_targets.name as target',
        'trl_start.trllevel as trlstartlevel' ,'trl_actual.trllevel as trlactuallevel' ,'trl_final.trllevel as trlfinallevel' , 
        'projects.*')
        ->join('project_targets' , 'project_targets.id' , '=' ,'projects.id_project_target')
        ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
        ->join('trl as trl_start', 'trl_start.id', '=', 'projects.id_trlstart')
        ->join('trl as trl_actual', 'trl_actual.id', '=', 'projects.id_trlactual')
        ->join('trl as trl_final', 'trl_final.id', '=', 'projects.id_trlfinal')
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
        $targets = Project_target::get();
        $missions = missiontype::get();
        $trls = trl::get();
        $sources = foundingsource::get();
        $statuses = status::get();
        // return response()->json(compact('projects'));
        return view('dashboard.projectForm' , compact('projects' , 'techRefs' , 'missions' , 'trls' , 'sources' , 'statuses' , 'targets'));
    }
    public function read( string $id)
    {

        $project = project::select('techareas.techarea' ,
        'missiontype.type',
        'foundingsources.name as sourceName',
        'status.status' , 'project_targets.name as target',
        'trl_start.trllevel as trlstartlevel' ,'trl_actual.trllevel as trlactuallevel' ,'trl_final.trllevel as trlfinallevel' , 
        'projects.*')
        ->join('project_targets' , 'project_targets.id' , '=' ,'projects.id_project_target')
        ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
        ->join('trl as trl_start', 'trl_start.id', '=', 'projects.id_trlstart')
        ->join('trl as trl_actual', 'trl_actual.id', '=', 'projects.id_trlactual')
        ->join('trl as trl_final', 'trl_final.id', '=', 'projects.id_trlfinal')
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
            'techreferred'=> 'required',
            'projecttarget'=> 'required',
            'missiontype'=> 'required',
            'trlstart'=> 'required',
            'trlactual'=> 'required',
            'trlfinal'=> 'required',
            'foundsource'=> 'required',
            'status'=> 'required',
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
        $project->id_project_target = $req->projecttarget;
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
            $project = project::select('techareas.techarea' ,
        'missiontype.type',
        'foundingsources.name as sourceName',
        'status.status' , 'project_targets.name as target',
        'trl_start.trllevel as trlstartlevel' ,'trl_actual.trllevel as trlactuallevel' ,'trl_final.trllevel as trlfinallevel' , 
        'projects.*')
        ->join('project_targets' , 'project_targets.id' , '=' ,'projects.id_project_target')
        ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
        ->join('trl as trl_start', 'trl_start.id', '=', 'projects.id_trlstart')
        ->join('trl as trl_actual', 'trl_actual.id', '=', 'projects.id_trlactual')
        ->join('trl as trl_final', 'trl_final.id', '=', 'projects.id_trlfinal')
        ->join('foundingsources' , 'foundingsources.id' , '=' , 'projects.id_foundsource')
        ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'projects.id_techreferred')
               ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
               ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
               ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
        ->join('status' , 'status.id' , '=' , 'projects.id_status')
        ->where('projects.id', $id)
        ->get();
            
            return response()->json(['errors'=>false , 'message'=> 'Project Added Successfully In DataBase!!' , 'project'=>$project , 'id' => $id]);
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
            'techreferred'=> 'required',
            'projecttarget'=> 'required',
            'missiontype'=> 'required',
            'trlstart'=> 'required',
            'trlactual'=> 'required',
            'trlfinal'=> 'required',
            'foundsource'=> 'required',
            'status'=> 'required',
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
        $project->id_project_target = $req->projecttarget;
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
            $update = project::select('techareas.techarea' ,
        'missiontype.type',
        'foundingsources.name as sourceName',
        'status.status' , 'project_targets.name as target',
        'trl_start.trllevel as trlstartlevel' ,'trl_actual.trllevel as trlactuallevel' ,'trl_final.trllevel as trlfinallevel' , 
        'projects.*')
        ->join('project_targets' , 'project_targets.id' , '=' ,'projects.id_project_target')
        ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
        ->join('trl as trl_start', 'trl_start.id', '=', 'projects.id_trlstart')
        ->join('trl as trl_actual', 'trl_actual.id', '=', 'projects.id_trlactual')
        ->join('trl as trl_final', 'trl_final.id', '=', 'projects.id_trlfinal')
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
        $this->middleware('auth')->except('index' , 'downloadPdf');
    }
}

