<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Models\Company;
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
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Auth::routes();
Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);

Route::resource('announcements', AnnouncementsController::class)->names('announcements');
Route::resource('companies', CompanyController::class)->names('companies');

// Route::resource('',Controller::class);

// route::resource('Home',HomeController::class);
// route::resource('register',RegisterController::class);
// route::resource('login',LoginController::class);






// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
