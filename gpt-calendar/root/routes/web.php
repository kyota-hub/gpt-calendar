<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CalenderGptController;

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
    return view('top');
});

Route::get('/calender', [CalenderGptController::class, 'index'])->name('calenderGptIndex');
Route::post('/calender', [CalenderGptController::class, 'calender'])->name('calenderGptChat');
