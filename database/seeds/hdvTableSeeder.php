<?php

use Illuminate\Database\Seeder;
use App\HuongDanVien;

class hdvTableSeeder extends Seeder
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
        	HuongDanVien::create([
        		'tenhdv'=> $faker->name,
        		'phai'=> $faker->word,
        		'diachi'=> $faker->word,
        		'sdt'=> $faker->number_format(0122000000),
        		]);
        }
    }
}
