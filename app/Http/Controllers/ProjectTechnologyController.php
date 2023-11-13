<?php

namespace App\Http\Controllers;

use App\Models\ref_projecttechnology;
use App\Models\technology;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class ProjectTechnologyController extends Controller
{
    public function projectTechnologyPage ()
    {
        // $projTechs = ref_projecttechnology::get();
        $projects = Project::get();
        $techs = technology::get();
        $projTechs = ref_projecttechnology::select('projects.name as projectName' , 'projects.id as projectsID' , 'technologies.id as technologyID' , 'technologies.technology' , 'ref_projecttechnologies.*' )
        ->join('projects' , 'projects.id' , '=' , 'ref_projecttechnologies.id_project')
        ->join('technologies' , 'technologies.id' , '=' , 'ref_projecttechnologies.id_technology')
        ->get();
        // return response()->json($projTechs);
        return view('dashboard.projectTechnologyPage' , compact('projTechs' , 'projects' , 'techs'));
    }

    public function read (string $id)   
    {
        $read = ref_projecttechnology::where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }
    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'project'=> 'nullable',
            'technology'=> 'nullable',
            'date'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = ref_projecttechnology::insert([
            'id_project'=> $req->project,
            'id_technology'=> $req->technology,
            'date'=> $req->date,
        ]);

        if($Create)
        {
            $latestID = ref_projecttechnology::latest()->value('id');
            // $eqRow = ref_projecttechnology::where('id', $latestID)->get();
            $projTechs = ref_projecttechnology::select('projects.name as projectName' , 'projects.id as projectsID' , 'technologies.id as technologyID' , 'technologies.technology' , 'ref_projecttechnologies.*' )
            ->join('projects' , 'projects.id' , '=' , 'ref_projecttechnologies.id_project')
            ->join('technologies' , 'technologies.id' , '=' , 'ref_projecttechnologies.id_technology')
            ->where('ref_projecttechnologies.id', $latestID)
            ->get();

            return response()->json(['message' => 'Project Technology Added successfully' , 'eqRow'=>$projTechs]);
        }
        else 
        {
            return response()->json(['message' => 'Project TRechnology Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = ref_projecttechnology::where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'project'=> 'nullable',
            'echnology'=> 'nullable',
            'date'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = ref_projecttechnology::where('id',$id)->update([
            'id_project'=> $req->project,
            'id_technology'=> $req->technology,
            'date'=> $req->date,
        ]);

        if($Update)
        {
            $updateEQ = ref_projecttechnology::select('projects.name as projectName' , 'projects.id as projectsID' , 'technologies.id as technologyID' , 'technologies.technology' , 'ref_projecttechnologies.*' )
            ->join('projects' , 'projects.id' , '=' , 'ref_projecttechnologies.id_project')
            ->join('technologies' , 'technologies.id' , '=' , 'ref_projecttechnologies.id_technology')
            ->where('ref_projecttechnologies.id' , $id)
            ->get();
            // $updateEQ =ref_projecttechnology::where('id', $id)->get();
            if($updateEQ)
            {
              return response()->json(['message' => 'Project Technology Updated Successfully' , 'updateEQ'=>$updateEQ]);
            }

        }
        else
        {
            return response()->json(['message' => 'Project Technology Was Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete =ref_projecttechnology::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Project Technology Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Project Technology Was Not Deleted Successfully']);
        }
    }       
}
