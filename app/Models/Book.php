<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;
    protected $table = 'books';
    protected $primaryKey = 'id';
    protected $with =['book_authors'];
    public $incrementing = true;
    public $timestamps = true;
  
    public function book_authors()
    {
      return $this->hasMany(BookAuthor::class);
    }
  
//     public function checkouts()
//     {
//       return $this->hasMany('App\Models\Checkout', 'ref_books_id');
//     }
}
