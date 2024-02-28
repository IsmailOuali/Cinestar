<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Booking;
use App\Models\Category;
use App\Models\Film;
use App\Models\FilmRoom;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Room::factory(10)->create();
        Category::factory(10)->create();
        Film::factory(10)->create();
        User::factory(10)->create();

        FilmRoom::factory()->create([
            'film_id' => 8,
            'room_id' => 1,
            'screening_date' => '2024-02-27 12:23:09'
        ]);
        FilmRoom::factory()->create([
            'film_id' => 2,
            'room_id' => 4,
            'screening_date' => '2024-02-27 12:23:09'
        ]);
        FilmRoom::factory()->create([
            'film_id' => 9,
            'room_id' => 10,
            'screening_date' => '2024-02-27 12:23:09'
        ]);
        FilmRoom::factory()->create([
            'film_id' => 2,
            'room_id' => 3,
            'screening_date' => '2024-02-27 12:23:09'
        ]);

//        Booking::create([
//            "schedule_id" => 1,
//            "member_id" => 3,
//            "seat_number" => 2
//        ]);
//        Booking::create([
//            "schedule_id" => 5,
//            "member_id" => 2,
//            "seat_number" => 6
//        ]);


    }
}
