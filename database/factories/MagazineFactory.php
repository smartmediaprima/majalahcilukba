<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Magazine>
 */
class MagazineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cat_id'            => Category::factory(),
            'edisi'             => fake()->randomNumber(2, false),
            'cover_story'       => fake()->sentence(8),
            'editorial_note'    => fake()->text . "\n\n" . implode("\n\n", fake()->paragraphs(3,false)),
            'harga'             => '15000'
        ];
    }
}
