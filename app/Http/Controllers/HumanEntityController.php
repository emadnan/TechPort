<?php

namespace App\Http\Controllers;
use App\Models\humanentity;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HumanEntityController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function humanEntityPage ()
    {
        $entity = DB::table('humanentity')->get();
        return view('dashboard.humanEntityPage' , ['data'=>$entity]);
    }

    public function read (string $id)
    {
        $heRead = Db::table('humanentity')->where('id',$id)->get();

        return response()->json(['data'=>$heRead]);
    }

    public function addPage()
    {
        return view('dashboard.createHumanEntity');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'surname'=>'required',
            'email'=>'email | unique:humanentity,email',
            'tel'=>'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $heCreate = DB::table('humanentity')->insert([
            'name'=> $req->name,
            'surname'=> $req->surname,
            'email'=> $req->email,
            'tel'=> $req->tel,
            'role'=> $req->role,
            'note'=> $req->note,
        ]);

        if($heCreate)
        {
            $latestID = humanentity::latest()->value('id');
            $heRow = DB::table('humanentity')->where('id', $latestID)->get();
            return response()->json(['message' => 'Human Entity  Added successfully' , 'heRow'=>$heRow]);
        }
        else 
        {
            return response()->json(['message' => 'Human Entity  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upEntity = DB::table('humanentity')->where('id', $id)->get();
        return response()->json(['row'=>$upEntity]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'surname'=>'required',
            'email' => 'email|unique:humanentity,email,'.$id,
            'tel'=>'size:11 |  nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $heUpdate = DB::table('humanentity')->where('id',$id)->update([
            'name'=> $req->name,
            'surname'=> $req->surname,
            'email'=> $req->email,
            'tel'=> $req->tel,
            'role'=> $req->role,
            'note'=> $req->note,
        ]);
        if($heUpdate)
        {
            $update = DB::table('humanentity')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Human Entity Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Human Entity Was Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('humanentity')->where('id',$id)->delete();
        if($Delete)
        {
            return response()->json(['message' => 'Human Entity  Deleted Successfully' , 'data'=>$Delete]);
        } 
        else
        {
            return response()->json(['message' => 'Human Entity  Was Not Deleted Successfully']);
        }
    }
}
