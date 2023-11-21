<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class techniche extends Model
{
    use HasFactory;
    protected $table = "techniche";

    public function techreferred()
    {
        return $this->hasMany(techreferred::class , 'id_techniche');
    }
}
