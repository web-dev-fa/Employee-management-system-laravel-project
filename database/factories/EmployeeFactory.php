<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            return [
                'registration_number' => fake()->randomDigit(),
                'fullname' => fake()->name(),
                'deparetement' => fake()->word(),
                'hire_date' => fake()->date(),
                'phone' => fake()->numberBetween(),
                'address' => fake()->address(),
                'city' => fake()->city(),
            ];
    }
}
