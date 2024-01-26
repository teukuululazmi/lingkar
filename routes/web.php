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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/galeri', function () {
    return view('galeri');
});
Route::get('/contact', function () {
    return view('contact');
});

Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
// slider
Route::get('/slider', [App\Http\Controllers\Slider\SliderController::class, 'index'])->name('slider')->middleware('auth');
Route::post('/sliderPost', [App\Http\Controllers\Slider\SliderController::class, 'sliderPost'])->name('sliderPost')->middleware('auth');
Route::get('/sliderDelete/{id}', [App\Http\Controllers\Slider\SliderController::class, 'sliderDelete'])->name('sliderDelete')->middleware('auth');

//foto instagram
Route::get('/instagram', [App\Http\Controllers\Instagram\InstagramController::class, 'index'])->name('instagram')->middleware('auth');
Route::post('/instagramPost', [App\Http\Controllers\Instagram\InstagramController::class, 'instagramPost'])->name('instagramPost')->middleware('auth');
Route::get('/instagramDelete/{id}', [App\Http\Controllers\Instagram\InstagramController::class, 'instagramDelete'])->name('instagramDelete')->middleware('auth');

//sponsors
Route::get('/sponsors', [App\Http\Controllers\Sponsors\SponsorsController::class, 'index'])->name('sponsors')->middleware('auth');
Route::post('/sponsorsPost', [App\Http\Controllers\Sponsors\SponsorsController::class, 'sponsorsPost'])->name('sponsorsPost')->middleware('auth');
Route::get('/sponsorsDelete/{id}', [App\Http\Controllers\Sponsors\SponsorsController::class, 'sponsorsDelete'])->name('sponsorsDelete')->middleware('auth');

//gallery
Route::get('/gallery', [App\Http\Controllers\Gallery\GalleryController::class, 'index'])->name('gallery')->middleware('auth');
