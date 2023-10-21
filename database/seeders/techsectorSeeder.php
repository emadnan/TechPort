<?php

namespace Database\Seeders;

use App\Models\techsector;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class techsectorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        techsector::insert(
            [
                'techsector'=>'TX01.1',
                'techsectordescription'=>' Chemical Space Propulsion'
            ]
            );
    }
}
