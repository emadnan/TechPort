<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\techarea;
use App\Models\techreferred;
use App\Models\techsector;
use App\Models\trl;
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
            $techs = techarea::with('techsectors.techniches')->get();
            // $refs = techreferred::with('techarea.techsectors.techniches')->get();
            $refs = techarea::with('projects' , 'techsectors.techniches')->get();
            // $refs = techsector::with('projects')->get();
            $allTrls = trl::with('projects.trlactual')->get();

        // $project = project::with('techareas')->get();

            // return response()->json($techs);
            return view('homePage' ,  compact('techs' , 'allTrls'));
    }

    public function getProjectsLengthByTechID(string $techID ,string $trlID)
    {
        $project = project::with('techreferred.techarea')
        ->whereHas('techreferred', function ($query) use ($techID) {
          // Use a closure to apply conditions on the relationship
          $query->where('id_techarea', $techID);
      })
                   ->where('id_trlactual' , $trlID)
                   ->count();
        
        return response()->json(compact('project'));
    }


    public function __construct()
    {
      $this->middleware('auth')->except('homePage');
    }

}





#ff691c 
#008fd4
#0058a2