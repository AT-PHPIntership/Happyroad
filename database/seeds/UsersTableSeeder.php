<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

          $user = new User();
          $user->name = 'Admin';
          $user->email = 'buithithan.cntt@gmail.com';
          $user->password = bcrypt('12345678');
          $user->birthday = '03/10/1994';
          $user->gender = 0;
          $user->phone_number = '0123456789';
          $user->city_id = 1;
          $user->save();

          for ($i=0; $i < 100; $i++) {
              $user = User::create([
                  'name' => $faker->firstName . ' ' . $faker->lastName,
                  'email' => $faker->freeEmail,
                  'password' => bcrypt('12345678'),
                  'birthday' => $faker->dateTimeBetween('-40 years', '-18 years')->format('d/m/Y'),
                  'gender' => rand(0,1),
                  'phone_number' => $faker->phoneNumber,
                  'city_id' => rand(1, 50),
                  'remember_token' => str_random(60),
                  'created_at' => $faker->dateTimeThisYear($max = 'now')
              ]);
          }
    }
}
