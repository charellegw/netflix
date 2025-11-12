<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Cast;

class CastSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for($i=0; $i<10;$i++) {
            $cast = Cast::create([
                'name' => $faker->name,
                'birthdate'=> $faker->date('Y-m-d', '2000-01-01'),
                'photo_url' => $faker->imageUrl(400, 400, 'people'),
            ]);
        }
    }
}
