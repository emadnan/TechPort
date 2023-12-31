<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\techarea;
use App\Models\techreferred;
use App\Models\techsector;
use App\Models\trl;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
class TechSectorController extends Controller
{
    public function techSectorPage ()
    {
        $sectors = techsector::get();
        $areas = techarea::get();

        return view('dashboard.techSectorPage' , compact('areas' , 'sectors'));
    }

    public function read (string $id)   
    {
        $read = Db::table('techsector')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('dashboard.createTechSector');
    }

    public function create(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'techsector'=> 'required',
            'techsectordescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        // $techArea = TechArea::find($req->input('id_techarea'));


        $techSector = new techsector;
        $techSector->techsector = $req->techsector;
        $techSector->techsectordescription = $req->techsectordescription;
        $techSector->id_dm = $req->id_dm;
        $techSector->otme = $req->otme;
        $techSector->note = $req->note;
        $techSector->save();
        // $techArea->techsectors()->create();
        
        // $techReferred = new techreferred;
        // $techReferred->techareas()->associate($techArea->id);
        // $techReferred->techsectors()->associate($techSector->id);
        // $techSector->techareas()->attach($techArea->id);
        
        if($techSector)
        {
            $latestID = techsector::latest()->value('id');
            $newRow = DB::table('techsector')->where('id', $latestID)->get();
            return response()->json(['message' => 'Technology Sector  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Technology Sector  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techsector')->where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;
        $validator = Validator::make($req->all(),[
            'techsector'=> 'required',
            'techsectordescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = DB::table('techsector')->where('id',$id)->update([
            'techsector'=> $req->techsector,
            'techsectordescription'=> $req->techsectordescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('techsector')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Technology Sector  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Technology Sector Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = DB::table('techsector')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology Sector  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology Sector  Was Not Deleted Successfully']);
        }
    }

    public function searchProjectsByTechSector(string $id)
    {
        $projOrgs = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea' , 'techareas' , 'orgperformingworks.location' , 'legalentityroles')
        ->whereHas('techreferred', function ($query) use ($id) {
            $query->where('id_techsector', $id);
        })
        ->get();

        $allTrls = trl::with('projects.trlactual')->get();


        $count = $projOrgs->unique('id')->count();
        $active = $projOrgs->where('status.status' , 'Active')->count();
        $complete = $projOrgs->where('status.status' , 'Completed')->count();
        $partnership = $projOrgs->where('status.status' , 'Partnership')->count();
        
        // return response()->json(compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership'));

        return view('searchResultsPage' , compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls'));
    }

    public function __construct()
    {
        $this->middleware('auth')->except('searchProjectsByTechSector');
    }

}
