<?php

namespace App\Http\Controllers;

use App\Models\techsector;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TechSectorController extends Controller
{
    public function techSectorPage ()
    {
        $sector = DB::table('techsector')->get();
        return view('techSectorPage' , ['data'=>$sector]);
    }

    public function read (string $id)   
    {
        $read = Db::table('techsector')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('createTechSector');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'techsector'=> 'required',
            'techsectordescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('techsector')->insert([
            'techsector'=> $req->techsector,
            'techsectordescription'=> $req->techsectordescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = techsector::latest()->value('id');
            $newRow = DB::table('techsector')->where('id', $latestID)->get();
            return response()->json(['message' => 'Technology Sector  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Technology Sector  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techsector')->where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'techsector'=> 'required',
            'techsectordescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = DB::table('techsector')->where('id',$id)->update([
            'techsector'=> $req->techsector,
            'techsectordescription'=> $req->techsectordescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('techsector')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Technology Sector  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Technology Sector Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = DB::table('techsector')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology Sector  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology Sector  Was Not Deleted Successfully']);
        }
    }
}
