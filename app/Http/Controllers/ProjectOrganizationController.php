<?php

namespace App\Http\Controllers;

use App\Models\legalentityrole;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProjectOrganizationController extends Controller
{
    public function projectOrganizationPage ()
    {
       
        $projects = project::get();
        $orgWorks = orgperformingwork::get();
        $roles = legalentityrole::get();
        $projOrgs = ref_projectorganization::select('projects.name as projectName' , 'orgperformingwork.name as orgName' , 'legalentityrole.name as legalName' , 'ref_projectorganization.*' )
        ->join('projects' , 'projects.id' , '=' , 'ref_projectorganization.id_project')
        ->join('orgperformingwork' , 'orgperformingwork.id' , '=' , 'ref_projectorganization.id_orgperformingwork')
        ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
        ->get();
        // return response()->json($projTechs);
        return view('dashboard.projectOrganizationPage' , compact('orgWorks' , 'projects' , 'roles' , 'projOrgs'));
    }

    public function read (string $id)   
    {
        $projOrgs = ref_projectorganization::select('projects.name as projectName' , 'orgperformingwork.name as orgName' , 'legalentityrole.name as legalName' , 'ref_projectorganization.*' )
        ->join('projects' , 'projects.id' , '=' , 'ref_projectorganization.id_project')
        ->join('orgperformingwork' , 'orgperformingwork.id' , '=' , 'ref_projectorganization.id_orgperformingwork')
        ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
        ->where('ref_projectorganization.id',$id)
        ->get();
        // $read = ref_projecttechnology::where('id',$id)->get();

        return response()->json(['data'=>$projOrgs]);
    }
    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'organization'=> 'required',
            'legalentity'=> 'required',
            'project'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = ref_projectorganization::insert([
            'id_orgperformingwork'=> $req->organization,
            'id_legalentityrole'=> $req->legalentity,
            'id_project'=> $req->project,
        ]);

        if($Create)
        {
            $latestID = ref_projectorganization::latest()->value('id');
            $projOrgs = ref_projectorganization::select('projects.name as projectName' , 'orgperformingwork.name as orgName' , 'legalentityrole.name as legalName' , 'ref_projectorganization.*' )
            ->join('projects' , 'projects.id' , '=' , 'ref_projectorganization.id_project')
            ->join('orgperformingwork' , 'orgperformingwork.id' , '=' , 'ref_projectorganization.id_orgperformingwork')
            ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
            ->where('ref_projectorganization.id',$latestID)
            ->get();

            return response()->json(['message' => 'Project Organization Added successfully' , 'eqRow'=>$projOrgs]);
        }
        else 
        {
            return response()->json(['message' => 'Project Organization Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = ref_projectorganization::where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'organization'=> 'required',
            'legalentity'=> 'required',
            'project'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = ref_projectorganization::where('id',$id)->update([
            'id_orgperformingwork'=> $req->organization,
            'id_legalentityrole'=> $req->legalentity,
            'id_project'=> $req->project,
        ]);

        if($Update)
        {
            $projOrgs = ref_projectorganization::select('projects.name as projectName' , 'orgperformingwork.name as orgName' , 'legalentityrole.name as legalName' , 'ref_projectorganization.*' )
            ->join('projects' , 'projects.id' , '=' , 'ref_projectorganization.id_project')
            ->join('orgperformingwork' , 'orgperformingwork.id' , '=' , 'ref_projectorganization.id_orgperformingwork')
            ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
            ->where('ref_projectorganization.id',$id)
            ->get();
            if($projOrgs)
            {
              return response()->json(['message' => 'Project Organization Updated Successfully' , 'updateEQ'=>$projOrgs]);
            }

        }
        else
        {
            return response()->json(['message' => 'Project Technology Was Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete =ref_projectorganization::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Project Organization Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Project Organization Was Not Deleted Successfully']);
        }
    }       


    public function __construct()
    {
        $this->middleware('auth');
    }
}
