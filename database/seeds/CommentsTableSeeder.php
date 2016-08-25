<?php

use Illuminate\Database\Seeder;
use App\Models\Comment;
use Faker\Factory as Faker;

class CommentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker::create();
            for ($i=0; $i < 10; $i++) {
              $comment = Comment::create([
                'content'     => $faker-> text,
                'user_id'   	  => rand(1,10),
                'post_id'   	  => rand(1,20),
                'created_at' => $faker->dateTimeThisYear($max = 'now')
              ]);
            }
        }
    }
}
