<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            ContinentSeeder::class,
            EquipeSeeder::class,
            JoueurSeeder::class
        ]);
        \App\Models\Equipe::factory(4)->create();
         \App\Models\Joueur::factory(40)->create();
        \App\Models\Photo::factory(40)->create();
    }
}
