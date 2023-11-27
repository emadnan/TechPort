<?php

namespace App\Models;
use App\Models\project;
use App\Models\ref_projectorganization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class legalentityrole extends Model
{
    use HasFactory;
    protected $table = "legalentityrole";

    public function orgperformingworks()
    {
        return $this->hasManyThrough(orgperformingwork::class , ref_projectorganization::class , 'id_legalentityrole', 'id','id','id_orgperformingwork');
    }

    public function projects()
    {
        return $this->hasManyThrough(project::class , ref_projectorganization::class , 'id_legalentityrole', 'id','id','id_project');
    }

    public function ref_projectorganizations()
    {
        return $this->hasMany(ref_projectorganization::class , 'id_legalentityrole');
    }
}
