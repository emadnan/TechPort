<?php

namespace Database\Seeders;

use App\Models\status;
use Illuminate\Database\Seeder;

class statusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [[
            'status' => 'Active',
        ],
    [
        'status' => 'Completed',

        ],
    [
        'status' => 'Partnership',
        ],
];
        foreach ($data as $item) {
            status::create($item);
         }
          
    }
}
