<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Movie;

class Cast extends Model
{
    /** @use HasFactory<\Database\Factories\CastFactory> */
    use HasFactory;

    protected $fillable = [
        'name',
        'photo_url',
        'birthdate'
    ];

    public function movies() {
        return $this->belongsToMany(Movie::class, 'cast_movie')->withTimestamps();
    }
}
