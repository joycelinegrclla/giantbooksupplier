<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as Faker;

class BooksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for($i=1; $i<=100; $i++){
            Book::create([
                'cover' => $faker->imageUrl(80, 120, 'book'),
                'title' => $faker->sentence,
                'author' => $faker->name,
                'year' => $faker->year($max = 'now'),
                'synopsis' => $faker->paragraph,
                'publisher_id' => rand(1,8)
            ]);
        }
    }
}
