<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Continent;
use Faker\Factory as Faker;
class EquipeSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('equipes')->insert([
            [

                "nom_club"=>$faker->word(),
                    "ville"=>$faker->word(),
                    "pays"=>$faker->word(),
                    "max_joueurs"=>"90",
                    "continent_id"=>$faker->numberBetween(1,count(Continent::all())),
            ],
            [

                "nom_club"=>$faker->word(),
                    "ville"=>$faker->word(),
                    "pays"=>$faker->word(),
                    "max_joueurs"=>"80",
                    "continent_id"=>$faker->numberBetween(1,count(Continent::all())),
            ],
            [

                "nom_club"=>$faker->word(),
                    "ville"=>$faker->word(),
                    "pays"=>$faker->word(),
                    "max_joueurs"=>"11",
                    "continent_id"=>$faker->numberBetween(1,count(Continent::all())),
            ]
        ]);
    }
}
