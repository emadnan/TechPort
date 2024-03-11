<?php

namespace App\Http\Controllers;

use App\Models\foundingsource;
use App\Models\legalentityrole;
use App\Models\location;
use App\Models\missiontype;
use App\Models\orgperformingwork;
use App\Models\project;
use App\Models\ref_projectorganization;
use App\Models\techarea;
use App\Models\trl;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class LegalEntityController extends Controller
{
    public function legalEntityClickingPage(string $id)
    {


    $projOrg = legalentityrole::with('projects.missiontype' ,'projects.foundingsource','projects.status' , 'projects.techreferred.techarea' , 'projects.orgperformingworks.location', 'projects.project_target')
    ->where('id' , $id)
    ->first();
    $allTrls = trl::with('projects.trlactual')->get();

    $count = $projOrg->projects->unique('id')->count();
    $active = $projOrg->projects->where('status.status' , 'Active')->count();
    $complete = $projOrg->projects->where('status.status' , 'Completed')->count();
    $partnership = $projOrg->projects->where('status.status' , 'Partnership')->count();
    $techareas = techarea::with('projects')->get();
    $totalTechareas = techarea::count();

    // return response()->json(compact('projOrg' , 'count' , 'active' , 'complete' , 'partnership'));
        return view('legalEntityClickingPage' , compact('projOrg' , 'count', 'active' , 'complete' , 'allTrls', 'partnership' , 'totalTechareas' , 'techareas') );
    }

    public function getProjectsLengthByRoleID(string $roleID ,string $trlID)
    {
        $project = project::with('ref_projectorganizations.legalentityrole')
            ->whereHas('ref_projectorganizations', function ($query) use ($roleID) {
            // Use a closure to apply conditions on the relationship
            $query->where('id_legalentityrole', $roleID);
        })
            ->where('id_trlactual' , $trlID)
            ->count();
        
        return response()->json(compact('project'));
    }

    public function index()
    {
        $entities = legalentityrole::paginate(10);
     return view('legalEntityRolesPage' , compact('entities')); 
        // return response()->json(['data'=>$entities]);
    }

    public function legalEntityPage ()
    {
        $entity = DB::table('legalentityrole')->get();
        return view('dashboard.legalEntityForm' , ['data'=>$entity]);
    }

    public function read (string $id)
    {
        $heRead = Db::table('legalentityrole')->where('id',$id)->get();

        return response()->json(['data'=>$heRead]);
    }

    public function addPage()
    {
        return view('dashboard.createLegalEntity');
    }

    public function create(Request $req)
    {
        // return response()->json(['message'=>'tempp test'])
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'description'=> 'required',

        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $create = DB::table('legalentityrole')->insert([
            'name'=> $req->name,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);
        
        if($create)
        {
            $latestID = legalentityrole::latest()->value('id');
            $row = DB::table('legalentityrole')->where('id', $latestID)->get();

            return response()->json(['message' => 'Legal Entity  Added successfully' , 'Row'=>$row]);
        }
        else 
        {
            return response()->json(['message' => 'Legal Entity  Was Not Added successfully']);
        }
        // $legalentityrole = new legalentityrole;
        // $legalentityrole->id = $req->id;
        // $legalentityrole->name = $req->name;
        // $legalentityrole->description = $req->description;
        // $legalentityrole->save();
        // return response()->json(['message'=>'Legal Entity Added successfully' , 'Row'=>$legalentityrole]);
    }

    public function updatePage(string $id)
    {
        $upEntity = DB::table('legalentityrole')->where('id',$id)->get();
        return response()->json(['row'=>$upEntity]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'description'=> 'required',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;

        $Update = DB::table('legalentityrole')->where('id',$id)->update([
            'name'=> $req->name,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);
        if($Update)
        {
            $update = DB::table('legalentityrole')->where('id', $id)->get();
            if($update)
            {
              return response()->json(['message' => 'Legal Entity Role Updated Successfully' , 'update'=>$update]);
            }        }
        else
        {
            return response()->json(['message' => 'Legal Entity Role Not Updated Successfully']);
        }

    }

    public function delete(string $id)
    {
        $Delete = DB::table('legalentityrole')->where('id',$id)->delete();
        if($Delete)
        {
            return response()->json(['message' => 'Legal Entity Role  Deleted Successfully' , 'data'=>$Delete]);
        } 
        else
        {
            return response()->json(['message' => 'Legal Entity Role  Was Not Deleted Successfully']);
        }
    }

    public function __construct()
    {
        $this->middleware('auth')->except('index' , 'legalEntityClickingPage' , 'getProjectsLengthByRoleID');
    }
}
