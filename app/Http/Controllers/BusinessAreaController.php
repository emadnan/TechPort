<?php

namespace App\Http\Controllers;

use App\Models\businessarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BusinessAreaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function readPage()
    {
        $business  = DB::table('businessareas')->get();
        return view('businessArea',['data'=> $business]);
    }
    public function read(string $id)
    {
        $busShow = DB::table('businessareas')->where('id',$id)->get();
        return response()->json(['data'=>$busShow]);
    }

    public function createPage()
    {
     
        return view('createBusiness');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'businessArea'=> 'required',
            'description'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }


        $busCreate = DB::table('businessareas')->insert(
            [
                'businessarea'=> $req->businessArea,
                'description'=> $req->description,
                'note'=> $req->note,

            ]);

            if($busCreate)
            {
                $latestID = businessarea::latest()->value('id');
                $newRow = DB::table('businessareas')->where('id', $latestID)->get();
                // return redirect()->route('businessArea');
              return response()->json(['message' => 'Business Area Added successfully' , 'newRow'=>$newRow]);
            }
            else {
                // return redirect()->route('businessArea');
                return response()->json(['message' => 'Business Area Was Not Added successfully']);
            }
    }

    public function updatePage(string $id)
    {
        $busUpdate = DB::table('businessareas')->where('id',$id)->get();
                return response()->json(['row'=>$busUpdate]);
        // return view('updateBusiness' , ['data' => $busUpdate]);
    }
    
    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'businessArea'=> 'required',
            'description'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $upRows = DB::table('businessareas')->where('id', $id)->update(
            [
                
                'businessarea'=> $req->businessArea,
                'description'=> $req->description,
                'note'=> $req->note,

            ]);
            if($upRows)
            {
                $update = DB::table('businessareas')->where('id', $id)->get();
                  if($update)
                  {
                    return response()->json(['message' => 'Business Area Updated Successfully' , 'update'=>$update]);
                  }
            }
            else 
            {
                return response()->json(['message' => 'Business Area Was Not Updated Successfully']);
            }
            
    }

    public function delete(string $id)
    {
        $deleteBusiness = DB::table('businessareas')->where('id',$id)->delete();
     
        if($deleteBusiness)
        {
            return response()->json(['message' => 'Business Area Deleted Successfully' , 'data'=>$deleteBusiness]);
        } 
        else
        {
            return response()->json(['message' => 'Business Area Was Not Deleted Successfully']);
        }
    }
}
