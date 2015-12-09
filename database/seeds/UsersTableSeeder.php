<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();

      DB::table('users')->insert([
           'created_at' => Carbon\Carbon::now()->toDateTimeString(),
           'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
           'email' =>'jill@harvard.edu',
           'password' => \Hash::make('helloworld'),
           'name' => 'Jill',
       ]);

       DB::table('users')->insert([
          'created_at' => Carbon\Carbon::now()->toDateTimeString(),
          'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
          'email' => 'jamal@harvard.edu',
          'password' => \Hash::make('helloworld'),
          'name' => 'Jamal',
      ]);

      DB::table('users')->insert([
         'created_at' => Carbon\Carbon::now()->toDateTimeString(),
         'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
         'email' => $faker->email,
         'password' => $faker->password,
         'name' => 'LaLa Mills',
     ]);

     DB::table('users')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'email' => $faker->email,
        'password' => $faker->password,
        'name' => 'Mike Smith',
    ]);

    DB::table('users')->insert([
       'created_at' => Carbon\Carbon::now()->toDateTimeString(),
       'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
       'email' => $faker->email,
       'password' => $faker->password,
       'name' => 'Dolly Parton',
   ]);
    }
}
