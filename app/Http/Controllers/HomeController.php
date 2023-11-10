<?php

namespace App\Http\Controllers;

use App\Models\techreferred;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard');
    }
    public function homePage()
    {
        
            $tech = techreferred::select('techareas.*','ref_techreferred.*','techsector.*','techniche.*')
            ->join('techareas','techareas.id','=','ref_techreferred.id_techarea')
            ->join('techsector','techsector.id','=','ref_techreferred.id_techsector')
            ->join('techniche','techniche.id','=','ref_techreferred.id_techniche')
            ->get();
            return view('homePage' ,  ['techRef' => $tech]);
    }
    public function __construct()
    {
      $this->middleware('auth')->except('homePage');
    }

}
