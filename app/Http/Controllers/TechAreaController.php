<?php

namespace App\Http\Controllers;

use App\Models\techarea;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class TechAreaController extends Controller
{
    

    public function techAreaPage ()
    {
        $area = DB::table('techareas')->get();
        return view('dashboard.techAreaPage' , ['data'=>$area]);
    }

    public function read (string $id)   
    {
        $read = Db::table('techareas')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'techarea'=> 'required',
            'techareadescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('techareas')->insert([
            'techarea'=> $req->techarea,
            'techareadescription'=> $req->techareadescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            $latestID = techarea::latest()->value('id');
            $newRow = DB::table('techareas')->where('id', $latestID)->get();
            return response()->json(['message' => 'Technology Area  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Technology Area  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techareas')->where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        
        $validator = Validator::make($req->all(),[
            'techarea'=> 'required',
            'techareadescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }
        
        $Update = DB::table('techareas')->where('id',$id)->update([
            'techarea'=> $req->techarea,
            'techareadescription'=> $req->techareadescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('techareas')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Technology Area  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Technology Area Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = DB::table('techareas')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology Area  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology Area  Was Not Deleted Successfully']);
        }
    }

    public function fetchDataFromApi(Request $req)
    {
        $dm = $req->input('dm');
        $tk = $req->input('tk');

        $url = 'https://api.drass.it/GetDM/read.php';
        $params = [
            'dm' => $dm ,
            'tk' => $tk
        ];

        $response = Http::get($url , $params);
        
        if ($response->failed()) {
            // Handle the HTTP error
            return response()->json(['error' => 'Failed to fetch data from API'], $response->status());
        }

        $data = $response->json();
        return response()->json($data);
    }

    public function __construct()
    {
        $this->middleware('auth');
    }
}

