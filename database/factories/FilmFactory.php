<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Film>
 */
class FilmFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = $this->faker;

        $words = $faker->words(7);
        $actors = implode(', ', $words);

        $categories = Category::pluck("id")->toArray();
        $rooms = Room::pluck("id")->toArray();
        return [
            "title" => $faker->sentence,
            "description" => $faker->text,
            "year" => $faker->year,
            "duration" => $faker->duration,
            "country" => $faker->country,
            "language" => $faker->country,
            "genre" => $faker->word,
            "actors" => $actors,
            "category_id" => $faker->randomElement($categories),
        ];
    }
}
