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
            $post = new Post();
            $post->user_id = rand(1, 101);
            $post->category_id = rand(1, 15);
            $post->city_id = rand(1, 50);
            $post->address_from_to = $faker->address
            $post->rating = rand(1, 100 );
            $post->title = $title;
            $post->content = $faker->text($maxNbChars);
            $post->cost = rand(5000, 200000);
            $post->date = $faker->date('d-m-Y');
            $post->save();
        }
    }
}
