<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZoneVertesController;
use App\Http\Controllers\associationController;
use App\Http\Controllers\EvenementController;

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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('/', ZoneVertesController::class);
Route::resource('/association', associationController::class);
Route::resource('/zoneVertes', ZoneVertesController::class);
Route::resource('/evenement', EvenementController::class);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
