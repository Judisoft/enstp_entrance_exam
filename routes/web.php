<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controller\ConcourRegistrationController;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/home', [App\Http\Controllers\ConcourRegistrationController::class, 'store'])->name('concour.register');
Route::patch('/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('concour-registration', [App\Http\Controllers\ConcourRegistrationController::class, 'create'])->name('create.register');
