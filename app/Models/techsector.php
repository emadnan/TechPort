<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techsector extends Model
{
    use HasFactory;
    protected $table = 'techsector';

    public function techreferreds()
    {
        return $this->hasMany(
            techreferred::class,
            'id_techsector', // Foreign key on the mapping table for TechNiche
        );
    }
    public function techniches()
    {
        return $this->hasManyThrough(
            techniche::class,
            techreferred::class,
            'id_techsector', // Foreign key on the mapping table for TechSector
            'id', // Local key on the mapping table for Techniche
            'id', // Local key on the TechSector table
            'id_techniche' // Foreign key on the Techniche table
        );
    }
}
