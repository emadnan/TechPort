<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techniche extends Model
{
    use HasFactory;
    protected $table = "techniche";
    protected $primaryKey = 'id';

    public function techreferreds()
    {
        return $this->hasMany(
            techreferred::class,
            'id_techniche', // Foreign key on the mapping table for TechNiche
        );
    }

    public function techsectors()
    {
        return $this->belongsTo(techsector::class, 'id_techniche');
    }
    public function projects()
    {
        return $this->hasManyThrough(project::class , techreferred::class , 'id_techniche', 'id_techreferred','id','id');
    }
}
