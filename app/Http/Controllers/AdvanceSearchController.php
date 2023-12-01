<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\trl;
use Illuminate\Http\Request;

class AdvanceSearchController extends Controller
{
    public function index()
    {

        return view('advanceSearchPage' );
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
