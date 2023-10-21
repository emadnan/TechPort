<?php

namespace Database\Seeders;
use App\Models\project;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    { 
      
        
            project::insert(
            [
                'code' => '23044',
                'name' => 'Development and Optimization of a Bimodal Ion-Chemical Thruster System Using Novel Ionic Liquid Monopropellants',
                'description' =>'Considerable design work has been devoted to the development of cryogenic liquid
                storage containers. Containers which hold cryogenic liquids such as liquid nitrogen,
                oxygen, hydrogen, etc. often are double walled vacuum insulated or super insulation
                flasks, bottles or tanks. Vessels so designed for space applications have the lowest
                cryogen evaporation rates of any available, but research is ongoing to render these
                containers less permeable to heat flux. We propose a different approach to
                increasing the cryogenic liquid hold time. We propose increasing the heat needed to
                drive off the cryogenic liquid by fundamentally changing the heat needed to cause
                evaporation of the cryogenic liquid. Our unique approach should not be confused with
                technology developed to support cryogens during shipping or other mechanical
                gyrations, exploits the unique physics and chemistry of nanomaterials and their
                interaction with the cryogenic liquid. Successful development of the proposed
                technology will result in longer hold times, decreased payload mass, lower volume,
                increased safety and decreased energy utilization.',
                'benifit' => ' Considerable design work has been devoted to the development of cryogenic liquid
                storage containers. Containers which hold cryogenic liquids such as liquid nitrogen,
                oxygen, hydrogen, etc. often are double walled vacuum insulated or super insulation
                flasks, bottles or tanks.',
                'image' => 'planet.png',
                'id_doc' => '',
                'startdate' => '24 Jan 2023',
                'enddate' => '31 Mar  2025',
                'projecttarget' => 'Earth'
            ]);
          
    }
}
