<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/instructor', function () {
    return view('instructor.index');
});


Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');

    Route::resource('instructor', \App\Http\Controllers\InstructorController::class);
    Route::get('instructor', [App\Http\Controllers\InstructorController::class, 'index'])->name('instructor');
    Route::get('instructor/{instructor}/delete', [\App\Http\Controllers\InstructorController::class, 'destroy'])->name('instructor.delete');

    Route::resource('review', \App\Http\Controllers\ReviewController::class);
    Route::get('review', [App\Http\Controllers\ReviewController::class, 'index'])->name('review');
    Route::get('review/{review}/delete', [\App\Http\Controllers\ReviewController::class, 'destroy'])->name('review.delete');

});



