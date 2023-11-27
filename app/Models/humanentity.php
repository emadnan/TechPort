<?php

namespace App\Models;  
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class humanentity extends Model
{
    use HasFactory;
    protected $table = "humanentity";

    public function orgperformingworks()
    {
        return $this->hasMany(orgperformingwork::class , 'id_humanentity');
    }
}
