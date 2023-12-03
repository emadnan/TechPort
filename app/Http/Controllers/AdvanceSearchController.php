<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\orgtype;
use App\Models\project;
use App\Models\techarea;
use App\Models\trl;
use Illuminate\Http\Request;

class AdvanceSearchController extends Controller
{
    public function index()
    {
        $techs = techarea::with('techsectors.techniches')->get();
        $locations = location::get();
        $projects = project::get();
        $roles = legalentityrole::get();
        $missions = missiontype::get();
        $sources = foundingsource::get();
        $orgtypes = orgtype::with('orgperformingworks')->get();
        $orgs = orgperformingwork::get();
        // return response()->json($techs);
        return view('advanceSearchPage' , compact('techs' , 'locations','projects' , 'roles' , 'missions' , 'sources' , 'orgtypes' , 'orgs') );
    }

    public function getProjectsByAdvanceSearch(Request $req)
    {
        $projOrgs = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea' , 'orgperformingworks.location' , 'legalentityroles')
        ->get();
        
        $allTrls = trl::with('projects.trlactual')->get();
    
    
            $count = $projOrgs->unique('id')->count();
            $active = $projOrgs->where('status.status' , 'Active')->count();
            $complete = $projOrgs->where('status.status' , 'Completed')->count();
            $partnership = $projOrgs->where('status.status' , 'Partnership')->count();
            
            // return response()->json(compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership'));
    
            return view('searchResultsPage' , compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls'));
    }


}
