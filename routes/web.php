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

Route::get('/', [\App\Http\Controllers\HomeController::class, "index"])->name('home');
Route::get('/gallery', [\App\Http\Controllers\GalleryController::class, "index"])->name('gallery');
Route::get('/reviews', [\App\Http\Controllers\ReviewController::class, "index"])->name('reviews');
Route::get('/faq', [\App\Http\Controllers\FaqController::class, "index"])->name('faq');

/** forms */
Route::post('/orderTicket', [\App\Http\Controllers\OrderTicketController::class, "store"]);
Route::post('/askQuestion', [\App\Http\Controllers\AskQuestionController::class, "store"]);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
