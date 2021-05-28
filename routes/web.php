<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// routes vers las pages statiques
Route::get('/', [PagesController::class, 'home'])->name('home_path');
Route::get('/about', [PagesController::class, 'about'])->name('about_path');
