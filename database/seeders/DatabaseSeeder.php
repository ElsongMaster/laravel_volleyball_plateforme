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
            ContinentSeeder::class
        ]);
        \App\Models\Equipe::factory(4)->create();
         \App\Models\Joueur::factory(30)->create();
        \App\Models\Photo::factory(30)->create();
    }
}
