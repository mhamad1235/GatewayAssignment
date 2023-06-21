<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Branches;
use Faker\Factory as Faker;
class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();

        for ($i = 0; $i < 300; $i++) {
            Branches::create([
                'name' => $faker->name(),
                'profilelogo' => $faker->name(),
                'dateOfCreate' => $faker->dateTimeBetween('-1 year', 'now')->format('Y-m-d'),
                'remind_device' => $faker->numberBetween(1, 200),
                'sold_device' => $faker->randomNumber(),
                'warehouse_id' => $faker->numberBetween(1, 15),

            ]);
        }
    }
}
