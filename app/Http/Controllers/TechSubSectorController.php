<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\techniche;
use App\Models\techreferred;
use App\Models\techsector;
use App\Models\techarea;
use App\Models\trl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class TechSubSectorController extends Controller
{
    public function techSubSectorPage ()
    {
        $sectors = techsector::get();
        $niches = techniche::get();
        
        return view('dashboard.techSubSectorPage' , compact('sectors' , 'niches' ));
    }

    public function read (string $id)   
    {
        $read = Db::table('techniche')->where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function addPage()
    {
        return view('dashboard.createTechSubSector');
    }

    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'techniche'=> 'required',
            'technichedescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        // $Create = DB::table('techniche')->insert([
        //     'techniche'=> $req->techniche,
        //     'technichedescription'=> $req->technichedescription,
        //     'id_dm'=> $req->id_dm,
        //     'otme'=> $req->otme,
        //     'note'=> $req->note,
        // ]);

        // $techSector = techsector::find($req->input('id_techsector'));

        $techniches  = new techniche;
        $techniches->techniche = $req->techniche;
        $techniches->technichedescription = $req->technichedescription;
        $techniches->id_dm = $req->id_dm;
        $techniches->otme = $req->otme;
        $techniches->note = $req->note;
        $techniches->save();

        // $techReferred = new techreferred();
        // $techReferred->techsectors()->associate($techSector->id);
        // $techReferred->techniches()->associate($techniches->id);
        // $techniches->techsectors()->attach($req->input('id_techsector'));

        if($techniches)
        {
            $latestID = techniche::latest()->value('id');
            $newRow = DB::table('techniche')->where('id', $latestID)->get();
            return response()->json(['message' => 'Technology Sub Sector  Added successfully' , 'newRow'=>$newRow]);
        }
        else 
        {
            return response()->json(['message' => 'Technology Sub Sector  Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $upArea = DB::table('techniche')->where('id', $id)->get();
        return response()->json(['row'=>$upArea]);
    }

    public function update(Request $req)
    {
        $id = $req->id;

        $validator = Validator::make($req->all(),[
            'techniche'=> 'required',
            'technichedescription'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'note'=> 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $Update = DB::table('techniche')->where('id',$id)->update([
            'techniche'=> $req->techniche,
            'technichedescription'=> $req->technichedescription,
            'id_dm'=> $req->id_dm,
            'otme'=> $req->otme,
            'note'=> $req->note,
        ]);

        if($Update)
        {
            $update = DB::table('techniche')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Technology Sub Sector  Updated Successfully' , 'update'=>$update]);
            }
        }
        else
        {
            return response()->json(['message' => 'Technology Sub Sector Not Updated Successfully']);
        }
    }

    public function delete(string $id)
    {
        $delete = DB::table('techniche')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Technology Sub Sector  Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Technology Sub Sector  Was Not Deleted Successfully']);
        }
    }    

    public function searchProjectsByTechNiche(string $id)
    {
        $projOrgs = project::with('foundingsource' , 'missiontype', 'status' , 'techreferred.techarea' , 'techareas' , 'orgperformingworks.location' , 'legalentityroles')
        ->whereHas('techreferred', function ($query) use ($id) {
            $query->where('id_techniche', $id);
        })
        ->get();

        $allTrls = trl::with('projects.trlactual')->get();
        $techniche = techniche::find($id);
        $title = $techniche->techniche;


        $count = $projOrgs->unique('id')->count();
        $active = $projOrgs->where('status.status' , 'Active')->count();
        $complete = $projOrgs->where('status.status' , 'Completed')->count();
        $partnership = $projOrgs->where('status.status' , 'Partnership')->count();
        $totalTechareas = techarea::count();
        $techareas = techarea::with('projects')->get();
        
        // return response()->json(compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership'));

        return view('searchResultsPage' , compact('projOrgs' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls' , 'title' , 'totalTechareas' , 'techareas'));
    }

    public function __construct()
    {
        $this->middleware('auth')->except('searchProjectsByTechNiche');
    }

}
