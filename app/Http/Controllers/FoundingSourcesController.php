<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FoundingSourcesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function foundSourcePage ()
    {
        $sources = DB::table('foundingsources')->get();
        return view('foundSourceForm' , ['data'=>$sources]);
    }

    public function read (string $id)
    {
        $fsRead = Db::table('foundingsources')->where('id',$id)->get();

        return view('readFoundSource', ['data' => $fsRead]);
    }

    public function addPage()
    {
        return view('createFoundSource');
    }

    public function create(Request $req)
    {
        $req->validate([
            'name'=> 'required',
             'code'=>'required',
        ]);

        $fsCreate = DB::table('foundingsources')->insert([
            'code'=> $req->code,
            'name'=> $req->name,
            'note'=> $req->note,
        ]);

        if($fsCreate)
        {
            return redirect()->route('foundSourceForm');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upSource = DB::table('foundingsources')->find($id);

        return view('updateFoundSource' , ['data'=>$upSource]);
    }

    public function update(Request $req , $id)
    {
        $req->validate([
            'name'=> 'required',
            'code'=>'required',   
        ]);

        $fsUpdate = DB::table('foundingsources')->where('id',$id)->update([
            'code'=> $req->code,
            'name'=> $req->name,
            'note'=> $req->note,
        ]);
        if($fsUpdate)
        {
            return redirect()->route('foundSourceForm');
        }
        else
        {
            return redirect()->route('foundSourceForm')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $fsDelete = DB::table('foundingsources')->where('id',$id)->delete();
        if($fsDelete)
        {
            return redirect()->route('foundSourceForm');
        }
    }
}
