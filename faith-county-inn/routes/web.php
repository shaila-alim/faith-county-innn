<?php /** @noinspection PhpMultipleClassDeclarationsInspection */

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


Route::view('/','website.index')->name('home');
Route::view('/about','website.about')->name('about');
Route::view('/management','website.management')->name('management');
Route::view('/rooms','website.rooms')->name('rooms');
Route::view('/contact','website.contact')->name('contact');
Route::view('/events','website.events')->name('events');
Route::view('/gallery','website.gallery')->name('gallery');
Route::view('/pre-wedding','website.pre-wedding')->name('pre-wedding');
Route::view('/tariff','website.tariff')->name('tariff');



