<?php

namespace Database\Seeders;

use App\Models\techniche;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class technicheSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        techniche::insert(
            [
                'techniche'=>'TX01.1.2 Earth Storable',
                'technichedescription'=>'For launch vehicles: Thrust vector control (TVC), main propulsion systems, reaction control systems (RCS), roll control systems (RoCS), separation motors, ullage settling motors, abort propulsion systems, propellant storage and transfer, nanocomposites, green propellants. For in-space propulsion: CubeSat propulsion, propellant management devices (PMDs).',
            ]
            );
    }
}
