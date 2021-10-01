<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RakutenApiController;
use App\Http\Controllers\UserController;

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


Route::prefix('/rms')->group(function () {
    Route::get('/', [RakutenApiController::class, 'index'])->name('rms.index');
});

// Route::resource('/rms', RakutenApiController::class);

Route::middleware(['auth'])->group(function () {
    Route::resource('users', UserController::class, ['except' => ['create', 'store']]);
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
