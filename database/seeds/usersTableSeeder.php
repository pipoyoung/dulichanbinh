<?php

use Illuminate\Database\Seeder;
use App\User;
class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pass= Hash::make(12345);
        $faker= \Faker\Factory::create();
        for ($i=0; $i < 20; $i++)
        {
        	User::create([
        		'tenkh'=> $faker->name,
        		'diachi'=> $faker->word,
        		'sdt'=> $faker->numberBetween(1000, 2000),
        		'quyen'=> $faker->numberBetween(1, 2),
        		'email'=> $faker->unique->email,
        		'password'=> $pass,
        		]);
        }
    }
}
