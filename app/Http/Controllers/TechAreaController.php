<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\techarea;
use App\Models\techsector;
use App\Models\techreferred;
use App\Models\trl;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class TechAreaController extends Controller
{
    

    public function techAreaPage ()
    {
        $areas = techarea::get();
        $sectors = techsector::get();
        return view('dashboard.techAreaPage' , compact('areas' , 'sectors'));
    }

    public function read (string $id)   
    {
        $read = Db::table('techareas')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'techarea'=> 'required',
            'techareadescription'=> 'required',
            // 'id_techsector'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'code'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $techArea = new techarea;
        $techArea->techarea = $req->techarea;
        $techArea->techareadescription = $req->techareadescription;
        $techArea->id_dm = $req->id_dm;
        $techArea->otme = $req->otme;
        $techArea->code = strtoupper($req->code);
        $techArea->note = $req->note;
        $techArea->save();

        // Code For Tree structure 

        // $selectedTechSectors = $req->input('selected_techsector');
        // if(is_array($selectedTechSectors))
        // {
        //     foreach($selectedTechSectors as $selectedTechSector)
        //     {
        //         $techreferreds = techreferred::where('id_techsector' , $selectedTechSector)->get();
        //         foreach($techreferreds as $techreferred) {
        //             $techreferred->id_techarea = $techArea->id;
        //             $techreferred->save();
        //         }
        //     }
        // }
        // else {
        //     $selectedTechSectorArray = explode(',', $selectedTechSectors);
        //     foreach ($selectedTechSectorArray as $techsector) {
        //         $techreferreds = techreferred::where('id_techsector' , $techsector)->get();
        //         foreach($techreferreds as $techreferred) {
        //             $techreferred->id_techarea = $techArea->id;
        //             $techreferred->save();
        //         }
        //     }
        // } 

        if($techArea)
        {
            $latestID = techarea::latest()->value('id');
            $newRow = DB::table('techareas')->where('id', $latestID)->get();
            return response()->json(['message' => 'Technology Area  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Technology Area  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techareas')->where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        
        $validator = Validator::make($req->all(),[
            'techarea'=> 'required',
            'techareadescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'code'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }
        
        $Update = DB::table('techareas')->where('id',$id)->update([
            'techarea'=> $req->techarea,
            'techareadescription'=> $req->techareadescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'code'=> strtoupper($req->code),
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('techareas')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Technology Area  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Technology Area Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = DB::table('techareas')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology Area  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology Area  Was Not Deleted Successfully']);
        }
    }

    public function fetchDataFromApi(Request $req)
    {
        $dm = $req->input('dm');
        $tk = $req->input('tk');

        $url = 'https://api.drass.it/GetDM/read.php';
        $params = [
            'dm' => $dm ,
            'tk' => $tk
        ];

        $response = Http::get($url , $params);
        
        if ($response->failed()) {
            // Handle the HTTP error
            return response()->json(['error' => 'Failed to fetch data from API'], $response->status());
        }

        $data = $response->json();
        return response()->json(['data'=>$data]);
    }

    public function searchProjectsByTechArea(string $id)
    {
        $projOrgs = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea' , 'techareas' , 'orgperformingworks.location' , 'legalentityroles')
        ->whereHas('techareas', function ($query) use ($id) {
            $query->where('techareas.id', $id);
        })
        ->get();

        $allTrls = trl::with('projects.trlactual')->get();
        $techarea = techarea::find($id);
        $title = $techarea->techarea;


        $count = $projOrgs->unique('id')->count();
        $active = $projOrgs->where('status.status' , 'Active')->count();
        $complete = $projOrgs->where('status.status' , 'Completed')->count();
        $partnership = $projOrgs->where('status.status' , 'Partnership')->count();
        $totalTechareas = techarea::count();

        $techareas = techarea::with('projects')->get();
        
        // return response()->json(compact('techareas'));

        return view('searchResultsPage' , compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls' , 'title' , 'totalTechareas' , 'techareas'));
    }

    public function __construct()
    {
        $this->middleware('auth')->except('searchProjectsByTechArea');
    }
}

