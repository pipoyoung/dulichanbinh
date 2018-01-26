<?php

use Illuminate\Database\Seeder;
use App\PhuongTien;
class phuongtienTableSeeder extends Seeder
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
        	PhuongTien::create([
        		'tenpt'=> $faker->name,
        		'loaipt'=> $faker->word,
        		'socho'=> $faker->numberBetween(0, 1000),
        		'hientrang'=> $faker->word,
        		]);
        }
    }
}
