<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Airplane;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'flight_number'=>fake()->unique()->numberBetween(1000,10000),
            'from'=>fake()->address(),
            'to'=>fake()->address(),
            'departure_date'=>fake()->date(),
            'departure_time'=>fake()->time(),
            'arrival_date'=>fake()->date(),
            'arrival_time'=>fake()->time(),
            'airplane_id'=>Airplane::all()->random()->registration_number,
        ];
    }
}
