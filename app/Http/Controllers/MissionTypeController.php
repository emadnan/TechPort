<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MissionTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function missionTypePage ()
    {
        $mission = DB::table('missiontype')->get();
        return view('missionTypeForm' , ['data'=>$mission]);
    }

    public function read (string $id)
    {
        $Read = Db::table('missiontype')->where('id',$id)->get();

        return view('readMissionType', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createMissionType');
    }

    public function create(Request $req)
    {
        $req->validate([
            'type'=> 'required',
            'description'=> 'nullable',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('missiontype')->insert([
            'type'=> $req->type,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('missionTypeForm');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upMission = DB::table('missiontype')->find($id);

        return view('updateMissionType' , ['data'=>$upMission]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'type'=> 'required',
            'description'=> 'nullable',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('missiontype')->where('id',$id)->update([
            'type'=> $req->type,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('missionTypeForm');
        }
        else
        {
            return redirect()->route('missionTypeForm')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('missiontype')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('missionTypeForm');
        }
    }
}
