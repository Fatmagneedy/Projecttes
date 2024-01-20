<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;
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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => [ 'localeSessionRedirect', 'localizationRedirect', 'localeViewPath' ]
    ], function(){
Route::get('/', function () {
    return view('welcome');
});

Route::get('index', function () {
    return view('index');
})->name('index');
Route::get('about', function () {
    return view('about');
})->name('about');
Route::get('service', function () {
    return view('service');
})->name('service');

Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('gurads', function () {
    return view('gurads');
})->name('gurads');


Auth::routes(['verify'=>true]);
Route::get('send-mail', [MailController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    });