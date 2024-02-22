<?php

use App\Http\Controllers\FilmController;
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

Route::get('/', function () {
    return "jljljl";
});

Route::get("/dashboard/films", [FilmController::class, "index"])->name("admin-films");
Route::post("/dashboard/films", [FilmController::class, "store"])->name("film-store");
Route::put("/dashboard/films/{film:title}", [FilmController::class, "update"])->name("film-update");
Route::delete("/dashboard/films/{film:title}", [FilmController::class, "destroy"])->name("film-delete");
