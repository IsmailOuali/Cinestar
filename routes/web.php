<?php

use App\Http\Controllers\Auth\ProviderController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\FilmRoomController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\ZoneController;
use Illuminate\Support\Facades\Route;

Route::middleware(["auth"])->group(function () {
    Route::get('/', [MemberController::class, "index"]);
    Route::get("/movies/{film}", [MovieController::class, "show"])->name("movies.show");
    Route::get("/booking/create/{id}", [BookingController::class, "create"])->name("booking.create");
});

Route::middleware(["auth"])->group(function () {
    Route::get('/dashboard', [DashboardController::class, "index"])->name('dashboard');
    Route::resource("/dashboard/categories", CategoryController::class);
    Route::resource("/dashboard/films", FilmController::class);
    Route::resource("/dashboard/rooms", RoomController::class);
    Route::resource("/dashboard/rooms/zones", ZoneController::class);
    Route::resource("/dashboard/schedules", FilmRoomController::class)->parameters([
        'schedules' => 'filmRoom',
    ]);;
});

Route::get('/auth/{provider}/redirect', [ProviderController::class, 'redirect']);
Route::get('/auth/{provider}/callback', [ProviderController::class, 'callback']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

