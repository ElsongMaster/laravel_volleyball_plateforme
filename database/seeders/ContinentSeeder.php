<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContinentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('continents')->insert([
            ["nom"=>"Afrique"],
            ["nom"=>"Europe"],
            ["nom"=>"Asie"],
            ["nom"=>"Oceanie"],
            ["nom"=>"Amérique"],
        ]);
    }
}
