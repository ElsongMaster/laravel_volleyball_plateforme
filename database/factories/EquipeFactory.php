<?php

namespace Database\Factories;

use App\Models\Equipe;
use App\Models\Continent;
use Illuminate\Database\Eloquent\Factories\Factory;

class EquipeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Equipe::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            
                "nom_club"=>$this->faker->word(),
                "ville"=>$this->faker->word(),
                "pays"=>$this->faker->word(),
                "max_joueurs"=>$this->faker->numberBetween(9,12),
                "continent_id"=>$this->faker->numberBetween(1,count(Continent::all())),
            
        ];
    }
}
