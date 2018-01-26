<?php

use Illuminate\Database\Seeder;
use App\Tours;

class toursTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= \Faker\Factory::create();
        for ($i=0; $i < 20; $i++)
        {
        	Tours::create([
        		'tentour'=> $faker->name,
        		'gia'=> $faker->numberBetween(1000, 2000),
        		'ngaybatdau'=> $faker->date($max='now'),
        		'ngayketthuc'=> $faker->date($max='now'),
        		]);
        }
    }
}
