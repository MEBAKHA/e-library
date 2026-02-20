<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Categories;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = fake()->words(3, true);
        return [
            'name' => $name,
            'slug' => str()->slug($name),
            'body' => fake()->paragraphs(3, true),
            'published_at' => fake()->dateTimeBetween('-100 years', 'now'),
            'category_id' => Categories::inRandomOrder()->first()->id,
            'author_id' => Author::inRandomOrder()->first()->id
        ];
    }
}
