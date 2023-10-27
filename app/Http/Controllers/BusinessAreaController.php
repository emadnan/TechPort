<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('readBusiness' , ['data'=> $busShow]);
    }

    public function createPage()
    {
     
        return view('createBusiness');
    }

    public function create(Request $req)
    {
        $req->validate([
            'businessArea'=> 'required',
            'description'=> 'required',
        ]);

        $busCreate = DB::table('businessareas')->insert(
            [
                'businessarea'=> $req->businessArea,
                'description'=> $req->description,
                'note'=> $req->note,

            ]);

            if($busCreate)
            {
                return redirect()->route('businessArea');
            //   return response()->json(['message' => 'Business Area Added successfully']);
            }
            else {
                return redirect()->route('businessArea');
                // return response()->json(['message' => 'Business Area Did Not Added successfully']);
            }
    }

    public function updatePage(string $id)
    {
        $busUpdate = DB::table('businessareas')->find($id);
                // return response()->json([$busUpdate]);
        return view('updateBusiness' , ['data' => $busUpdate]);
    }
    public function update(Request $req)
    {
        $id = $req->id;
        $req->validate([
            'businessArea'=> 'required',
            'description'=> 'required',
        ]);

        $upBusiness = DB::table('businessareas')->where('id', $id)->update(
            [
                
                'businessarea'=> $req->businessArea,
                'description'=> $req->description,
                'note'=> $req->note,

            ]);
            if($upBusiness)
            {
        //    echo '<script>';
        //    echo 'alert("hello")';
              return redirect()->route('businessArea');
            }
            else {
                return redirect()->route('businessArea');
            }
            
    }

    public function delete(string $id)
    {
        $deleteBusiness = DB::table('businessareas')->where('id',$id)->delete();
     
        if($deleteBusiness)
        {
           return redirect()->route('businessArea');
        } 
        else
        {
            echo '<h1>Data Was Not Deleted From Database</h1>';
        }
    }
}
