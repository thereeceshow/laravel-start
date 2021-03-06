<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    use HasFactory;
    protected $table = 'authors';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
  
    protected $fillable = [
        'first_name',
        'last_name',
    ];
  
    public function book_authors()
    {
      return $this->hasMany(BookAuthor::class);
    }
}
