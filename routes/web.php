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
// Route::post('logout', [App\Http\Controllers\Auth\LoginController::class, 'logoutUser'])->name('user.logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::post('/home', [App\Http\Controllers\ConcourRegistrationController::class, 'store'])->name('concour.register');
Route::patch('/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('concour-registration', [App\Http\Controllers\ConcourRegistrationController::class, 'create'])->name('create.register');

Route::get('admin/dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin.dashboard');
Route::get('admin/candidates/{program}', [App\Http\Controllers\AdminDashboardController::class, 'getApplicants'])->name('get.applicants');

// Route::group(['prefix' => 'admin', 'middleware' => 'AdminMiddleware'], function() {
//     Route::get('/admin/dashboard', [App\Http\Controllers\Admin\AdminDashboardController::class, 'index'])->name('admin.dashboard');

// });

Route::get('admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showAdminLogin']);
Route::post('admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'postAdminLogin'])->name('admin.login');