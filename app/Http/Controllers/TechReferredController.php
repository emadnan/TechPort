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
        $techreferred = new techreferred;
        $techreferred->id_techarea = $req->techarea;
        $techreferred->id_techsector = $req->techsector;
        $techreferred->id_techniche = $req->techniche;
        $techreferred->save();


        if($techreferred)
        {
            return redirect()->route('techPage');
        }

    }
 
}
