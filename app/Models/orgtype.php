<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class orgtype extends Model
{
    use HasFactory;
    protected $table = "orgtype";

    public function orgperformingworks()
    {
        return $this->hasMany(orgperformingwork::class , 'id_type');
    }

}
