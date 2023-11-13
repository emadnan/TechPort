<?php

namespace App\Http\Controllers;

use App\Models\definition;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class DefinitionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function definitionpage ()
    {
        
        $definitions = Db::table('definitions')->get();
        return view('dashboard.definitionPage' , ['data'=>$definitions]);

    }

    public function read (string $id)
    {
        $defRead = Db::table('definitions')->where('id',$id)->get();

        return response()->json(['data'=>$defRead]);
    }

    public function addPage()
    {
        return view('dashboard.createDefinition');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'definition'=> 'required',
            'report'=> 'required',
          
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $defCreate = DB::table('definitions')->insert([
            'name'=> $req->name,
            'definition'=> $req->definition,
            'report'=> $req->report,
            'note'=> $req->note,
        ]);

        if($defCreate)
        {
            $latestID = definition::latest()->value('id');
            $defRow = DB::table('definitions')->where('id', $latestID)->get();
            // return redirect()->route('businessArea');
          return response()->json(['message' => 'Business Area Added successfully' , 'addRow'=>$defRow]);
        }
        else 
        {
            return response()->json(['message' => 'Business Area Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upDefinition = DB::table('definitions')->where('id',$id)->get();
        return response()->json(['row'=>$upDefinition]);
    }

    public function update(Request $req)
    {
        
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'definition'=> 'required',
            'report'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $defUpdate = DB::table('definitions')->where('id',$id)->update([
            'name'=> $req->name,
            'definition'=> $req->definition,
            'report'=> $req->report,
            'note'=> $req->note,
        ]);
        if($defUpdate)
        {
            $updateDEF = DB::table('definitions')->where('id', $id)->get();
            return response()->json(['message' => 'Definition Updated Successfully' , 'updateDEF'=>$updateDEF]);
        }
        else
        {
            return response()->json(['message' => 'Definition Was Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $defDelete = DB::table('definitions')->where('id',$id)->delete();
        if($defDelete)
        {
            return response()->json(['message' => 'Definition  Deleted Successfully' , 'data'=>$defDelete]);
        } 
        else
        {
            return response()->json(['message' => 'Definition  Was Not Deleted Successfully']);
        }
    }
}