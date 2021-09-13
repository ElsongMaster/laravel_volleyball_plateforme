<?php

namespace Database\Factories;

use App\Models\Photo;
use App\Models\Joueur;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {   
        static $i=1;
        return [
            
               "url"=> $this->faker->imageUrl($width = 640, $height = 480),
               "joueur_id"=>$i++
            
        ];
    }
}
