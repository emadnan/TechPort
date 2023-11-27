<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techarea extends Model
{
    use HasFactory;

    public function techreferreds()
    {
        return $this->hasMany(
            techreferred::class,
            'id_techarea', // Foreign key on the mapping table for TechNiche
        );
    }
    
    public function techsectors()
    {
        return $this->hasManyThrough(
            techsector::class,
            techreferred::class,
            'id_techarea', // Foreign key on the mapping table for TechArea
            'id', // Local key on the mapping table for TechSector
            'id', // Local key on the TechArea table
            'id_techsector' // Foreign key on the TechSector table
        );
    }
}
