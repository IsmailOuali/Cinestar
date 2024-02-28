<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmRoomController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [MemberController::class, "index"]);

Route::get("/movies/{film}", [MovieController::class, "show"])->name("movies.show");
Route::get("/available-schedules/{film}", [MovieController::class, "availableSchedules"])->name("available.schedules");

// Dashboard routes
Route::resource("/dashboard/categories", CategoryController::class);
Route::resource("/dashboard/films", FilmController::class);
Route::resource("/dashboard/rooms", RoomController::class);
Route::resource("/dashboard/rooms/zones", ZoneController::class);
Route::resource("/dashboard/schedules", FilmRoomController::class)->parameters([
    'schedules' => 'filmRoom',
]);;
