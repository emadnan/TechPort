<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techarea extends Model
{
    use HasFactory;
    
    public function techreferred()
    {
        return $this->hasMany(techreferred::class , 'id_techarea');
    }
}
