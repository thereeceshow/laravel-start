<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BookAuthor;
use App\Models\Book;
use App\Models\Author;

class BookAuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 180; $i++) {
          
        $author = Author::factory()->create();
        $book = Book::factory()->create();
        
        BookAuthor::factory()
          ->count(1)
          ->for($author)
          ->for($book)          
          ->create();
        }
    }
}