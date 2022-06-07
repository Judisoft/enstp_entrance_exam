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
Route::get('view-application/{id}', [App\Http\Controllers\ConcourRegistrationController::class, 'show'])->name('view-application');
Route::patch('/{user}/update', [App\Http\Controllers\UserController::class, 'update'])->name('user.update');
Route::get('concour-registration', [App\Http\Controllers\ConcourRegistrationController::class, 'create'])->name('create.register');
Route::get('registration-form/{id}', [App\Http\Controllers\ConcourRegistrationController::class, 'printRegistrationForm'])->name('print.form');
Route::get('delete-application/{id}', [App\Http\Controllers\ConcourRegistrationController::class, 'destroy'])->name('delete.application');

Route::get('admin/applicants/{program}', [App\Http\Controllers\AdminDashboardController::class, 'getApplicants'])->name('get.applicants');

Route::get('admin/dashboard', [App\Http\Controllers\AdminDashboardController::class, 'index'])->name('admin.dashboard')->middleware('admin');

Route::get('admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'showAdminLogin']);
Route::post('admin/login', [App\Http\Controllers\Auth\AdminLoginController::class, 'postAdminLogin'])->name('admin.login');
Route::post('admin/dashboard', [App\Http\Controllers\Auth\AdminLoginController::class, 'logout'])->name('admin.logout');

// Import - Export Excell

Route::get('import_export', [App\Http\Controllers\Import_Export_Controller::class, 'importExport']);
Route::post('import', [App\Http\Controllers\Import_Export_Controller::class, 'import'])->name('import');
Route::get('export/{program}', [App\Http\Controllers\Import_Export_Controller::class, 'export'])->name('export');