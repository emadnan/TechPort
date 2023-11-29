<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class trl extends Model
{
    use HasFactory;
    protected $table = "trl";

    
    public function projects()
    {
        return $this->hasMany(project::class , 'id_trlactual');
    }
}
