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

//Ajout du nom des routes avant le get
Route::name('app_home')->get('', function () {
    return view('pages.home');
});

//Ajout du nom de la route à la fin
Route::get('about', function () {
    return view('pages.about');
})->name('app_about');
