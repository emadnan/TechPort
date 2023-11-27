<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techreferred extends Model
{
    use HasFactory;
    protected $table = 'ref_techreferred';

    public function techarea()
    {
        return $this->belongsTo(techarea::class , 'id_techarea');
    }

    public function techsector()
    {
        return $this->belongsTo(techsector::class , 'id_techsector');
    }

    public function techniche()
    {
        return $this->belongsTo(techniche::class , 'id_techniche');
    }

    public function projects()
    {
        return $this->hasMany(project::class , 'id_techreferred');
    }
}
