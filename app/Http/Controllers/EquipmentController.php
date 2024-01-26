<?php

namespace App\Http\Controllers;

use App\Models\equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class EquipmentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function equipmentPage ()
    {
        $equipments = DB::table('equipment')->get();

        return view('dashboard.equipmentPage' , ['data'=>$equipments]);
    }

    public function read (string $id)
    {
        $eqRead = DB::table('equipment')->where('id',$id)->get();

        return response()->json(['data'=>$eqRead]);
    }

    public function addPage()
    {
        return view('dashboard.createEquipment');
    }

    public function create(Request $req)
    {
        $latestIdPn = equipment::latest()->value('id_pn');
        if($latestIdPn === null)
        {
            $latestIdPn = 0;
        }
        $validator = Validator::make($req->all(),[
            'equipment'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $equipment = new equipment;
        $equipment->id_pn = $latestIdPn + 1;
        $equipment->equipment =  $req->equipment;
        $equipment->note = $req->note;
        $latestID = $equipment->id;
        $equipment->save();

        // $eqCreate = DB::table('equipment')->insert([
        //     'id_pn'=> $latestIdPn + 1,
        //     'equipment'=> $req->equipment,
        //     'note'=> $req->note,
        // ]);

        if($eqCreate)
        {
            // $latestID = equipment::latest()->value('id');
            $eqRow = equipment::where('id', $latestID)->get();
            return response()->json(['message' => 'Equipment  Added successfully' , 'eqRow'=>$eqRow]);
        }
        else 
        {
            return response()->json(['message' => 'Equipment  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upEquipment = DB::table('equipment')->where('id',$id)->get();
                return response()->json(['row'=>$upEquipment]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'equipment'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $eqUpdate = DB::table('equipment')->where('id',$id)->update([
            'equipment'=> $req->equipment,
            'note'=> $req->note,
        ]);
        if($eqUpdate)
        {
            $updateEQ = DB::table('equipment')->where('id', $id)->get();
            if($updateEQ)
            {
              return response()->json(['message' => 'Equipment Area Updated Successfully' , 'updateEQ'=>$updateEQ]);
            }

        }
        else
        {
            return response()->json(['message' => 'Equipment Was Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $eqDelete = DB::table('equipment')->where('id',$id)->delete();
        if($eqDelete)
        {
            return response()->json(['message' => 'Equipment  Deleted Successfully' , 'data'=>$eqDelete]);
        } 
        else
        {
            return response()->json(['message' => 'Equipment  Was Not Deleted Successfully']);
        }
    }
}
