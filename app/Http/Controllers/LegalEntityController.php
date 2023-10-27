<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LegalEntityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function legalEntityPage ()
    {
        $entity = DB::table('legalentityrole')->get();
        return view('legalEntityForm' , ['data'=>$entity]);
    }

    public function read (string $id)
    {
        $heRead = Db::table('legalentityrole')->where('id',$id)->get();

        return view('readLegalEntity', ['data' => $heRead]);
    }

    public function addPage()
    {
        return view('createLegalEntity');
    }

    public function create(Request $req)
    {
        $req->validate([
            'name'=> 'required',
            'description'=> 'required',
        ]);

        $Create = DB::table('legalentityrole')->insert([
            'name'=> $req->name,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('legalEntityForm');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upEntity = DB::table('legalentityrole')->find($id);

        return view('updateLegalEntity' , ['data'=>$upEntity]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'name'=> 'required',
            'description'=> 'required',
        ]);

        $Update = DB::table('legalentityrole')->where('id',$id)->update([
            'name'=> $req->name,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);
        if($Update)
        {
            return redirect()->route('legalEntityForm');
        }
        else
        {
            return redirect()->route('legalEntityForm')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('legalentityrole')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('legalEntityForm');
        }
    }
}
