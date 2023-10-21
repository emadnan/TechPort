<?php

namespace Database\Seeders;

use App\Models\reference;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class referenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        reference::insert(
            [
                'reference'=>'null',
                'note'=>'null',
            ]
            );
    }
}
