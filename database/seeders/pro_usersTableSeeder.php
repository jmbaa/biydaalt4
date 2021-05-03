<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProUsers;
use DB;
use Illuminate\Support\Facades\Hash;

class pro_usersTableSeeder extends Seeder{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('pro_users')->truncate();
        $faker = \Faker\Factory::create();
        for($i = 0; $i < 10; $i += 1){
            DB::table('pro_users')->insert([
                'owog'          =>$faker->name,
                'ner'           =>$faker->name,
                'huis'          =>$faker->randomElement(['male', 'female']),
                'torson_ognoo'  =>$faker->dateTimeBetween('-30 years', '-12 years'),
                'geriin_hayg'   =>$faker->randomElement(['SBD', 'BZD', 'BGD', 'ND', 'HUD']),
                'mail'          =>$faker->email,
                'utas'          =>$faker->phoneNumber,
                'rd'            =>$faker->randomNumber,
                'password'      =>Hash::make('123')
            ]);
        }
    }
}
