<?php

use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Route;

Route::get("/dashboard/films", [FilmController::class, "index"])->name("admin-films");
Route::post("/dashboard/films", [FilmController::class, "store"])->name("film-store");
Route::put("/dashboard/films/{film}", [FilmController::class, "update"])->name("film-update");
Route::delete("/dashboard/films/{film}", [FilmController::class, "destroy"])->name("film-delete");
