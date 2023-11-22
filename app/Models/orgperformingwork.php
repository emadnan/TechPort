<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orgperformingwork extends Model
{
    use HasFactory;
    protected $table = "orgperformingwork";

    public function ref_projectorganization()
    {
        return $this->hasMany(ref_projectorganization::class , 'id_orgperformingwork');
    }
}