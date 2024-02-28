<?php

namespace App\Http\Controllers;

use App\Models\Film;
use App\Models\FilmRoom;
use App\Models\Room;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view("admin.dashboard", [
            "users" => User::paginate(10),
            "filmsCout" => Film::count(),
            "roomsCount" => Room::count(),
            "schedulesCount" => FilmRoom::count(),
        ]);
    }
}
