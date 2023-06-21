<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BranchFactory extends Factory
{
    protected $model=Branches::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $faker->name,
        'profilelogo' => $faker->imageUrl(),
        'dateOfCreate' => $faker->date(),
        'remind_device' => $faker->randomNumber(),
        'sold_device' => $faker->randomNumber(),
        'warehouse_id' =>$faker->randomNumber(5)
        ];
    }
}
