<?php

namespace App\Http\Controllers;

use App\Models\businessarea;
use App\Models\priority;
use App\Models\product;
use App\Models\requirement;
use App\Models\techreferred;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    public function productPage()
    {
        $techs = techreferred::select('techareas.techarea','techsector.techsector','techniche.techniche','ref_techreferred.id')
        ->join('techareas','techareas.id','=','ref_techreferred.id_techarea')
        ->join('techsector','techsector.id','=','ref_techreferred.id_techsector')
        ->join('techniche','techniche.id','=','ref_techreferred.id_techniche')
        ->get();


        $products = product::select('businessareas.businessarea' , 'priorities.priority' , 'ref_techreferred.id as techID' , 'techareas.techarea' , 'requirements.description as requirement' , 'products.*')
        ->join('businessareas' , 'businessareas.id' , '=' , 'products.id_businessarea')
        ->join('priorities' , 'priorities.id' , '=' , 'products.id_priority')
        ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'products.id_techreferred')
        ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
        ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
        ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
        ->join('requirements' , 'requirements.id' , '=' , 'products.id_requirement')
        ->get();

        $areas = businessarea::get();
        $priorities = priority::get();
        $requirements = requirement::get();
        // $techs = techreferred::get();
       
        return view('dashboard.productPage' , compact('areas' , 'priorities' , 'techs' ,  'requirements' , 'products'));
    }

    public function read(string $id)
    {
        $products = product::select('businessareas.businessarea' , 'priorities.priority' , 'ref_techreferred.id as techID' , 'techareas.techarea' , 'requirements.description as requirement' , 'products.*')
        ->join('businessareas' , 'businessareas.id' , '=' , 'products.id_businessarea')
        ->join('priorities' , 'priorities.id' , '=' , 'products.id_priority')
        ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'products.id_techreferred')
        ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
        ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
        ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
        ->join('requirements' , 'requirements.id' , '=' , 'products.id_requirement')
        ->where('products.id' , $id)
        ->get();

        return response()->json(['data' => $products]);
    }

    public function create(Request $req)
    {
        $latestIdPnc = product::latest()->value('id_pnc');
        if($latestIdPnc === null) {
            $latestIdPnc = 0;
        }

        $validator = Validator::make($req->all() , [
            'businessarea' => 'required',
            'description' => 'nullable',
            // 'id_pnc' => 'nullable',
            'priority' => 'required',
            'note' => 'nullable',
            'techreferred' => 'required',
            'requirement' => 'required',
        ]);

        if($validator->fails())
        {
            return response()->json(['errors' =>$validator->errors()->toArray() , 'oldInput'=>$req->all()]);
        }

        $create = new  product;
        $create->id_businessarea = $req->businessarea;
        $create->description = $req->description;
        $create->id_pnc = $latestIdPnc + 1;
        $create->id_priority = $req->priority;
        $create->note = $req->note;
        $create->id_techreferred = $req->techreferred;
        $create->id_requirement = $req->requirement;
        $create->save();
        $latestID = $create->id;

        if($create)
        {
            $products = product::select('businessareas.businessarea' , 'priorities.priority' , 'ref_techreferred.id as techID' , 'techareas.techarea' , 'requirements.description as requirement' , 'products.*')
            ->join('businessareas' , 'businessareas.id' , '=' , 'products.id_businessarea')
            ->join('priorities' , 'priorities.id' , '=' , 'products.id_priority')
            ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'products.id_techreferred')
            ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
            ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
            ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
            ->join('requirements' , 'requirements.id' , '=' , 'products.id_requirement')
            ->where('products.id' , $latestID)
            ->get();
            return response()->json(['errors'=>false , 'message'=> 'Product  Added Successfully In DataBase!!' , 'eqRow'=>$products]);
        }
        else
        {
            return response()->json(['errors'=> $create->errors() , 'message'=> 'Product NOT Added Successfully In DataBase!!']);
        }
    }

    public function updatePage(string $id)
    {
        $org = product::where('id', $id)->get();
        return response()->json(['row'=>$org]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'businessarea' => 'required',
            'description' => 'nullable',
            // 'id_pnc' => 'nullable',
            'priority' => 'required',
            'note' => 'nullable',
            'techreferred' => 'required',
            'requirement' => 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = product::where('id',$id)->update([
            'id_businessarea'=> $req->businessarea,
            'description'=> $req->description,
            // 'id_pnc'=> $req->id_pnc,
            'id_priority'=> $req->priority,
            'note'=> $req->note,
            'id_techreferred'=> $req->techreferred,
            'id_requirement'=> $req->requirement,
        ]);

        if($Update)
        {
            $products = product::select('businessareas.businessarea' , 'priorities.priority' , 'ref_techreferred.id as techID' , 'techareas.techarea' , 'requirements.description as requirement' , 'products.*')
            ->join('businessareas' , 'businessareas.id' , '=' , 'products.id_businessarea')
            ->join('priorities' , 'priorities.id' , '=' , 'products.id_priority')
            ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'products.id_techreferred')
            ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
            ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
            ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
            ->join('requirements' , 'requirements.id' , '=' , 'products.id_requirement')
            ->where('products.id' , $id)
            ->get();
            if($products)
            {
              return response()->json(['message' => 'Product Updated Successfully' , 'updateEQ'=>$products]);
            }

        }
        else
        {
            return response()->json(['message' => 'Product Was Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete =product::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Product Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Product Was Not Deleted Successfully']);
        }
    }       

    public function __construct()
    {
        $this->middleware('auth');
    }
}
