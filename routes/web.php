<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\CompanyController;
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

Route::resource('announcements', AnnouncementsController::class);
Route::resource('companies',CompanyController::class);

