<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sales>
 */
class SalesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'shop_id' => mt_rand(1,15),
            'buku_id' => mt_rand(1,15),
            'user_id' => mt_rand(1,15),
            'book_amount' => fake()->numberBetween(1,100)
            ];
    }
}
