<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    /** @use HasFactory<\Database\Factories\MovieFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'release_year',
        'duration',
        'rating',
        'poster_url',
        'genre_id'
    ];

    protected $casts = [
        'release_year' => 'integer',
        'duration' => 'string',
        'rating' => 'float',
    ];

    public function genre() {
        return $this->belongsTo(Genre::class);
    }

    public function movieCasts() {
        return $this->belongsToMany(Cast::class, 'cast_movie')->withTimestamps();
    }
}
