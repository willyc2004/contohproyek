<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Extracurricular>
 */
class ExtracurricularFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->fake()->name,
            'nickname' => $this->fake()->word,
            'grade_number' => $this->fake()->numberBetween(1, 12),
            'phone' => $this->fake()->phoneNumber,
            'sosmed' => $this->fake()->word,
            'email' => $this->fake()->unique()->safeEmail,
            'password' => bcrypt(fake()->password),
            'gender' => $this->fake()->randomElement(['Male', 'Female', 'Other']),
            'birthdate' => $this->fake()->date,
            'nationality' => $this->fake()->country,
            'address' => $this->fake()->address,
            'city' => $this->fake()->city,
            'province' => $this->fake()->state,
            'country' => $this->fake()->country,
            'postcode' => $this->fake()->postcode,
            'photo' => fake()->text(10).'.jpg',
            'note' => $this->fake()->paragraph,
        ];
    }
}
