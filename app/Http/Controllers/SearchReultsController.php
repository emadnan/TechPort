<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use App\Models\trl;
use App\Models\techarea;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class SearchReultsController extends Controller
{
    public function index()
    {

    $projOrgs = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea' , 'orgperformingworks.location' , 'legalentityroles' , 'project_target')
    ->get();

    
    $allTrls = trl::with('projects.trlactual')->get();


        $count = $projOrgs->unique('id')->count();
        $active = $projOrgs->where('status.status' , 'Active')->count();
        $complete = $projOrgs->where('status.status' , 'Completed')->count();
        $partnership = $projOrgs->where('status.status' , 'Partnership')->count();
        $title = '';
        $totalTechareas = techarea::count();
        $techareas = techarea::with('projects')->get();
        
        // return response()->json(compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership'));

        return view('searchResultsPage' , compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls' , 'title', 'totalTechareas' , 'techareas'));
    }

    public function searchProjects(Request $req)
    {

        $projOrgs = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea' , 'orgperformingworks.location' , 'legalentityroles')
        ->where('projects.name' , 'like' , '%' . $req->searchBar . '%')->orWhere('projects.description' , 'like' , '%' . $req->searchBar . '%')
        ->get();

        $allTrls = trl::with('projects.trlactual')->get();
        $title = $req->searchBar;
        $totalTechareas = techarea::count();

        $count = $projOrgs->unique('id')->count();
        $active = $projOrgs->where('status.status' , 'Active')->count();
        $complete = $projOrgs->where('status.status' , 'Completed')->count();
        $partnership = $projOrgs->where('status.status' , 'Partnership')->count();

        $techareas = techarea::with('projects')->get();
     
        // return response()->json(compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership'));

        return view('searchResultsPage' , compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls' , 'title' , 'totalTechareas', 'techareas'));

    }

    public function getProjectsLengthBySearchID(Request $req)
    {
        // dd('ERROR');

        $projOrgs = $req->input('projOrgs');
        $trlID = $req->input('trlID');
        $trl = trl::where('id' , $trlID);

    $filteredProjects = collect($projOrgs)->filter(function ($project) use ($trlID) {
        return $project['id_trlactual'] == $trlID;
    });
    // $projects = $projOrgs->id_trlactual == $trlID;

    $projects = $filteredProjects->count();
  
        return response()->json(compact('projOrgs' , 'trl' , 'projects'));
    }

    // public function projectPaginations()
    // {

    // }
}

