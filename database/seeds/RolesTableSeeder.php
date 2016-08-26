<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Role;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
         Role::create([
              'name' => 'Admin',
              'created_at' => $faker->dateTimeThisYear('now')
          ]);
          Role::create([
              'name' => 'Guess',
              'created_at' => $faker->dateTimeThisYear('now')
          ]);
          Role::create([
              'name' => 'Host',
              'created_at' => $faker->dateTimeThisYear('now')
          ]);
          Role::create([
              'name' => 'Customer',
              'created_at' => $faker->dateTimeThisYear('now')
          ]);
    }
}
