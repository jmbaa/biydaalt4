<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class salbarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('salbars')->truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 5; $i++){
            DB::table('salbars')->insert([
                'ner'           =>$faker->name,
                'bairshil'      =>$faker->randomElement(['SBD', 'BZD', 'BGD', 'ND', 'HUD'])
            ]);
        }
    }
}
