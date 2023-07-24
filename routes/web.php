<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\bookYoursController;
use App\Http\Controllers\DealsController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ReservationController;
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

Route::get('/', [IndexController::class, 'index']);

Route::get('/about', [AboutController::class, 'about'])->name('about');

Route::get('/deals', [DealsController::class, 'deals'])->name('deals');

Route::get('/reservation', [ReservationController::class, 'reservation'])->name('reservation');
Route::post('/store-reservation', [ReservationController::class, 'addDataToTable'])->name('store.reservation');

Route::get('/bookYours', [bookYoursController::class, 'bookYours']);
