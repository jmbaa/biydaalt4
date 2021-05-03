<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;

class staffsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('staffs')->truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i += 1){
            DB::table('staffs')->insert([
                'ner'           =>$faker->name,
                'utas'          =>$faker->phoneNumber,
                'mail'          =>$faker->email,
                'rd'            =>$faker->randomNumber,
                'geriin_hayg'   =>$faker->randomElement(['SBD', 'BZD', 'BGD', 'ND', 'HUD']),
                'password'      =>Hash::make('123'),
                'salbar_id'     =>$faker->randomElement(['1', '2', '3', '4', '5']),
                'status'        =>'hudaldagch'
            ]);
        }
        DB::table('staffs')->insert([
            'ner'           =>'admin',
            'utas'          =>'99915302',
            'mail'          =>'admin@gmail.com',
            'rd'            =>'01312812',
            'geriin_hayg'   =>'BZD',
            'password'      =>Hash::make('123'),
            'salbar_id'     =>'0',
            'status'        =>'admin'
        ]);
    }
}
