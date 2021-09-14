<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use App\Models\Role;

class JoueurSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        DB::table('joueurs')->insert([
            [
                "nom"=>$faker->lastName(),
                "prenom"=>$faker->firstName(),
                "age"=>$faker->numberBetween(1,35),
                "tel"=>$faker->phoneNumber(),
                "email"=>$faker->email(),
                "genre"=>$faker->randomElement($array = array ("M","F")),
                "pays_origine"=>$faker->country(),
                "role_id"=>$faker->numberBetween(1,count(Role::all())),
                "equipe_id"=>NULL
            ],
            [
                "nom"=>$faker->lastName(),
                "prenom"=>$faker->firstName(),
                "age"=>$faker->numberBetween(1,35),
                "tel"=>$faker->phoneNumber(),
                "email"=>$faker->email(),
                "genre"=>$faker->randomElement($array = array ("M","F")),
                "pays_origine"=>$faker->country(),
                "role_id"=>$faker->numberBetween(1,count(Role::all())),
                "equipe_id"=>NULL
            ],
            [
                "nom"=>$faker->lastName(),
                "prenom"=>$faker->firstName(),
                "age"=>$faker->numberBetween(1,35),
                "tel"=>$faker->phoneNumber(),
                "email"=>$faker->email(),
                "genre"=>$faker->randomElement($array = array ("M","F")),
                "pays_origine"=>$faker->country(),
                "role_id"=>$faker->numberBetween(1,count(Role::all())),
                "equipe_id"=>NULL
            ],
            [
                "nom"=>$faker->lastName(),
                "prenom"=>$faker->firstName(),
                "age"=>$faker->numberBetween(1,35),
                "tel"=>$faker->phoneNumber(),
                "email"=>$faker->email(),
                "genre"=>$faker->randomElement($array = array ("M","F")),
                "pays_origine"=>$faker->country(),
                "role_id"=>$faker->numberBetween(1,count(Role::all())),
                "equipe_id"=>NULL
            ],
            [
                "nom"=>$faker->lastName(),
                "prenom"=>$faker->firstName(),
                "age"=>$faker->numberBetween(1,35),
                "tel"=>$faker->phoneNumber(),
                "email"=>$faker->email(),
                "genre"=>$faker->randomElement($array = array ("M","F")),
                "pays_origine"=>$faker->country(),
                "role_id"=>$faker->numberBetween(1,count(Role::all())),
                "equipe_id"=>NULL
            ]
        ]);
    }
}
