<?php

use App\Http\Controllers\AnnouncementsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HistoriqueController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SkillController;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');

Auth::routes();



Route::resource('announcements', AnnouncementsController::class)->names('announcements')->middleware('auth');
Route::resource('companies', CompanyController::class)->names('companies')->middleware('auth');


Route::group(['middleware' => ['auth']], function () {
  Route::post('/apply', [ProfileController::class , 'apply'])->name("apply");
  Route::post('/profile/add-skills', [ProfileController::class, 'addSkills'])->name('profile.addSkills');
  Route::get('/profile/show', [ProfileController::class, 'show'])->name('profile.show');


  Route::get('/announcement', 'AnnouncementsController@index');
  Route::get('/companie', 'CompanyController@index');
});

// Route::resource('profile',ProfileController::class);
Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth');
Route::resource('skills',SkillController::class);

Route::resource('historique',HistoriqueController::class);
Route::middleware(['role:admin'])->group(function () {
  Route::get('/announcement', 'AnnouncementsController@index');
  Route::get('/companie', 'CompanyController@index');

});

Route::post('/addskills', [ProfileController::class, 'addskills']);

Route::controller(ImageController::class)->group(function(){
  Route::get('image-upload', 'index');
  Route::post('image-upload', 'store')->name('image.store');
});

Route::get('/home-with-announcements', [ProfileController::class, 'showMatchingAnnounce'])->name('home.with.announcements');



// 
