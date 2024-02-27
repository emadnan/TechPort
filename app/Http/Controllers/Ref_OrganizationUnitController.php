<?php

namespace App\Http\Controllers;

use App\Models\organizationunit;
use App\Models\project;
use App\Models\ref_organizationunit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Ref_OrganizationUnitController extends Controller
{
    public function ref_OrganizationUnitPage ()
    {
       
        $projects = project::get();
        $organizations = organizationunit::get();
        $ref_orgs = ref_organizationunit::select('projects.name as projectName' , 'organizationunit.type as type' , 'ref_organizationunit.*' )
        ->join('projects' , 'projects.id' , '=' , 'ref_organizationunit.id_project')
        ->join('organizationunit' , 'organizationunit.id' , '=' , 'ref_organizationunit.id_organizationunit')
        ->get();
        return view('dashboard.ref_OrganizationUnitPage' , compact('organizations' , 'projects' , 'ref_orgs'));
    }

    public function read (string $id)   
    {
        $ref_org = ref_organizationunit::select('projects.name as projectName' , 'organizationunit.type as type' , 'ref_organizationunit.*' )
        ->join('projects' , 'projects.id' , '=' , 'ref_organizationunit.id_project')
        ->join('organizationunit' , 'organizationunit.id' , '=' , 'ref_organizationunit.id_organizationunit')
        ->where('ref_organizationunit.id',$id)
        ->get();

        return response()->json(['data'=>$ref_org]);
    }
    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'organization'=> 'required',
            'project'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = ref_organizationunit::insert([
            'id_organizationunit'=> $req->organization,
            'id_project'=> $req->project,
        ]);

        if($Create)
        {
            $latestID = ref_organizationunit::latest()->value('id');
            $ref_org = ref_organizationunit::select('projects.name as projectName' , 'organizationunit.type as type' , 'ref_organizationunit.*' )
            ->join('projects' , 'projects.id' , '=' , 'ref_organizationunit.id_project')
            ->join('organizationunit' , 'organizationunit.id' , '=' , 'ref_organizationunit.id_organizationunit')
            ->where('ref_organizationunit.id',$latestID)
            ->get();

            return response()->json(['message' => 'Project Organization Unit Added successfully' , 'eqRow'=>$ref_org]);
        }
        else 
        {
            return response()->json(['message' => 'Project Organization Unit Was Not Added']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = ref_organizationunit::where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'organization'=> 'required',
            'project'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = ref_organizationunit::where('id',$id)->update([
            'id_organizationunit'=> $req->organization,
            'id_project'=> $req->project,
        ]);

        if($Update)
        {
            $ref_org = ref_organizationunit::select('projects.name as projectName' , 'organizationunit.type as type' , 'ref_organizationunit.*' )
            ->join('projects' , 'projects.id' , '=' , 'ref_organizationunit.id_project')
            ->join('organizationunit' , 'organizationunit.id' , '=' , 'ref_organizationunit.id_organizationunit')
            ->where('ref_organizationunit.id',$id)
            ->get();
            if($ref_org)
            {
              return response()->json(['message' => 'Project Organization Unit Updated Successfully' , 'updateEQ'=>$ref_org]);
            }

        }
        else
        {
            return response()->json(['message' => 'Project Technology Unit Was Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete =ref_organizationunit::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Project Organization Unit Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Project Organization Unit Was Not Deleted Successfully']);
        }
    }       


    public function __construct()
    {
        $this->middleware('auth');
    }
}
