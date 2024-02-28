<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\FilmRoom;
use Carbon\Carbon;

class MovieController extends Controller
{
    public function show(Film $film)
    {
        $isAvailable = FilmRoom::where("film_id", $film->id)->whereDate("screening_date", ">=", Carbon::today())->get();

        return view("member.movie-details", [
            "film" => $film->load("category", "image"),
            "availableSchedules" => $isAvailable,
        ]);
    }
    public function availableSchedules(Film $film){
        $availableSchedules = FilmRoom::where("film_id", $film->id)->whereDate("screening_date", ">=", Carbon::today())->get();

        return view("member.schedules-details", [
            "availableSchedules" => $availableSchedules,
            "film" => $film,
        ]);
    }
}
