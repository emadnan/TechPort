<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    use HasFactory;
    protected $table = 'status';

    public function projects()
    {
        return $this->hasMany(project::class , 'id_status');
    }
}
