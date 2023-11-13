<?php

namespace App\Http\Controllers;

use App\Models\priority;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PriorityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function priorityPage ()
    {
        $priority = DB::table('priorities')->get();
        return view('dashboard.priorityPage' , ['data'=>$priority]);
    }

    public function read (string $id)   
    {
        $read = Db::table('priorities')->where('id',$id)->get();

        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('dashboard.createPriority');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'priority'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('priorities')->insert([
            'priority'=> $req->priority,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            
            $latestID = priority::latest()->value('id');
            $newRow = DB::table('priorities')->where('id', $latestID)->get();
            return response()->json(['message' => 'Priority  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Priority  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upPriority = DB::table('priorities')->where('id' , $id)->get();

        return response()->json(['row'=>$upPriority]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $validator = Validator::make($req->all(),[
            'priority'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Update = DB::table('priorities')->where('id',$id)->update([
            'priority'=> $req->priority,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('priorities')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Priority  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Priority Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $delete = DB::table('priorities')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Priority  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Priority  Was Not Deleted Successfully']);
        }
    }
}
