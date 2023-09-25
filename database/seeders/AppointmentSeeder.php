<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class AppointmentSeeder extends Seeder
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
            $adate = $faker->date($format = 'Y-m-d',$max = '+5 years',$min='now');
            $atime = $faker->time($format = 'H:i:s', $min = 'now');
            $endTime = date('H:i:s', strtotime($atime . '+30 minutes'));
            DB::table('appointments')->insert([
                'user_id' => $faker->numberBetween($min = 1, $max = 101),
                'doctor_id' => $faker->numberBetween($min = 1, $max = 100),
                'adate' => $adate,
                'atime' => $atime,
                'end_time' => $endTime,
                'created_at' => date("Y-m-d H:i:s"),
                'updated_at' => date("Y-m-d H:i:s"),
            ]);
        }
    }
}
