<?php

namespace App\Http\Controllers;
use Validator;
use App\Models\humanentity;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class HumanEntityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function humanEntityPage ()
    {
        $entity = DB::table('humanentity')->get();
        return view('humanEntityPage' , ['data'=>$entity]);
    }

    public function read (string $id)
    {
        $heRead = Db::table('humanentity')->where('id',$id)->get();

        return view('readHumanEntity', ['data' => $heRead]);
    }

    public function addPage()
    {
        return view('createHumanEntity');
    }

    public function create(Request $req)
    {
        $req->validate([
            'name'=> 'required',
            'surname'=>'required',
            'email'=>'email | unique:humanentity,email',
            'tel'=>'size:11 | nullable',
        ]);

        $heCreate = DB::table('humanentity')->insert([
            'name'=> $req->name,
            'surname'=> $req->surname,
            'email'=> $req->email,
            'tel'=> $req->tel,
            'role'=> $req->role,
            'note'=> $req->note,
        ]);

        if($heCreate)
        {
            return redirect()->route('humanEntityPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upEntity = DB::table('humanentity')->find($id);

        return view('updateHumanEntity' , ['data'=>$upEntity]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'name'=> 'required',
            'surname'=>'required',
            'email' => 'email|unique:humanentity,email,'.$id,
            'tel'=>'size:11 |  nullable',
        ]);

        $heUpdate = DB::table('humanentity')->where('id',$id)->update([
            'name'=> $req->name,
            'surname'=> $req->surname,
            'email'=> $req->email,
            'tel'=> $req->tel,
            'role'=> $req->role,
            'note'=> $req->note,
        ]);
        if($heUpdate)
        {
            return redirect()->route('humanEntityPage');
        }
        else
        {
            return redirect()->route('humanEntityPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $heDelete = DB::table('humanentity')->where('id',$id)->delete();
        if($heDelete)
        {
            return redirect()->route('humanEntityPage');
        }
    }
}
