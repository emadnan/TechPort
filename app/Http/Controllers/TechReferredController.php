<?php

namespace App\Http\Controllers;

use App\Models\techarea;
use App\Models\techniche;
use App\Models\techreferred;
use App\Models\techsector;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class TechReferredController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function techPage ()
    {
        $area = techarea::get();
        $sector = techsector::get();
        $niche = techniche::get();
        return view('dashboard.techreferredPage' , ['areas'=>$area , 'sectors'=>$sector , 'niches'=>$niche]);
    }

    public function saveData( Request $req)
    {
        $save = techreferred::insert([
            'id_techarea'=> $req->techarea,
            'id_techsector'=> $req->techsector,
            'id_techniche'=> $req->techniche,
        ]);
        if($save)
        {
            return redirect()->route('techPage');
        }

    }
    // function getTechAreas(){
    //     $tech = techreferred::select('techareas.*','ref_techreferred.*','techsector.*','techniche.*')
    //     ->join('techareas','techareas.id','=','ref_techreferred.id_techarea')
    //     ->join('techsector','techsector.id','=','ref_techreferred.id_techsector')
    //     ->join('techniche','techniche.id','=','ref_techreferred.id_techniche')
    //     ->get();
    //     return response()->json(['techRef' => $tech]);
    // }
}
