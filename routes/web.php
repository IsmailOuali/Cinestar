<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmRoomController;

use App\Http\Controllers\MovieController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;

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



Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);

Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
