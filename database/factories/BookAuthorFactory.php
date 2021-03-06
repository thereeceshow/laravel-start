<?php

namespace Database\Factories;

use App\Models\BookAuthor;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Author;

class BookAuthorFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = BookAuthor::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
          'book_id' => Book::all()->random()->id,
          'author_id' => Author::all()->random()->id,
            
        ];
    }
}
