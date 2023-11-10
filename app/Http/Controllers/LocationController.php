<?php

namespace App\Http\Controllers;

use App\Models\location;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LocationController extends Controller
{
  
    public function index()
    {
        $locations = location::get();
        
        // return response()->json(['locations'=>$locations]);
    return view('locationsPage' , ['data'=>$locations]);
    }

    public function locationPage ()
    {
        $location = DB::table('location')->get();
        return view('locationForm' , ['data'=>$location]);
    }

    public function read (string $id)
    {
        $read = Db::table('location')->where('id',$id)->get();

        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('createLocation');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'state'=> 'nullable',
            'region'=> 'nullable',
            'city'=> 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('location')->insert([
            'state'=> $req->state,
            'region'=> $req->region,
            'city'=> $req->city,
        ]);

        if($Create)
        {
            $latestID = location::latest()->value('id');
            $newRow = DB::table('location')->where('id', $latestID)->get();
            return response()->json(['message' => 'Location  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Location  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upLocation = DB::table('location')->where('id', $id)->get();
                return response()->json(['row'=>$upLocation]);
    }

    public function update(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'state'=> 'nullable',
            'region'=> 'nullable',
            'city'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $locUpdate = DB::table('location')->where('id',$id)->update([
            'state'=> $req->state,
            'region'=> $req->region,
            'city'=> $req->city,
        ]);

        if($locUpdate)
        {
            $update = DB::table('location')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Location  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Location Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $delete = DB::table('location')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Location  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Location  Was Not Deleted Successfully']);
        }
    }
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
}
