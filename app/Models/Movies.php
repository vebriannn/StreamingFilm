<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movies extends Model
{
    protected $fillable = [
        'title',
        'trailer',
        'movie',
        'casts',
        'categories',
        'small_thumbnail',
        'large_thumbnail',
        // 'release_date',
        'about',
        'duration'
    ];
}
