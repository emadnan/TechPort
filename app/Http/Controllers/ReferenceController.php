<?php

namespace App\Http\Controllers;

use App\Models\reference;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ReferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function referencePage ()
    {
        $reference = DB::table('references')->get();
        return view('dashboard.referencePage' , ['data'=>$reference]);
    }

    public function read (string $id)   
    {
        $read = Db::table('references')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('dashboard.createReference');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'reference'=> 'nullable',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('references')->insert([
            'reference'=> $req->reference,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = reference::latest()->value('id');
            $newRow = DB::table('references')->where('id', $latestID)->get();
            return response()->json(['message' => 'Reference  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Reference  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upReference = DB::table('references')->where('id', $id)->get();
        return response()->json(['row'=>$upReference]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'reference'=> 'nullable',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $Update = DB::table('references')->where('id',$id)->update([
            'reference'=> $req->reference,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('references')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Reference  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Reference Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = DB::table('references')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Reference  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Reference  Was Not Deleted Successfully']);
        }
    }
}
