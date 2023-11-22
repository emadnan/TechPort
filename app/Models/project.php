<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $table = 'projects';

    public function ref_projectorganization()
    {
        return $this->hasMany(ref_projectorganization::class , 'id_project');
    }
     
    public function missiontype()
    {
        return $this->belongsTo(missiontype::class , 'id_missiontype');
    }

    public function foundingsources()
    {
        return $this->belongsTo(foundingsource::class , 'id_foundsource');
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
}