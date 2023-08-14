<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'age'=>fake()->numberBetween(10,70),
            'mobile'=>fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'address'=>fake()->address(),
            'mark1'=>fake()->numberBetween(10,100),
            'mark2'=>fake()->numberBetween(10,100),
            'mark3'=>fake()->numberBetween(10,100),
            'mark4'=>fake()->numberBetween(10,100),
            'mark5'=>fake()->numberBetween(10,100),
            'mark6'=>fake()->numberBetween(10,100),
            'total'=>fake()->numberBetween(300,600),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
