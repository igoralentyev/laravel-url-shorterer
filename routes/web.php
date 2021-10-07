<?php

use App\Http\Controllers\UrlController;
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
    return view('app');
})->name('index');

// create short link
Route::post('/short/', [UrlController::class, 'create'])->name('url.create');

// redirect to full link
Route::get('/{link}', [UrlController::class, 'redirect'])->name('url.redirect');
