<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferenceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function referencePage ()
    {
        $reference = DB::table('references')->get();
        return view('referencePage' , ['data'=>$reference]);
    }

    public function read (string $id)   
    {
        $Read = Db::table('references')->where('id',$id)->get();

        return view('readReference', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createReference');
    }

    public function create(Request $req)
    {
        $req->validate([
            'reference'=> 'nullable',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('references')->insert([
            'reference'=> $req->reference,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('referencePage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upReference = DB::table('references')->find($id);

        return view('updateReference' , ['data'=>$upReference]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'reference'=> 'nullable',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('references')->where('id',$id)->update([
            'reference'=> $req->reference,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('referencePage');
        }
        else
        {
            return redirect()->route('referencePage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('references')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('referencePage');
        }
    }
}
