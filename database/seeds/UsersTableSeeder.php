<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
     //$factory->define(App\Propiedad::class, function ($faker) {

       $faker = Faker::create();

       foreach (range(1,10) as $index){
       //for ($i=0; $i<10;$i++){
           DB::table('users')->insert([
           'name'=> $faker->name,
           'birth'=> $faker->year,
           'phone'=> $faker->name,
           'jobtitle'=> $faker->word,
           'email' => $faker->email,
           'password' => bcrypt('secret'),
       ]);
   }
    }
}
