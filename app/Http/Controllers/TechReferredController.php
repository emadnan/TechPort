<?php

namespace App\Http\Controllers;

use App\Models\techarea;
use App\Models\techniche;
use App\Models\techreferred;
use App\Models\techsector;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class TechReferredController extends Controller
{
 
    public function techPage ()
    {
        $areas = techarea::get();
        $sectors = techsector::get();
        $niches = techniche::get();
        $techrefs = techreferred::select('techareas.techarea as area' , 'techsector.techsector as sector' , 'techniche.techniche as niche' , 'ref_techreferred.*')
        ->join('techareas' , 'techareas.id' , '=' , 'ref_techreferred.id_techarea')
        ->join('techsector' , 'techsector.id' , '=' , 'ref_techreferred.id_techsector')
        ->join('techniche' , 'techniche.id' , '=' , 'ref_techreferred.id_techniche')
        ->get();
        return response()->json( compact('techrefs' ));

        // return response()->json(['areas'=>$area , 'sectors'=>$sector , 'niches'=>$niche , 'techReferred'=> $techreferred]);
        return view('dashboard.techreferredPage' , ['areas'=>$areas , 'sectors'=>$sectors , 'niches'=>$niches , 'techrefs'=>$techrefs ]);
    }
    
    public function read (string $id)   
    {
        $read = techreferred::where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function create( Request $req)
    {

        $validator = Validator::make($req->all(),[
            'techarea'=> 'required',
            'techsector'=> 'required',
            'techniche'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $techreferred = new techreferred;
        $techreferred->id_techarea = $req->techarea;
        $techreferred->id_techsector = $req->techsector;
        $techreferred->id_techniche = $req->techniche;
        $techreferred->save();


        if($techreferred)
        {
            $latestID = techreferred::latest()->value('id');
            $newRow = techreferred::where('id' , $latestID)->get();
            return response()->json(['message' => 'Technology Referred Added successfully' , 'newRow'=>$newRow]);
        }

    }

    public function updatePage(string $id)
    {
        $upArea = techreferred::where('id' , $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'techarea'=> 'required',
            'techsector'=> 'required',
            'techniche'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = techreferred::where('id',$id)->update([
            'id_techsector'=> $req->techsector,
            'id_techarea'=> $req->techarea,
            'id_techniche'=> $req->techniche,
        ]);

        if($Update)
        {
            $update = techreferred::where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Technology Sector  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Technology Sector Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = techreferred::where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology Sector  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology Sector  Was Not Deleted Successfully']);
        }
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
 
}
