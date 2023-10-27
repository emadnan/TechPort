<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TechSectorController extends Controller
{
    public function techSectorPage ()
    {
        $sector = DB::table('techsector')->get();
        return view('techSectorPage' , ['data'=>$sector]);
    }

    public function read (string $id)   
    {
        $Read = Db::table('techsector')->where('id',$id)->get();

        return view('readTechSector', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createTechSector');
    }

    public function create(Request $req)
    {
        $req->validate([
            'techsector'=> 'required',
            'techsectordescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('techsector')->insert([
            'techsector'=> $req->techsector,
            'techsectordescription'=> $req->techsectordescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('techSectorPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techsector')->find($id);

        return view('updateTechSector' , ['data'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'techsector'=> 'required',
            'techsectordescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('techsector')->where('id',$id)->update([
            'techsector'=> $req->techsector,
            'techsectordescription'=> $req->techsectordescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('techSectorPage');
        }
        else
        {
            return redirect()->route('techSectorPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('techsector')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('techSectorPage');
        }
    }
}
