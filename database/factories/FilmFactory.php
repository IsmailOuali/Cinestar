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
        $categories = Category::pluck("id")->toArray();
        $rooms = Room::pluck("id")->toArray();
        return [
            "title" => $faker->sentence,
            "description" => $faker->text,
            "release_date" => $faker->date,
            "duration" => $faker->duration,
            "screening_date" => $faker->date,
            "category_id" => $faker->randomElement($categories),
            "room_id" => $faker->randomElement($rooms),
        ];
    }
}
