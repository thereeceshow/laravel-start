<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;
    protected $table = 'ta';
    protected $primaryKey = 'id';
    public $incrementing = true;
    public $timestamps = true;
}
