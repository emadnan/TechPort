<?php

namespace App\Http\Controllers;

use App\Models\orgtype;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class OrganizationTypeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function organizationTypePage ()
    {
        $organization = DB::table('orgtype')->get();
        return view('organizationTypePage' , ['data'=>$organization]);
    }

    public function read (string $id)   
    {
        $read = Db::table('orgtype')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('createOrganizationType');
    }

    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'type'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $Create = DB::table('orgtype')->insert([
            'type'=> $req->type,
            'note'=> $req->note,
        ]);

        if($Create)
        {$latestID = orgtype::latest()->value('id');
            $newRow = DB::table('orgtype')->where('id', $latestID)->get();
            return response()->json(['message' => 'Organization Type  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Organization Type  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upOrganization = DB::table('orgtype')->where('id', $id)->get();

        return response()->json(['row'=>$upOrganization]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'type'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;

        $Update = DB::table('orgtype')->where('id',$id)->update([
            'type'=> $req->type,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('orgtype')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Organization Type  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Organization Type Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = DB::table('orgtype')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Organization Type  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Organization Type  Was Not Deleted Successfully']);
        }
    }
}
