<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'nickname' => fake()->word().'_'.fake()->word(),
            'grade_number' => fake()->numberBetween(1, 12),
            'phone' => fake()->phoneNumber(),
            'sosmed' => fake()->word().'123',
            'email' => fake()->unique()->safeEmail(),
            'password' => bcrypt(fake()->password()),
            'gender' => fake()->randomElement(['Male', 'Female', 'Other']),
            'birthdate' => fake()->date(),
            'nationality' => fake()->country(),
            'address' => fake()->address(),
            'city' => fake()->city(),
            'province' => fake()->state(),
            'country' => fake()->country(),
            'postcode' => fake()->postcode(),
            'photo' => fake()->text(10).'jpg',
            'note' => fake()->paragraph(),
        ];
    }
}
