<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechSubSectorController extends Controller
{
    public function techSubSectorPage ()
    {
        $sector = DB::table('techniche')->get();
        return view('techSubSectorPage' , ['data'=>$sector]);
    }

    public function read (string $id)   
    {
        $Read = Db::table('techniche')->where('id',$id)->get();

        return view('readTechSubSector', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createTechSubSector');
    }

    public function create(Request $req)
    {
        $req->validate([
            'techniche'=> 'required',
            'technichedescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('techniche')->insert([
            'techniche'=> $req->techniche,
            'technichedescription'=> $req->technichedescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('techSubSectorPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techniche')->find($id);

        return view('updateTechSubSector' , ['data'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'techniche'=> 'required',
            'technichedescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('techniche')->where('id',$id)->update([
            'techniche'=> $req->techniche,
            'technichedescription'=> $req->technichedescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('techSubSectorPage');
        }
        else
        {
            return redirect()->route('techSubSectorPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('techniche')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('techSubSectorPage');
        }
    }    
}
