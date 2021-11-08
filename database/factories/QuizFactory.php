<?php

namespace Database\Factories;

use App\Models\Quiz;
use Illuminate\Database\Eloquent\Factories\Factory;

class QuizFactory extends Factory
{ 
    /**
     * Define the model's default state.
     *@var string
     */
     protected $model = Quiz::class;
     /* 
     * @return array
     */
    public function definition()
    {
        return [
            'title'=>$this->faker->sentence(rand(3,7)),
            'description'=>$this->faker->text(200)
        ];
    }
}
