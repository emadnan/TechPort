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
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function techPage ()
    {
        $areas = techarea::get();
        $sectors = techsector::get();
        $niches = techniche::get();
        $techrefs = techreferred::get();
        // return view('dashboard.techreferredPage' , compact('areas' , 'sectors' , 'niches' ));

        // return response()->json(['areas'=>$area , 'sectors'=>$sector , 'niches'=>$niche , 'techReferred'=> $techreferred]);
        return view('dashboard.techreferredPage' , ['areas'=>$areas , 'sectors'=>$sectors , 'niches'=>$niches , 'techrefs'=>$techrefs ]);
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

        $techreferred = techreferred::where('id' , $id);
        $techreferred->id_techarea = $req->techarea;
        $techreferred->id_techsector = $req->techsector;
        $techreferred->id_techniche = $req->techniche;
        $techreferred->save();

        // $Update = DB::table('techsector')->where('id',$id)->update([
        //     'techsector'=> $req->techsector,
        //     'techsectordescription'=> $req->techsectordescription,
        //     'id_dm'=> $req->id_dm,
        //     'otme'=> $req->otme,
        //     'note'=> $req->note,
        // ]);

        if($techreferred)
        {
            // $update = DB::table('techsector')->where('id', $id)->get();
            // if($update)
            // {
              return response()->json(['message' => 'Technology Sector  Updated Successfully' , 'update'=>$techreferred]);
            // }
        }
        else
        {
            return response()->json(['message' => 'Technology Sector Not Updated Successfully']);
        }
    }

 
}
