<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\product;
use App\Models\project;
use App\Models\Project_target;
use App\Models\techarea;
use App\Models\techniche;
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
        $projects = project::count();
        $organizations = orgperformingwork::count();
        $locations = location::count();
        $found_sources = foundingsource::count();
        $mission_types = missiontype::count();
        $legal_entities = legalentityrole::count();
        $products = product::count();
        $project_targets = Project_target::count();
        return view('dashboard' , compact('projects' , 'organizations' , 'locations' , 'found_sources' , 'mission_types' , 'legal_entities' , 'project_targets' , 'products'));
    }
    public function homePage()
    {       
            // $techs = techarea::with('techsectors.techniches')->get();
            $techs = techarea::with('projects' , 'techsectors.techniches')->get();
            $sectors = techsector::with('projects' , 'techniches')->get();
            $niches = techniche::with('projects')->get();
           
            $allTrls = trl::with('projects.trlactual')->get();


            // return response()->json($niches );
            return view('homePage' ,  compact('techs' , 'allTrls' , 'sectors' , 'niches'));
    }

    public function getProjectsLengthByTechAreaID(Request $req)
    {

    $projects = $req->input('projects');
    $trlID = $req->input('trlID');
    $trl = trl::where('id', $trlID)->first();
// dd($trl);
$filteredProjects = collect($projects)->filter(function ($project) use ($trlID) {
    return $project['id_trlactual'] == $trlID;
});
    $numberOfProjects = $filteredProjects->count();
   
        return response()->json(compact('numberOfProjects' , 'trl'));

    }

    public function getProjectsLengthByTechSectorID(Request $req)
    {

    $projects = $req->input('projects');
    $trlID = $req->input('trlID');
    $trl = trl::where('id', $trlID)->first();

$filteredProjects = collect($projects)->filter(function ($project) use ($trlID) {
    return $project['id_trlactual'] == $trlID;
});
    $numberOfProjects = $filteredProjects->count();
   
        return response()->json(compact('numberOfProjects' , 'trl'));

    }

    public function getProjectsLengthByTechNicheID(Request $req)
    {

    $projects = $req->input('projects');
    $trlID = $req->input('trlID');
    $trl = trl::where('id', $trlID)->first();

$filteredProjects = collect($projects)->filter(function ($project) use ($trlID) {
    return $project['id_trlactual'] == $trlID;
});
    $numberOfProjects = $filteredProjects->count();
   
        return response()->json(compact('numberOfProjects' , 'trl'));

    }


    public function __construct()
    {
      $this->middleware('auth')->except('homePage' , 'getProjectsLengthByTechAreaID' , 'getProjectsLengthByTechSectorID' , 'getProjectsLengthByTechNicheID');
    }

}





#ff691c 
#008fd4
#0058a2