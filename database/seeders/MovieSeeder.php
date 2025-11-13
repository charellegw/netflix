<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Cast;
use App\Models\Movie;
use App\Models\Genre;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        $genres = Genre::all();
        $casts = Cast::all();

        for($i = 0; $i<10; $i++) {
            $movie = Movie::create(
                [
                    'title' => ucfirst($faker->words(3, true)),
                    'description' => $faker->realText(100),
                    'release_year' => $faker->year(),
                    'duration' => $faker->time('H:i:s', '03:00:00'),
                    'rating' => $faker->randomFloat(1, 1, 5),
                    'poster_url' => 'https://picsum.photos/id/' . $faker->numberBetween(100, 200) . '/200/300',
                    'genre_id' => $genres->random()->id,
                ],
            );
            $movie->movieCasts()->attach(
                $casts->random(rand(2,5))->pluck('id')->toArray()
            );
        }

    }
}
