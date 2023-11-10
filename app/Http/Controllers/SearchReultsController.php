<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use Illuminate\Http\Request;

class SearchReultsController extends Controller
{
    public function index()
    {
        $locations = location::get();
        $missions = missiontype::get();
        $sources = foundingsource::get();
        $entities = legalentityrole::get();
        return view('searchResultsPage' , compact('locations' ,'missions' , 'sources' , 'entities'));
    }
}
