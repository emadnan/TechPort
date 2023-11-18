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

        $projOrgs = ref_projectorganization::select('projects.*' ,  'projects.name as projectName' , 'projects.id as projectID' , 'projects.description as projectDescription' , 'status.status' , 'techsector.techsector' , 'techareas.techarea' , 'techniche.techniche' , 'trl.trllevel', 'missionType.type as missionType' , 'missionType.id as missionID' , 'orgperformingwork.name as orgName' ,'orgperformingwork.id as orgID' , 'legalentityrole.name as legalName' ,'legalentityrole.id as legalID' , 'foundingsources.name as sourceName' , 'foundingsources.id as sourceID' , 'ref_projectorganization.*' )
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
    ->join('legalentityrole' , 'legalentityrole.id' , '=' , 'ref_projectorganization.id_legalentityrole')
    ->get();
        return view('searchResultsPage' , compact('locations' ,'missions' , 'sources' , 'entities' , 'orgs' , 'projects' , 'projOrgs'));
    }
}
