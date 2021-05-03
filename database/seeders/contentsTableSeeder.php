<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class contentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i += 1){
            DB::table('contents')->insert([
                'ner'             =>$faker->name,
                'author'          =>$faker->name,
                'producer'        =>$faker->name,
                'genre'           =>$faker->randomElement(['Action', 'Drama', 'Anime', 'Comedy', 'Horror', 'Kdrama', 'Serial', 'Adults']),
                'dur_time'        =>$faker->date('H:i:s', rand(54000,540000)),
                'numberOfRented'  =>$faker->randomNumber,
                'contentType'     =>$faker->randomElement(['DVD', 'BD', 'CD']),
                'trailerLink'     => 'https://www.youtube.com/watch?v=4cYUuHgBFnc'
            ]);
        }
    }
}
