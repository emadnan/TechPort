<?php

namespace App\Http\Controllers;

use App\Models\techniche;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class TechSubSectorController extends Controller
{
    public function techSubSectorPage ()
    {
        $sector = DB::table('techniche')->get();
        return view('techSubSectorPage' , ['data'=>$sector]);
    }

    public function read (string $id)   
    {
        $read = Db::table('techniche')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('createTechSubSector');
    }

    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'techniche'=> 'required',
            'technichedescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('techniche')->insert([
            'techniche'=> $req->techniche,
            'technichedescription'=> $req->technichedescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = techniche::latest()->value('id');
            $newRow = DB::table('techniche')->where('id', $latestID)->get();
            return response()->json(['message' => 'Technology Sub Sector  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Technology Sub Sector  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techniche')->where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $validator = Validator::make($req->all(),[
            'techniche'=> 'required',
            'technichedescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = DB::table('techniche')->where('id',$id)->update([
            'techniche'=> $req->techniche,
            'technichedescription'=> $req->technichedescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('techniche')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Technology Sub Sector  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Technology Sub Sector Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = DB::table('techniche')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology Sub Sector  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology Sub Sector  Was Not Deleted Successfully']);
        }
    }    
}
