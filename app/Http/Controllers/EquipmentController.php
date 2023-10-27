<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function equipmentPage ()
    {
        $equipments = DB::table('equipment')->get();
        return view('equipmentPage' , ['data'=>$equipments]);
    }

    public function read (string $id)
    {
        $eqRead = Db::table('equipment')->where('id',$id)->get();

        return view('readEquipment', ['data' => $eqRead]);
    }

    public function addPage()
    {
        return view('createEquipment');
    }

    public function create(Request $req)
    {
        $req->validate([
            'equipment'=> 'required',
           
        ]);

        $eqCreate = DB::table('equipment')->insert([
            'id_pn'=> $req->id_pn,
            'equipment'=> $req->equipment,
            'note'=> $req->note,
        ]);

        if($eqCreate)
        {
            return redirect()->route('equipmentPage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upEquipment = DB::table('equipment')->find($id);

        return view('updateEquipment' , ['data'=>$upEquipment]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'equipment'=> 'required',
        ]);

        $eqUpdate = DB::table('equipment')->where('id',$id)->update([
            'id_pn'=> $req->id_pn,
            'equipment'=> $req->equipment,
            'note'=> $req->note,
        ]);
        if($eqUpdate)
        {
            return redirect()->route('equipmentPage');
        }
        else
        {
            return redirect()->route('equipmentPage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $eqDelete = DB::table('equipment')->where('id',$id)->delete();
        if($eqDelete)
        {
            return redirect()->route('equipmentPage');
        }
    }
}
