<?php

namespace Database\Seeders;

use App\Models\humanentity;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class humanentitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run():void
    {

        $humans = collect(
            [
            [
                'name' => 'abid',
                'surname' => 'ali',
                'email' => 'abid@gmail.com',
                'role' => 'engineer',
                'tel' => '03204014920',
                'note' => 'nothing'
            ],
            [
                'name' => 'hassan',
                'surname' => 'ali',
                'email' => 'hassan@gmail.com',
                'role' => 'engineer',
                'tel' => '03201234920',
                'note' => 'nothing'
            ],
            [
                'name' => 'ahmad',
                'surname' => 'ali',
                'email' => 'ahmad@gmail.com',
                'role' => 'engineer',
                'tel' => '03204014987',
                'note' => 'nothing'
            ]
            ]
            );
           
            $humans->each(function($human){
               
                humanentity::insert($human);
            });
        // humanentity::create({
           
        // });
    }
}
