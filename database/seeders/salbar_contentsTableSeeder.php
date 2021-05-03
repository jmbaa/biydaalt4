<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class salbar_contentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salbar_contents')->truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 100; $i += 1){
            DB::table('salbar_contents')->insert([
                'salbar_id'          =>$faker->randomElement(['Liz', 'Zul', 'Til', 'Cat', 'Doy']),
                'content_id'           =>$faker->randomElement(['1', '2', '3', '4', '5', '6', '7', '8', '9' , '10'])
            ]);
        }
    }
}
