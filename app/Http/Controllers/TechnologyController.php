<?php

namespace App\Http\Controllers;

use App\Models\technology;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class TechnologyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function technologyPage ()
    {
        $sector = DB::table('technologies')->get();
        return view('technologyPage' , ['data'=>$sector]);
    }

    public function read (string $id)   
    {
        $read = Db::table('technologies')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('createTechnolgy');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'technology'=> 'required',
            'id_dm'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('technologies')->insert([
            'technology'=> $req->technology,
            'id_dm'=> $req->id_dm,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = technology::latest()->value('id');
            $eqRow = DB::table('technologies')->where('id', $latestID)->get();
            return response()->json(['message' => 'Technology  Added successfully' , 'eqRow'=>$eqRow]);
        }
        else 
        {
            return response()->json(['message' => 'Technology  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('technologies')->where('id' , $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'technology'=> 'required',
            'id_dm'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }
    
        $Update = DB::table('technologies')->where('id',$id)->update([
            'technology'=> $req->technology,
            'id_dm'=> $req->id_dm,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $updateEQ = DB::table('technologies')->where('id', $id)->get();
            if($updateEQ)
            {
              return response()->json(['message' => 'Technology Area Updated Successfully' , 'updateEQ'=>$updateEQ]);
            }

        }
        else
        {
            return response()->json(['message' => 'Technology Was Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $delete = DB::table('technologies')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology  Was Not Deleted Successfully']);
        }
    }       
}
