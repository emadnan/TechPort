<?php

namespace App\Http\Controllers;

use App\Models\project;
use App\Models\techarea;
use App\Models\techreferred;
use App\Models\techsector;
use App\Models\techniche;
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
        $niches = techniche::get();

        return view('dashboard.techSectorPage' , compact('areas' , 'sectors' , 'niches'));
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
            // 'id_techniche'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'code'=> 'required',
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
        $techSector->code = strtoupper($req->code);
        $techSector->note = $req->note;
        $techSector->save();
        // $techArea->techsectors()->create();

        // $selectedTechNiches = $req->input('selected_techniche');
        // if(is_array($selectedTechNiches))
        // {
        //     foreach($selectedTechNiches as $selectedTechNiche)
        //     {
        //         $techreferred = new techreferred ;
        //         $techreferred->id_techsector = $techSector->id;
        //         $techreferred->id_techniche = $selectedTechNiche;
        //         $techreferred->save();
        //     }
        // }
        // else {
        //     $selectedTechnicheArray = explode(',', $selectedTechNiches);
        //     foreach ($selectedTechnicheArray as $techniche) {
        //         $techreferred = new techreferred ;
        //         $techreferred->id_techsector = $techSector->id;
        //         $techreferred->id_techniche = $techniche;
        //         $techreferred->save();
        //     }
        // }
       
       
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
            // 'id_techniche'=> 'required',
            'id_dm'=> 'nullable',
            'otme'=> 'required',
            'code'=> 'required',
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
            'code'=> strtoupper($req->code),
            'note'=> $req->note,
        ]);

        // $selectedTechNiches = $req->selected_techniche;
        // $techreferreds = techreferred::where('id_techsector' , $id)->get();
        // if(is_array($selectedTechNiches)) {
        //     if(count($selectedTechNiches) < count($techreferreds)) {
        //         $count = count($techreferreds) - count($selectedTechNiches);
        //         for ($i=0 ; $i<$count ; $i++) {
        //             $techreferreds[$i]->delete();
        //         }                
        //     }
        //     else if (count($selectedTechNiches) > count($techreferreds)) {
        //         $count = count($selectedTechNiches) - count($techreferreds);
        //         for($i=0 ; $i<$count ; $i++) {
        //             $techreferred = new techreferred;
        //             $techreferred -> id_techsector = $id;
        //             $techreferred->save();
        //         }
        //     }
        //     $newTechReferreds = techreferred::where('id_techsector' , $id)->get();
        //     for($i = 0 ; $i < count($newTechReferreds) ; $i++) {
        //         $newTechReferreds[$i]->id_techniche = $selectedTechNiches[$i];
        //         $newTechReferreds[$i]->save();
        //     }
            
        // }
        // else {
        //     $selectedTechnicheArray = explode(',', $selectedTechNiches);
        //     if(count($selectedTechnicheArray) < count($techreferreds)) {
        //         $count = count($techreferreds) - count($selectedTechnicheArray);
        //         for ($i=0 ; $i<$count ; $i++) {
        //             $techreferreds[$i]->delete();
        //         }
        //     }
        //     else if (count($selectedTechnicheArray) > count($techreferreds)) {
        //         $count = count($selectedTechnicheArray) - count($techreferreds);
        //         for($i=0 ; $i<$count ; $i++) {
        //             $techreferred = new techreferred;
        //             $techreferred -> id_techsector = $id;
        //             $techreferred->save();
        //         }
        //     }
        //     $newTechReferreds = techreferred::where('id_techsector' , $id)->get();
        //     for($i = 0 ; $i < count($newTechReferreds) ; $i++) {
        //         $newTechReferreds[$i]->id_techniche = $selectedTechnicheArray[$i];
        //         $newTechReferreds[$i]->save();
        //     }
        // }

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
