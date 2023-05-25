<?php

use App\Http\Controllers\IndexController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the1045550w "web" middleware group. Make something great!
|
*/

Route::get('/', [IndexController::class, 'index'] );
Route::get('/terms', [IndexController::class, 'terms'])->name('index.terms');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::post('contact-us', [\App\Http\Controllers\ContactController::class, 'store'])->name('contact.us.store');

Route::get('allegro/save-authorization', [\App\Http\Controllers\Admin\Allegro\AllegroController::class, 'saveAuthorization'])->name('allegro.save-authorization');

Route::prefix('admin')->middleware('auth:web')->group(function () {
   Route::resource('opinions', \App\Http\Controllers\Admin\OpinionController::class);
   Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class)->only('index', 'destroy');
   Route::get('allegro/authorize', [\App\Http\Controllers\Admin\Allegro\AllegroController::class, 'authorize'])->name('allegro.authorize');
   Route::get('allegro/fetch-offers', [\App\Http\Controllers\Admin\Allegro\AllegroController::class, 'fetchOffers'])->name('allegro.fetch-offers');
   Route::get('allegro/products', [\App\Http\Controllers\Admin\Allegro\AllegroProductsController::class, 'index'])->name('allegro.products');
   Route::get('allegro/categories', [\App\Http\Controllers\Admin\Allegro\AllegroCategoriesController::class, 'index'])->name('allegro.categories');
   Route::get('allegro/categories/edit//{id}', [\App\Http\Controllers\Admin\Allegro\AllegroCategoriesController::class, 'edit'])->name('allegro.categories.edit');
   Route::post('allegro/categories/switch/{id}', [\App\Http\Controllers\Admin\Allegro\AllegroCategoriesController::class, 'switch'])->name('allegro.categories.switch');
   Route::resource('allegro', \App\Http\Controllers\Admin\Allegro\AllegroController::class);
});
