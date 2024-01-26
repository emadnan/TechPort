<?php

namespace App\Http\Controllers;
use App\Models\foundingsource;
use App\Models\project;
use App\Models\Project_target;
use App\Models\trl;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class ProjectTargetController extends Controller
{
    public function projectTargetClickingPage( string $id)
    {
    $projOrg = Project_target::with('projects.missiontype','projects.status' , 'projects.techreferred.techarea' , 'projects.orgperformingworks.location' , 'projects.legalentityroles', 'projects.foundingsource')
    ->where('id' , $id)
    ->first();

    $allTrls = trl::with('projects.trlactual')->get();

    $count = $projOrg->projects->unique('id')->count();
    $active = $projOrg->projects->where('status.status' , 'Active')->count();
    $complete = $projOrg->projects->where('status.status' , 'Completed')->count();
    $partnership = $projOrg->projects->where('status.status' , 'Partnership')->count();
// return response()->json(compact('projOrg'));
        return view('projectTargetClickingPage' , compact('projOrg' , 'count' , 'active' , 'complete' , 'partnership' , 'allTrls' ) );
    }

    public function getProjectsLengthByProjectTargetID(string $targetID ,string $trlID)
    {
        $project = project::where('id_project_target' , $targetID)
                   ->where('id_trlactual' , $trlID)
                   ->count();
        
        return response()->json(compact('project'));
    }

    public function index()
    {
        $targets = Project_target::paginate(10);
        return view('projectTargetsPage' , compact('targets'));
    }

    public function projectTargetPage ()
    {
        $targets = Project_target::get();
        return view('dashboard.project_targetForm' , compact('targets'));
    }

    public function read (string $id)
    {
        $read = Project_target::where('id',$id)->get();
        return response()->json(['data'=>$read]);
    }

    public function create(Request $req)
    {

        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'description' => 'nullable',
            'note' => 'nullable',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors() , 'oldInput' => $req->all()]);
        }

        $target = new Project_target;
        $target->name = $req->name;
        $target->description = $req->description;
        $target->note = $req->note;
        $target->save();

        if($target)
        {
            $latestID = Project_target::latest()->value('id');
            $row = DB::table('project_targets')->where('id', $latestID)->get();
          return response()->json(['message' => 'Source Added successfully' , 'row'=>$row]);
        }
        else 
        {
            return response()->json(['message' => 'Source Was Not Added successfully']);
        }
    }

    public function updatePage(string $id)
    {
        $update = DB::table('project_targets')->where('id',$id)->get();
                return response()->json(['row'=>$update]);
    }

    public function update(Request $req)
    {
        $validator = Validator::make($req->all(),[
            'name'=> 'required',
            'description' => 'nullable',
            'note' => 'nullable',
        ]);
        
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors(), 'oldInput' => $req->all()]);
        }

        $id = $req->id;
        $update = DB::table('project_targets')->where('id',$id)->update([
            'name'=> $req->name,
            'description'=> $req->description,
            'note'=> $req->note,
        ]);
        if($update)
        {
            $update = DB::table('project_targets')->where('id', $id)->get();
                  if($update)
                  {
                    return response()->json(['message' => 'Source Updated Successfully' , 'update'=>$update]);
                  }
        }
        else
        {
            return response()->json(['message' => 'Source Was No Updated Successfully' ]);
        }

    }

    public function delete(string $id)
    {
        $delete = DB::table('project_targets')->where('id',$id)->delete();
        if($delete)
        {
            return response()->json(['message' => 'Source Deleted Successfully' , 'data'=>$delete]);
        } 
        else
        {
            return response()->json(['message' => 'Source Was Not Deleted Successfully']);
        }
    }
    
public function __construct()
{
    $this->middleware('auth')->except('index' , 'projectTargetClickingPage' , 'getProjectsLengthByProjectTargetID');
}
}
