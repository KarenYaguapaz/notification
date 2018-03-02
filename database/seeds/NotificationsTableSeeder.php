<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
		foreach (range(1,10) as $index){
		           DB::table('notifications')->insert([
		           'title'=> $faker->sentence,
		           'description'=> $faker->paragraph,
		       ]);
		   }
		}
	}