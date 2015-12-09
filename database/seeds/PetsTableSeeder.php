<?php
use Illuminate\Database\Seeder;
class PetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
  {
      $faker = Faker\Factory::create();
      $user_id = \App\User::where('name','=','LaLa Mills')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => Carbon\Carbon::now()->toDateTimeString(),
        'petName' => 'Doodle Dog',
        'breed' => 'Poodle',
        'photo' => 'http://www.pets4you.com/pages/kalchan/images/kalchan7-18-07.jpg',
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Mike Smith')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Dr. Dog',
        'breed' => 'Rottweiler',
        'photo' => 'https://s-media-cache-ak0.pinimg.com/736x/08/b2/1c/08b21cde293fd2a2dd7e9303e887681f.jpg',
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Dolly Parton')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Jazmine',
        'breed' => 'Beagle',
        'photo' => 'http://cdn3-www.dogtime.com/assets/uploads/2011/01/file_23012_beagle.jpg',
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Jamal')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Buddy',
        'breed' => 'Boxer',
        'photo' => 'http://www.dogbreedinfo.com/images23/BoxerMahoganyRedFawnColoredPurebredMidasPuppy.JPG',
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Jill')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Suzie',
        'breed' => 'Golden',
        'photo' => 'https://s.graphiq.com/sites/default/files/465/media/images/t2/Golden_Retriever_4924871.jpg',
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);

      $user_id = \App\User::where('name','=','Jamal')->pluck('id');
      DB::table('pets')->insert([
        'created_at' => Carbon\Carbon::now()->toDateTimeString(),
        'updated_at' => $faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now'),
        'petName' => 'Cuddles',
        'breed' => 'Beagle',
        'photo' => 'http://cdn3-www.dogtime.com/assets/uploads/2011/01/file_23012_beagle.jpg',
        'user_id' => $user_id,
        'status' => $faker->boolean($chanceOfGettingTrue = 50),
      ]);
    }
}
