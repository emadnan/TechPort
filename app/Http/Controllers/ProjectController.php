<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\missiontype;
use App\Models\project;
use App\Models\status;
use App\Models\techreferred;
use App\Models\trl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{

  public function index()
  {
    //  $tech = techreferred::select('techareas.*','ref_techreferred.*','techsector.*','techniche.*')
    //         ->join('techareas','techareas.id','=','ref_techreferred.id_techarea')
    //         ->join('techsector','techsector.id','=','ref_techreferred.id_techsector')
    //         ->join('techniche','techniche.id','=','ref_techreferred.id_techniche')
    //         ->get();
     $projects = project::select('missiontype.*','trl.*','foundingsources.name as sourceName','status.*' , 'projects.*')
     ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
     ->join('trl' , function($join){
        $join->on('trl.id' , '=' ,'projects.id_trlstart');
        $join->on('trl.id' , '=' ,'projects.id_trlactual');
        $join->on('trl.id' , '=' ,'projects.id_trlfinal');
     })
     ->join('foundingsources' , 'foundingsources.id' , '=' , 'projects.id_foundsource')
     ->join('status' , 'status.id' , '=' , 'projects.id_status')
     ->get();
// return response()->json($projects);
    return view('lowEvolutionPage' , compact('projects'));

  }

    public function projectPage()
    {
        $projects = project::get();
        $techRefs = techreferred::get();
        $missions = missiontype::get();
        $trls = trl::get();
        $sources = foundingsource::get();
        $statuses = status::get();
        return view('projectForm' , compact('projects' , 'techRefs' , 'missions' , 'trls' , 'sources' , 'statuses'));
    }
    public function read( string $id)
    {
        $project = project::where('id', $id)
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

        $project = new project;
        $project->code = $req->code;
        $project->name = $req->name;
        $project->description = $req->description;
        $project->benifit = $req->benifit;
        $project->id_doc = $req->id_doc;
        $project->image = $req->image;
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



        if($project)
        {
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
        $update = project::where('id', $id)->update([
            'code'=>$req->code,
            'name'=> $req->name,
            'description'=> $req->description,
            'benifit'=> $req->benifit,
            'id_doc'=> $req->id_doc,
            'image'=> $req->image,
            'startdate'=> $req->startdate,
            'enddate'=> $req->enddate,
            'id_techreferred'=> $req->techreferred,
            'projecttarget'=> $req->projecttarget,
            'id_missiontype'=> $req->missiontype,
            'id_trlstart'=> $req->trlstart,
            'id_trlactual'=> $req->trlactual,
            'id_trlfinal'=> $req->trlfinal,
            'id_foundsource'=> $req->foundsource,
            'id_status'=> $req->status,
            'note'=> $req->note,
        ]);
        $data = project::find($id);
        if($update)
        {
            return response()->json(['success'=> true , 'message'=>'Project Updated Successfully !!!' , 'data'=> $data]);  
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
        $this->middleware('auth')->except('index');
    }
}

