<?php

namespace App\Http\Controllers;

use App\Models\reference;
use App\Models\requirement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class RequirementController extends Controller
{
    public function requirementPage ()
    {
        $references = reference::get();
        $requirements = requirement::select('references.*' , 'requirements.*' )
        ->join('references' , 'references.id' , '=' , 'requirements.id_reference')
        ->get();
        return view('dashboard.requirementPage' , compact('references' , 'requirements'));
    }

    public function read (string $id)   
    {
        $requirements = requirement::select('references.*' , 'requirements.*' )
        ->join('references' , 'references.id' , '=' , 'requirements.id_reference')
        ->where('requirements.id',$id)
        ->get();
        return response()->json(['data'=>$requirements]);
    }
    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'reference'=> 'required',
            'description'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = requirement::insert([
            'id_reference'=> $req->reference,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = requirement::latest()->value('id');
            $requirements = requirement::select('references.*' , 'requirements.*' )
            ->join('references' , 'references.id' , '=' , 'requirements.id_reference')
            ->where('requirements.id',$latestID)
            ->get();

            return response()->json(['message' => 'Requirement Added successfully' , 'eqRow'=>$requirements]);
        }
        else 
        {
            return response()->json(['message' => 'Requirement Was Not Added']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = requirement::where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'reference'=> 'required',
            'description'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = requirement::where('id',$id)->update([
            'id_reference'=> $req->reference,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $requirements = requirement::select('references.*' , 'requirements.*' )
            ->join('references' , 'references.id' , '=' , 'requirements.id_reference')
            ->where('requirements.id',$id)
            ->get();
            if($requirements)
            {
              return response()->json(['message' => 'Requirement Updated Successfully' , 'updateEQ'=>$requirements]);
            }

        }
        else
        {
            return response()->json(['message' => 'Requirement Was Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete =requirement::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Requirement Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Requirement Was Not Deleted']);
        }
    }       

    public function __construct()
    {
        $this->middleware('auth');
    }
}
