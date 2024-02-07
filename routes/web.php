<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
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
Route::get('/', [App\Http\Controllers\HomeController::class, 'home']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home']);

Auth::routes();



Route::resource('announcements', AnnouncementsController::class)->names('announcements');
Route::resource('companies', CompanyController::class)->names('companies');


Route::group(['middleware' => ['auth']], function () {
  Route::get('/announcement', 'AnnouncementsController@index');
  Route::get('/companie', 'CompanyController@index');
});

Route::resource('profile',ProfileController::class);
Route::resource('historique',HistoriqueController::class);
Route::middleware(['role:admin'])->group(function () {
  Route::get('/announcement', 'AnnouncementsController@index');
  Route::get('/companie', 'CompanyController@index');

});



// 
