<?php

namespace App\Http\Controllers;

use App\Models\equipment;
use App\Models\product;
use App\Models\ref_equipment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class Ref_EquipmentController extends Controller
{
    public function ref_EquipmentPage ()
    {
        $products = product::get();
        $equipments = equipment::get();
        $ref_equips = ref_equipment::select('products.id_pnc' , 'equipment.equipment' ,'ref_equipments.*' )
        ->join('products' , 'products.id' , '=' , 'ref_equipments.id_product')
        ->join('equipment' , 'equipment.id' , '=' , 'ref_equipments.id_equipment')
        ->get();
        return view('dashboard.ref_EquipmentPage' , compact('products' , 'equipments' , 'ref_equips'));
    }

    public function read (string $id)   
    {
        $ref_equip = ref_equipment::select('products.id_pnc' , 'equipment.equipment' ,'ref_equipments.*' )
        ->join('products' , 'products.id' , '=' , 'ref_equipments.id_product')
        ->join('equipment' , 'equipment.id' , '=' , 'ref_equipments.id_equipment')
        ->where('ref_equipments.id',$id)
        ->get();
        return response()->json(['data'=>$ref_equip]);
    }
    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'product'=> 'required',
            'equipment'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = ref_equipment::insert([
            'id_product'=> $req->product,
            'id_equipment'=> $req->equipment,
        ]);

        if($Create)
        {
            $latestID = ref_equipment::latest()->value('id');
            $ref_equip = ref_equipment::select('products.id_pnc' , 'equipment.equipment' ,'ref_equipments.*' )
            ->join('products' , 'products.id' , '=' , 'ref_equipments.id_product')
            ->join('equipment' , 'equipment.id' , '=' , 'ref_equipments.id_equipment')
            ->where('ref_equipments.id',$latestID)
            ->get();

            return response()->json(['message' => 'Product Equipment Added successfully' , 'eqRow'=>$ref_equip]);
        }
        else 
        {
            return response()->json(['message' => 'Product Equipment Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = ref_equipment::where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'product'=> 'required',
            'equipment'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = ref_equipment::where('id',$id)->update([
            'id_product'=> $req->product,
            'id_equipment'=> $req->equipment,
        ]);

        if($Update)
        {
            $ref_equip = ref_equipment::select('products.id_pnc' , 'equipment.equipment' ,'ref_equipments.*' )
            ->join('products' , 'products.id' , '=' , 'ref_equipments.id_product')
            ->join('equipment' , 'equipment.id' , '=' , 'ref_equipments.id_equipment')
            ->where('ref_equipments.id',$id)
            ->get();
            if($ref_equip)
            {
              return response()->json(['message' => 'Product Equipment Updated Successfully' , 'updateEQ'=>$ref_equip]);
            }

        }
        else
        {
            return response()->json(['message' => 'Product Equipment Was Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete =ref_equipment::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Product Equipment Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Product Equipment Was Not Deleted Successfully']);
        }
    }       

    public function __construct()
    {
        $this->middleware('auth');
    }
}
