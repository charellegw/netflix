<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use App\Models\Genre;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = [
            'Action',
            'Romance',
            'Sci-Fi',
            'Comedy',
            'Horror'
        ];

        foreach($genres as $genre) {
            Genre::create(
                ['name' => $genre],
            );
        }
    }
}
