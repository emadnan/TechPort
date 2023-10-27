<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TechnologyController extends Controller
{
    public function technologyPage ()
    {
        $sector = DB::table('technologies')->get();
        return view('technologyPage' , ['data'=>$sector]);
    }

    public function read (string $id)   
    {
        $Read = Db::table('technologies')->where('id',$id)->get();

        return view('readTechnology', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createTechnolgy');
    }

    public function create(Request $req)
    {
        $req->validate([
            'technology'=> 'required',
            'id_dm'=> 'required',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('technologies')->insert([
            'technology'=> $req->technology,
            'id_dm'=> $req->id_dm,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('technologyPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('technologies')->find($id);

        return view('updateTechnology' , ['data'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'technology'=> 'required',
            'id_dm'=> 'required',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('technologies')->where('id',$id)->update([
            'technology'=> $req->technology,
            'id_dm'=> $req->id_dm,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('technologyPage');
        }
        else
        {
            return redirect()->route('technologyPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('technologies')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('technologyPage');
        }
    }       
}
