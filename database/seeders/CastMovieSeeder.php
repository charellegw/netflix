<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use App\Models\Cast;

class CastMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $movies = Movie::all();
        $casts = Cast::all();

        foreach($movies as $movie) {
            $movie->movieCasts()->attach(
                $casts->random(rand(2,5))->pluck('id')->toArray()
            );
        }
    }
}
