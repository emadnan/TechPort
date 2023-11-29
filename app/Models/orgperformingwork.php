<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orgperformingwork extends Model
{
    use HasFactory;
    protected $table = "orgperformingwork";

    public function ref_projectorganization()
    {
        return $this->hasMany(ref_projectorganization::class , 'id_orgperformingwork');
    }

    public function orgtype()
    {
        return $this->belongsTo(orgtype::class , 'id_type');
    }

    public function humanentity()
    {
        return $this->belongsTo(humanentity::class , 'id_humanentity');
    }

    public function location()
    {
        return $this->belongsTo(location::class , 'id_location');
    }
    public function projects()
    {
        return $this->hasManyThrough(project::class , ref_projectorganization::class , 'id_orgperformingwork', 'id','id','id_project');
    }

    public function legalentityroles()
    {
        return $this->hasManyThrough(legalentityrole::class , ref_projectorganization::class , 'id_orgperformingwork', 'id','id','id_legalentityrole');
    }
}
