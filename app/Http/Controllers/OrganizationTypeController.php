<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

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
        $Read = Db::table('orgtype')->where('id',$id)->get();

        return view('readOrganizationtype', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createOrganizationType');
    }

    public function create(Request $req)
    {
        $req->validate([
            'type'=> 'required',
            'note'=> 'nullable',
        ]);

        $Create = DB::table('orgtype')->insert([
            'type'=> $req->type,
            'note'=> $req->note,
        ]);

        if($Create)
        {
            return redirect()->route('organizationTypePage');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upOrganization = DB::table('orgtype')->find($id);

        return view('updateOrganizationType' , ['data'=>$upOrganization]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'type'=> 'required',
            'note'=> 'nullable',
        ]);

        $Update = DB::table('orgtype')->where('id',$id)->update([
            'type'=> $req->type,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            return redirect()->route('organizationTypePage');
        }
        else
        {
            return redirect()->route('organizationTypePage')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('orgtype')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('organizationTypePage');
        }
    }
}
