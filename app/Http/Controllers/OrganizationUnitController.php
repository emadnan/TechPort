<?php

namespace App\Http\Controllers;

use App\Models\organizationunit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrganizationUnitController extends Controller
{

    public function organizationUnitPage ()
    {
        $mission = organizationunit::get();
        return view('dashboard.organizationUnitPage' , ['data'=>$mission]);
    }

    public function read (string $id)
    {
        $read = organizationunit::where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'type'=> 'required',
            'unitcode'=> 'required',
            'description'=> 'required',
            'releventcompany'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = organizationunit::insert([
            'type'=> $req->type,
            'unitcode'=> $req->unitcode,
            'description'=> $req->description,
            'releventcompany'=> $req->releventcompany,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = organizationunit::latest()->value('id');
            $newRow =organizationunit::where('id', $latestID)->get();
            return response()->json(['message' => 'Organization Unit  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Organization Unit  Was Not Added']);
        }
    }

    public function updatePage(string $id)
    {
        $upMission = organizationunit::where('id', $id)->get();
        return response()->json(['row'=>$upMission]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'type'=> 'required',
            'unitcode'=> 'required',
            'description'=> 'required',
            'releventcompany'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;

        $Update = organizationunit::where('id',$id)->update([
            'type'=> $req->type,
            'unitcode'=> $req->unitcode,
            'description'=> $req->description,
            'releventcompany'=> $req->releventcompany,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = organizationunit::where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Organization Unit Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Organization Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $delete = organizationunit::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Organization Unit  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Organization Unit  Was Not Deleted Successfully']);
        }
    }


    public function __construct()
    {
        $this->middleware('auth');
    }

}
