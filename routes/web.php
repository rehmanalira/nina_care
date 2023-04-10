<?php

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


// we can use both methods to call the UserController
// use \App\Http\Controllers\UserController;
Route::get('/users', [\App\Http\Controllers\UserController::class, 'index']);
Route::get('/', function () {
    return view('user.index');
});

Route::post('/users/filter/', [\App\Http\Controllers\UserController::class, 'userFilter'])->name('users.filter');


