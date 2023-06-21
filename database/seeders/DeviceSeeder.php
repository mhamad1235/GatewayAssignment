<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Device;
use Faker\Factory as Faker;
class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 3000; $i++) {
            Device::create([
                'serial_number' => $faker->randomNumber(),
                'Mac_address' => $faker->randomNumber(),
                'status' => $faker->name(),
                'branch_id' => $faker->numberBetween(1, 15),
                'registered_date' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'sold_data' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'cartoon_number'=>$faker->randomNumber()
            ]);
        }
    }
}
