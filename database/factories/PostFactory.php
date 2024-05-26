<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->name(),
            'event_datetime' => $this->faker->dateTime(),
            'venue' => $this->faker->streetAddress(),
            'event_url' => $this->faker->url(),
            'content' => $this->faker->sentence(),
            'delete_flg' => 0,
        ];
    }
}
