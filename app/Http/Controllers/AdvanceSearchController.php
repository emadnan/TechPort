<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\Project_target;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\orgtype;
use App\Models\project;
use App\Models\status;
use App\Models\techarea;
use App\Models\trl;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

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
        $statuses = status::get();
        $projectTargets = Project_target::get();
        // return response()->json($techs);
        return view('advanceSearchPage' , compact('techs' , 'locations','projects' , 'roles' , 'missions' , 'sources' , 'orgtypes' , 'orgs' , 'statuses' , 'projectTargets') );
    }

    public function getProjectsByAdvanceSearch(Request $req)
    {
        $search = $req->search;
        // $projOrgs = project::get();
        $projOrgs = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea.techsectors.techniches' , 'orgperformingworks.location' , 'legalentityroles');

        if($req->order != null)
        {
        if($req->order == 'Relevance')
        {
            $projOrgs = $projOrgs->where(function ($query) use ($req) {
                $query->where('projects.name', 'like', '%' . $req->search . '%')
                    ->orWhere('projects.description', 'like', '%' . $req->search . '%');
            });
        }
        else if($req->order == 'AlphaNumeric')
        {
            $projOrgs = $projOrgs->where('projects.name' , 'like' , '%' . $req->search . '%')
            ->orWhere('projects.description' , 'like' , '%' . $req->search . '%')
            ->orderBy('name')->orderBy('description');
        }
        else if($req->order == 'StartDate')
        {
            $projOrgs = $projOrgs->where('projects.name' , 'like' , '%' . $req->search . '%')
            ->orWhere('projects.description' , 'like' , '%' . $req->search . '%')
            ->orderBy('startdate' , 'desc');
        }

        }

        if($req->searchType != null)
        {
            if($req->searchType == 'all-words')
            {
                $searchValues = preg_split('/\s+/', $req->words_search_bar, -1, PREG_SPLIT_NO_EMPTY); 
                $projOrgs = $projOrgs->where(function ($q) use ($searchValues) {
                    foreach ($searchValues as $value) {
                      $q->where('projects.name', 'like', "%{$value}%")
                        ->orWhere('projects.description', 'like', "%{$value}%");
                    }
                  });
            }
            elseif($req->searchType == 'any-words')
            {
                $searchValues = preg_split('/\s+/', $req->words_search_bar, -1, PREG_SPLIT_NO_EMPTY); 
                $projOrgs = $projOrgs->orWhere(function ($q) use ($searchValues) {
                    foreach ($searchValues as $value) {
                      $q->orWhere('projects.name', 'like', "%{$value}%")
                        ->orWhere('projects.description', 'like', "%{$value}%");
                    }
                  });
            }
            elseif($req->searchType == 'exact-words')
            {
                $projOrgs = $projOrgs->where('projects.name' , 'like' ,  '%'  . $req->words_search_bar . '%')
                ->orWhere('projects.description' , 'like' ,  '%'  . $req->words_search_bar . '%' );
            }

        }

        if($req->Active)
        {
            $projOrgs = $projOrgs->where('projects.id_status' , $req->Active);
        }
        if($req->Completed)
        {
            $projOrgs = $projOrgs->where('projects.id_status' , $req->Completed);
        }
        if($req->Partnership)
        {
            $projOrgs = $projOrgs->where('projects.id_status' , $req->Partnership);
        }

        if($req->active_date)
        {
            if($req->active_date == 'after')
            {
                $projOrgs = $projOrgs->whereDate('projects.startdate' , '>' , $req->date);
            }
            elseif($req->active_date == 'before')
            {
                $projOrgs = $projOrgs->whereDate('projects.enddate' , '<' , $req->date);
            }
            elseif($req->active_date == 'between')
            {
                $projOrgs = $projOrgs->whereBetween('projects.startdate', [$req->start_date, $req->end_date]);
            }

        }

        if(isset($req->input['areas']) && $req->input['areas'] !== null)
        {
            $areas = $req->input['areas'];
            foreach($areas as $area)
            {
                $projOrgs = $projOrgs->where('techreferred.id_techarea' , $area);
                if($req->input['sectors'])
                {
                   $sectors = $req->input['sectors'];
                  foreach($sectors as $sector)
                  {
                    $projOrgs = $projOrgs->where('techreferred.id_techsector' , $sector);
                    if($req->input['niches'])
                    {
                        $niches = $req->input['niches'];
                        foreach($niches as $niche)
                        {
                           $projOrgs = $projOrgs->where('techreferred.id_techniche' , $niche);
                        }
                    }
                  }
                }
            }
        }

        if(isset($req->input['location']) && $req->input['location'] !== null)
        {
            $locations = $req->input['location'];
            foreach($locations as $location)
            {
                $projOrgs = $projOrgs->where('orgperformingworks.id_location' , $location);
            }
        }

        if(isset($req->input['targets']) && $req->input['targets'] !== null)
        {
            $targets = $req->input['targets'];
            foreach($targets as $target)
            {
                $projOrgs = $projOrgs->where('id' , $target);
            }
        }
        
        if(isset($req->input['legal_entities']) && $req->input['legal_entities'] !== null)
        {
            $roles = $req->input['legal_entities'];
            foreach($roles as $role)
            {
                $projOrgs = $projOrgs->where('legalentityroles.id' , $role);
            }
        }

        if(isset($req->input['mission_types']) && $req->input['mission_types'] !== null)

        {
            $missions = $req->input['mission_types'];
            foreach($missions as $mission)
            {
                $projOrgs = $projOrgs->where('id_missiontype' , $mission);
            }
        }

        if($req->organization)
        {
            if($req->organization == 'byType')
            {
        if(isset($req->input['orgTypes']) && $req->input['orgTypes'] !== null)
        {
            $types = $req->input['orgTypes'];
            foreach($types as $type)
            {
                $orgs = orgperformingwork::where('id_type' , $type);
        if(isset($req->input['orgNames']) && $req->input['orgNames'] !== null)
                {
                    $orgIDs = $req->input['orgNames'];
                    foreach($orgIDs as $orgID)
                    {
                        $org = $orgs->where('id' , $req->orgID);
                        $projOrgs = $projOrgs->where('orgperformingworks.id' , $org->id);
                    }
                }
            }
        }
               
            }
            if($req->organization == 'byName')
            {
                $keyword = $req->org_name_search;
                $projOrgs = $projOrgs->where('orgperformingworks.name' , 'like' , '%' . $keyword . '%');
            }
        }

        if(isset($req->input['found_sources']) && $req->input['found_sources'] !== null)
        {
            $sources = $req->input['found_sources'];
            foreach($sources as $source)
            {
                $projOrgs = $projOrgs->where('id_foundsource' , $source);
            }
        }

        if($req->start_trl)
        {
            $min_max_values = preg_split('/\s+/', $req->start_trl, -1, PREG_SPLIT_NO_EMPTY); 
            $projOrgs = $projOrgs->whereBetween('id_trlstart' , [$min_max_values[0] , $min_max_values[1]]);
        }
        if($req->current_trl)
        {
            $min_max_values = preg_split('/\s+/', $req->current_trl, -1, PREG_SPLIT_NO_EMPTY); 
            $projOrgs = $projOrgs->whereBetween('id_trlactual' , [$min_max_values[0] , $min_max_values[1]]);

        }
        if($req->final_trl)
        {
            $min_max_values = preg_split('/\s+/', $req->final_trl, -1, PREG_SPLIT_NO_EMPTY); 
            $projOrgs = $projOrgs->whereBetween('id_trlfinal' , [$min_max_values[0] , $min_max_values[1]]);
        }

        if($req->techport_id !== null)
        {
            $validator = Validator::make($req->all(),[
                'techport_id'=> 'integer',
            ]);
            $projOrgs = $projOrgs->where('id' , $req->techport_id);
        }
$projOrgs = $projOrgs->get();
        if ($req->order == 'Relevance') {
    $projOrgs = $projOrgs->sortByDesc(function ($projOrg) use ($req) {
        return similar_text($projOrg->name, $req->search) + similar_text($projOrg->description, $req->search);
    });
}
        
        $allTrls = trl::with('projects.trlactual')->get();
    
    
            $count = $projOrgs->unique('id')->count();
            $active = $projOrgs->where('status.status' , 'Active')->count();
            $complete = $projOrgs->where('status.status' , 'Completed')->count();
            $partnership = $projOrgs->where('status.status' , 'Partnership')->count();
            
            // return response()->json(compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership'));
    
            return view('searchResultsPage' , compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls'));
    }


}
