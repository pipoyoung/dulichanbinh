<?php

use Illuminate\Database\Seeder;
use App\DiemThamQuan;
class diemthamquanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= \Faker\Factory::create();
        for ( $i=0; $i < 20; $i++)
        {
        	DiemThamQuan::create([
        		'tendiem'=> $faker->word,
        		'diachi'=> $faker->word,
        		]);
        }
    }
}
