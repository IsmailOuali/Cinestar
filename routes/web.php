<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\FilmController;
use App\Models\Category;
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
    return "still in the backlog";
});
Route::get("/dashboard/categories", [CategoryController::class, "index"])->name("admin-categories");
Route::post("/dashboard/categories", [CategoryController::class, "store"])->name("category-store");
Route::put("/dashboard/categories/{category}", [CategoryController::class, "update"])->name("category-update");
Route::delete("/dashboard/categories/{category}", [CategoryController::class, "destroy"])->name("category-delete");



require_once __DIR__ . "/admin.php";
