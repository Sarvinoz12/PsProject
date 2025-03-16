<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Psixolog>
 */
class PsixologFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::inRandomOrder()->first()->id ?? User::factory()->create()->id,
            'image' => $this->faker->imageUrl(),
            'Tajriba'=>$this->faker->randomNumber(1,10),
            'spes'=>$this->faker->randomElement(['Bolalar','Kattalar']),
        ];
    }
}
