<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    public function ref_projectorganizations()
    {
        return $this->hasMany(ref_projectorganization::class , 'id_project');
    }

    public function orgperformingworks()
    {
        return $this->hasManyThrough(orgperformingwork::class , ref_projectorganization::class , 'id_project', 'id','id','id_orgperformingwork');
    }

    public function legalentityroles()
    {
        return $this->hasManyThrough(legalentityrole::class , ref_projectorganization::class , 'id_project', 'id','id','id_legalentityrole');
    }
     
    public function missiontype()
    {
        return $this->belongsTo(missiontype::class , 'id_missiontype');
    }

    public function foundingsource()
    {
        return $this->belongsTo(foundingsource::class , 'id_foundsource');
    }

    public function project_target()
    {
        return $this->belongsTo(Project_target::class , 'id_project_target');
    }

    public function status()
    {
        return $this->belongsTo(status::class , 'id_status');
    }

    public function trlactual()
    {
        return $this->belongsTo(trl::class , 'id_trlactual');
    }
    public function trlstart()
    {
        return $this->belongsTo(trl::class , 'id_trlstart');

    }

    public function trlfinal()
    {
        return $this->belongsTo(trl::class , 'id_trlfinal');
    }

    public function techreferred()
    {
        return $this->belongsTo(techreferred::class , 'id_techreferred');
    }

    // public function techareas()
    // {
    //     return $this->belongsTo(techarea::class , 'id_techarea');
    // }

    public function techareas()
    {
        return $this->hasManyThrough(techarea::class , techreferred::class , 'id', 'id','id_techreferred','id_techarea');
    }
}


