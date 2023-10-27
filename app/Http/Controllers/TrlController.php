<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TrlController extends Controller
{
    public function trlPage ()
    {
        $sector = DB::table('trl')->get();
        return view('trlPage' , ['data'=>$sector]);
    }

    public function read (string $id)   
    {
        $Read = Db::table('trl')->where('id',$id)->get();

        return view('readTrl', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createTrl');
    }

    public function create(Request $req)
    {
        $req->validate([
            'trllevel'=> 'required',
            'trldescription'=> 'required',
            'trlexample'=> 'required',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('trl')->insert([
            'trllevel'=> $req->trllevel,
            'trldescription'=> $req->trldescription,
            'trlexample'=> $req->trlexample,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('trlPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('trl')->find($id);

        return view('updateTrl' , ['data'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'trllevel'=> 'required',
            'trldescription'=> 'required',
            'trlexample'=> 'required',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('trl')->where('id',$id)->update([
            'trllevel'=> $req->trllevel,
            'trldescription'=> $req->trldescription,
            'trlexample'=> $req->trlexample,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('trlPage');
        }
        else
        {
            return redirect()->route('trlPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('trl')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('trlPage');
        }
    }       
}
