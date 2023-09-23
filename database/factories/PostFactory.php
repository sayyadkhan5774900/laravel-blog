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
            'title' => $this->faker->sentence,
            'slug' => $this->faker->slug,
            'meta_title' => $this->faker->words(3, true),
            'meta_description' => $this->faker->sentence,
            'summary' => $this->faker->paragraph,
            'body' => $this->faker->paragraphs(3, true),
            'thumbnail' => $this->faker->imageUrl(640, 480), // Generates a fake image URL with dimensions 640x480
            'active' => $this->faker->boolean,
            'published_at' => $this->faker->dateTime,
            'user_id' => \App\Models\User::factory(), // This assumes you have a UserFactory for the User model.
        ];
    }
}
