<?php

namespace App\Http\Controllers;

use Error;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LocationController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function locationPage ()
    {
        $location = DB::table('location')->get();
        return view('locationForm' , ['data'=>$location]);
    }

    public function read (string $id)
    {
        $Read = Db::table('location')->where('id',$id)->get();

        return view('readLocation', ['data' => $Read]);
    }

    public function addPage()
    {
        return view('createLocation');
    }

    public function create(Request $req)
    {
        $req->validate([
            'state'=> 'nullable',
            'region'=> 'nullable',
            'city'=> 'required',
        ]);

        $Create = DB::table('location')->insert([
            'state'=> $req->state,
            'region'=> $req->region,
            'city'=> $req->city,
        ]);

        if($Create)
        {
            return redirect()->route('locationForm');
        }
        else 
        {
            echo '<h1>Data Did Not Enter Database</h1>';
        }
    }

    public function updatePage(string $id)
    {
        $upLocation = DB::table('location')->find($id);

        return view('updateLocation' , ['data'=>$upLocation]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $req->validate([
            'state'=> 'nullable',
            'region'=> 'nullable',
            'city'=> 'required',
        ]);

        $Update = DB::table('location')->where('id',$id)->update([
            'state'=> $req->state,
            'region'=> $req->region,
            'city'=> $req->city,
        ]);

        if($Update)
        {
            return redirect()->route('locationForm');
        }
        else
        {
            return redirect()->route('locationForm')->with('alert' , 'Data Did Not Updated in DataBase');
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('location')->where('id',$id)->delete();
        if($Delete)
        {
            return redirect()->route('locationForm');
        }
    }
}
