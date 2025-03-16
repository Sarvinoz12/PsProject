<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'price' => $this->faker->numberBetween(1000, 10000),
            'continuity'=>$this->faker->randomNumber(1,8),
            'user_id' => User::where('role_id', 2)->inRandomOrder()->first()?->id,
        ];
    }
}
