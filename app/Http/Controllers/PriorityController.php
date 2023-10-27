<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PriorityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function priorityPage ()
    {
        $priority = DB::table('priorities')->get();
        return view('priorityPage' , ['data'=>$priority]);
    }

    public function read (string $id)   
    {
        $Read = Db::table('priorities')->where('id',$id)->get();

        return view('readPriority', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createPriority');
    }

    public function create(Request $req)
    {
        $req->validate([
            'priority'=> 'nullable',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('priorities')->insert([
            'priority'=> $req->priority,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('priorityPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upPriority = DB::table('priorities')->find($id);

        return view('updatePriority' , ['data'=>$upPriority]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'priority'=> 'nullable',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('priorities')->where('id',$id)->update([
            'priority'=> $req->priority,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('priorityPage');
        }
        else
        {
            return redirect()->route('priorityPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('priorities')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('priorityPage');
        }
    }
}
