<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use Illuminate\Http\Request;

class SearchReultsController extends Controller
{
    public function index()
    {
        $locations = location::get();
        $missions = missiontype::get();
        $sources = foundingsource::get();
        $entities = legalentityrole::get();
        $orgs = orgperformingwork::get();
        $projects = project::get();

        $projOrgs = ref_projectorganization::select('orgtype.type as orgtype' , 'humanentity.name as humanName' ,
        'humanentity.surname as humanSurName' , 'location.city' ,'location.state' ,'location.id as locationID' ,
        'projects.name as projectName' , 'projects.description as projectDescription' , 'status.status as status',
        'techsector.techsector' , 'techareas.techarea' , 'techniche.techniche' , 'trl.trllevel', 
        'missiontype.type as missionType' , 'missiontype.id as missionID' , 'orgperformingwork.name as orgName' , 
        'orgperformingwork.description as orgDescription' , 'orgperformingwork.id as orgID' , 'orgperformingwork.code as orgCode' , 
        'foundingSources.id as sourceID' , 'foundingSources.name as sourceName' , 
        'legalentityrole.name as legalName' ,'legalentityrole.id as legalID' , 'ref_projectorganization.*' , 'projects.*' )
   
       ->join('projects' , 'projects.id' , '=' , 'ref_projectorganization.id_project') 
           ->join('missiontype' , 'missiontype.id' , '=' ,'projects.id_missiontype')
           ->join('trl' , function($join){
               $join->on('trl.id' , '=' ,'projects.id_trlstart');
               $join->on('trl.id' , '=' ,'projects.id_trlactual');
               $join->on('trl.id' , '=' ,'projects.id_trlfinal');
           })
           ->join('foundingsources' , 'foundingsources.id' , '=' , 'projects.id_foundsource')
           ->join('ref_techreferred' , 'ref_techreferred.id' , '=' , 'projects.id_techreferred')
           ->join('techareas' , '.techareas.id' , '=' , 'ref_techreferred.id_techarea')
           ->join('techsector' , '.techsector.id' , '=' , 'ref_techreferred.id_techsector')
           ->join('techniche' , '.techniche.id' , '=' , 'ref_techreferred.id_techniche')
           ->join('status' , 'status.id' , '=' , 'projects.id_status')
       ->join('orgperformingwork' , 'orgperformingwork.id' , '=' , 'ref_projectorganization.id_orgperformingwork')
           ->join('orgtype' , 'orgtype.id' , '=' , 'orgperformingwork.id_type')
           ->join('humanentity' , 'humanentity.id' , '=' , 'orgperformingwork.id_humanentity')
           ->join('location' , 'location.id' , '=' , 'orgperformingwork.id_location')
           ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
    //    ->where('projects.id' , $id)
       ->get();
        return view('searchResultsPage' , compact('locations' ,'missions' , 'sources' , 'entities' , 'orgs' , 'projects' , 'projOrgs'));
    }

    public function searchProjects(Request $req)
    {
        $search = project::where('name' , 'like' , '%' . $req->searchBar . '%')->get();
        return response()->json($search);

        return view('searchResultsPage' , compact('search'));
    }
}
