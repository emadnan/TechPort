<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TechAreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function techAreaPage ()
    {
        $area = DB::table('techareas')->get();
        return view('techAreaPage' , ['data'=>$area]);
    }

    public function read (string $id)   
    {
        $Read = Db::table('techareas')->where('id',$id)->get();

        return view('readTechArea', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createTechArea');
    }

    public function create(Request $req)
    {
        $req->validate([
            'techarea'=> 'required',
            'techareadescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('techareas')->insert([
            'techarea'=> $req->techarea,
            'techareadescription'=> $req->techareadescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('techAreaPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techareas')->find($id);

        return view('updateTechArea' , ['data'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'techarea'=> 'required',
            'techareadescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('techareas')->where('id',$id)->update([
            'techarea'=> $req->techarea,
            'techareadescription'=> $req->techareadescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('techAreaPage');
        }
        else
        {
            return redirect()->route('techAreaPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('techareas')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('techAreaPage');
        }
    }
}
