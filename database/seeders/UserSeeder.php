<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        foreach (range(1,10) as $index) {
            $gender = $faker->randomElement(['male', 'female']);
            $dob = $faker->date($format = 'Y-m-d', $max = 'now');
            $age = (int)date("Y") - (int)date('Y',strtotime($dob));
            DB::table('users')->insert([
                'firstname' => $faker->firstName($gender),
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'phone_no' => $faker->phoneNumber,
                'country' => $faker->country,
                'gender' => $gender,
                'dob' => $dob,
                'age' => $age,
                'address' => $faker->address,
                'password' => Hash::make('123456789'),
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
