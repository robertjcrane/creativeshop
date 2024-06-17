<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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

Route::get('/', [MainController::class, "home"]);
Route::get('/about', [MainController::class, "about"]);
Route::get('/stationery', [MainController::class, "stationery"]);
Route::get('/laser', [MainController::class, "laser"]);
Route::get('/framing', [MainController::class, "Framing"]);
Route::get('/arts-crafts', [MainController::class, "artscrafts"]);
Route::get('/contact', [MainController::class, "contact"]);
Route::get('/design', [MainController::class, "design"]);


// Might be needed to re-link storage when moved to live server
Route::get('/linkstorage', function() {Artisan::call('storage:link');});
