<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DefinitionController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function definitionpage ()
    {
        
        $definitions = Db::table('definitions')->get();
        return view('definitionPage' , ['data'=>$definitions]);

    }

    public function read (string $id)
    {
        $defRead = Db::table('definitions')->where('id',$id)->get();

        return view('readDefinition', ['data' => $defRead]);
    }

    public function addPage()
    {
        return view('createDefinition');
    }

    public function create(Request $req)
    {
        $req->validate([
            'name'=> 'required',
            'definition'=> 'required',
            'report'=> 'required',
            // 'note'=> 'required',
        ]);

        $defCreate = DB::table('definitions')->insert([
            'name'=> $req->name,
            'definition'=> $req->definition,
            'report'=> $req->report,
            'note'=> $req->note,
        ]);

        if($defCreate)
        {
            return redirect()->route('definitionPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upDefinition = DB::table('definitions')->find($id);

        return view('updateDefinition' , ['data'=>$upDefinition]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $req->validate([
            'name'=> 'required',
            'definition'=> 'required',
            'report'=> 'required',
            // 'note'=> 'required',
        ]);

        $defUpdate = DB::table('definitions')->where('id',$id)->update([
            'name'=> $req->name,
            'definition'=> $req->definition,
            'report'=> $req->report,
            'note'=> $req->note,
        ]);
        if($defUpdate)
        {
            return redirect()->route('definitionPage');
        }
        else
        {
            return redirect()->route('definitionPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $defDelete = DB::table('definitions')->where('id',$id)->delete();
        if($defDelete)
        {
            return redirect()->route('definitionPage');
        }
    }
}