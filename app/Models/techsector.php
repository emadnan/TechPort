<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techsector extends Model
{
    use HasFactory;
    protected $table = 'techsector';

    public function techreferred()
    {
        return $this->hasMany(techreferred::class , 'id_techsector');
    }
}
