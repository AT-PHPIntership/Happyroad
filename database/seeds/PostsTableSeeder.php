<?php

use Illuminate\Database\Seeder;
use App\Models\Post;
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();

        for ($i=0; $i < 100; $i++) {
            $reviewedAt = $faker->dateTimeBetween('-2 years', 'now');
            $nbWords = rand(5, 10);
            $maxNbChars = rand(200, 1500);
            $title = $faker->words($nbWords, $asText = true);
            Post::create([
              'user_id' => rand(1, 101),
              'category_id' => rand(1, 15),
              'city_id' => rand(1, 50),
              'address_from_to' => $faker->address,
              'rating' => rand(1,100),
              'title' => $title,
              'content' => $faker ->text($maxNbChars),
              'cost' => rand(5000, 200000),
              'time' =>  $faker->date('d-m-Y'),
            ]);
        }
    }
}
