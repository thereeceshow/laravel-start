<?php

namespace Database\Factories;

use App\Models\book;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = book::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'title' => $this->faker->realText,
          'excerpt' => $this->faker->paragraph,
          'ISBN' =>  $this->faker->isbn13,
          'pages' => $this->faker->numberBetween($min = 8, $max = 1200),
          
            //
        ];
    }
}
