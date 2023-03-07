<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/my-work', [HomeController::class, 'myWork'])->name('my-work');
Route::get('/find-developer', [HomeController::class, 'findDeveloper'])->name('find-developer');
Route::get('/account', [HomeController::class, 'account'])->name('account');
