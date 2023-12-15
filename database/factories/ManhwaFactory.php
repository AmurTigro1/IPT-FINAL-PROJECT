<?php

namespace Database\Factories;
use App\Models\Manhwa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Manhwa>
 */
class ManhwaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=> fake()->word(80),
            'synopsis'=> fake()->word(90),
            'genre'=> fake()->word(50)
        ];

    }
}
