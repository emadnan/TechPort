<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class missiontype extends Model
{
    use HasFactory;
    protected $table = "missiontype";

    public function projects()
    {
        return $this->hasMany(project::class , 'id_missiontype');
    }

    public function trls()
    {
        return $this->hasManyThrough(trl::class , project::class , 'id_missiontype', 'id','id','id_trlactual');
    }
}
