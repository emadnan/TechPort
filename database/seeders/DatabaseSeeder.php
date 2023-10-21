<?php

namespace Database\Seeders;

use App\Models\techsector;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run() : void
    {
        $this->call([
        humanentitySeeder::class,
        projectSeeder::class,
        techareaSeeder::class,
        techsector::class,
        techrefferedSeeder::class,
        referenceSeeder::class
        ]);  
    }
}
