<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DoctorSeeder extends Seeder
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
            $start = $faker->time();
            $end = $faker->dateTimeBetween($start, $start.' +7 hours');
            DB::table('doctors')->insert([
                'firstname' => $faker->firstName($gender),
                'lastname' => $faker->lastName,
                'email' => $faker->email,
                'phone_no' => $faker->phoneNumber,
                'gender' => $gender,
                'shift' => $faker->randomElement(['Morning','Evening']),
                'department' => $faker->randomElement(['Cardiology','Neurology','Hepatology','Pediatrics']),
                'start_time' => $start,
                'end_time' => $end,
                'address' => $faker->address,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
