<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\FilmRoom;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function index (){
        return view ("member.index", [
            "films" => Film::with("image", "category")->get(),
            "top_film" => FilmRoom::whereDate("screening_date", ">=", Carbon::today())
        ]);
    }
}
