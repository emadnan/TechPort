<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ref_projectorganization extends Model
{
    use HasFactory;
    protected $table = "ref_projectorganization";
        public function project()
        {
            return $this->belongsTo(project::class , 'id_project');
        }
        
        public function orgperformingwork()
        {
            return $this->belongsTo(orgperformingwork::class , 'id_orgperformingwork');
        }

        public function legalentityrole()
        {
            return $this->belongsTo(legalentityrole::class , 'id_legalentityrole');
        }
}
