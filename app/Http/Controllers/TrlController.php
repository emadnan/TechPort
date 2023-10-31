<?php

namespace App\Http\Controllers;

use App\Models\trl;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TrlController extends Controller
{
    public function trlPage ()
    {
        $sector = DB::table('trl')->get();
        return view('trlPage' , ['data'=>$sector]);
    }

    public function read (string $id)   
    {
        $read = Db::table('trl')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('createTrl');
    }

    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'trllevel'=> 'required',
            'trldescription'=> 'required',
            'trlexample'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('trl')->insert([
            'trllevel'=> $req->trllevel,
            'trldescription'=> $req->trldescription,
            'trlexample'=> $req->trlexample,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = trl::latest()->value('id');
            $eqRow = DB::table('trl')->where('id', $latestID)->get();
            return response()->json(['message' => 'Technology Readiness Level(TRL) Added successfully' , 'eqRow'=>$eqRow]);
        }
        else 
        {
            return response()->json(['message' => 'Technology Readiness Level(TRL) Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('trl')->where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'trllevel'=> 'required',
            'trldescription'=> 'required',
            'trlexample'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = DB::table('trl')->where('id',$id)->update([
            'trllevel'=> $req->trllevel,
            'trldescription'=> $req->trldescription,
            'trlexample'=> $req->trlexample,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $updateEQ = DB::table('trl')->where('id', $id)->get();
            if($updateEQ)
            {
              return response()->json(['message' => 'Technology Readiness Level (TRL) Updated Successfully' , 'updateEQ'=>$updateEQ]);
            }

        }
        else
        {
            return response()->json(['message' => 'Technology Readiness Level (TRL) Was Not Updated Successfully']);
        }


    }

    public function delete(string $id)
    {
        $delete = DB::table('trl')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology Readiness Level(TRL)  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology Readiness Level(TRL)  Was Not Deleted Successfully']);
        }
    }       
}
