<?php

namespace Database\Factories;
use App\Models\Manhwa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=> fake()->word(80),
            'description'=> fake()->word(90),
            'type'=> fake()->word(50)
        ];
    }
}
