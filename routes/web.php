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

Route::group(['middleware' => 'web'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('home/beatles', [\App\Http\Controllers\HomeController::class, 'beatles'])->name('home.beatles');
    Route::get('home/bears', [\App\Http\Controllers\HomeController::class, 'bears'])->name('home.bears');
    Route::get('home/contact', [\App\Http\Controllers\HomeController::class, 'contact'])->name('home.contact');

    Route::resource('review', \App\Http\Controllers\ReviewController::class);
    Route::get('review', [App\Http\Controllers\ReviewController::class, 'index'])->name('review');
    Route::get('review/{review}/delete', [\App\Http\Controllers\ReviewController::class, 'destroy'])->name('review.delete');

    Route::resource('message', \App\Http\Controllers\MessageController::class);
    Route::get('message', [App\Http\Controllers\MessageController::class, 'index'])->name('message');
    Route::get('message/{message}/delete', [\App\Http\Controllers\MessageController::class, 'destroy'])->name('message.delete');
});


Route::group(['middleware' => ['auth']], function () {
    Route::resource('user', UserController::class);
    Route::get('user/{user}/delete', [UserController::class, 'destroy'])->name('user.delete');

    Route::resource('instructor', \App\Http\Controllers\InstructorController::class);
    Route::get('instructor', [App\Http\Controllers\InstructorController::class, 'index'])->name('instructor');
    Route::get('instructor/{instructor}/delete', [\App\Http\Controllers\InstructorController::class, 'destroy'])->name('instructor.delete');

});



