<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class FoundingSourcesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function foundSourcePage ()
    {
        $sources = DB::table('foundingsources')->get();
        return view('foundSourceForm' , ['data'=>$sources]);
    }

    public function read (string $id)
    {
        $fsRead = Db::table('foundingsources')->where('id',$id)->get();
        return response()->json(['data'=>$fsRead]);
    }

    public function addPage()
    {
        return view('createFoundSource');
    }

    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'name'=> 'required',
             'code'=>'required',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $fsCreate = DB::table('foundingsources')->insert([
            'code'=> $req->code,
            'name'=> $req->name,
            'note'=> $req->note,
        ]);

        if($fsCreate)
        {
            $latestID = foundingsource::latest()->value('id');
            $fsRow = DB::table('foundingsources')->where('id', $latestID)->get();
          return response()->json(['message' => 'Source Added successfully' , 'fsRow'=>$fsRow]);
        }
        else 
        {
            return response()->json(['message' => 'Source Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $fsUpdate = DB::table('foundingsources')->where('id',$id)->get();
                return response()->json(['row'=>$fsUpdate]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'code'=>'required', 
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $fsUpdate = DB::table('foundingsources')->where('id',$id)->update([
            'code'=> $req->code,
            'name'=> $req->name,
            'note'=> $req->note,
        ]);
        if($fsUpdate)
        {
            $updateFS = DB::table('foundingsources')->where('id', $id)->get();
                  if($updateFS)
                  {
                    return response()->json(['message' => 'Source Updated Successfully' , 'updateFS'=>$updateFS]);
                  }
        }
        else
        {
            return response()->json(['message' => 'Source Was No Updated Successfully' ]);
        }

    }

    public function delete(string $id)
    {
        $fsDelete = DB::table('foundingsources')->where('id',$id)->delete();
        if($fsDelete)
        {
            return response()->json(['message' => 'Source Deleted Successfully' , 'data'=>$fsDelete]);
        } 
        else
        {
            return response()->json(['message' => 'Source Was Not Deleted Successfully']);
        }
    }
}



//          |-----------------------------------------------------------------------------------------|