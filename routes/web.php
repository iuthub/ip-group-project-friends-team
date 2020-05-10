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
    return view('index');
});

Auth::routes();
Route::get('/contact', 'HomeController@contact');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/bar', 'BarController@bar');
Route::get('/menu', 'BarController@menu');
Route::get('/blog', 'BarController@blog');
Route::get('/contact', 'BarController@contact');

Route::get('/index', 'BarController@index')->name('bar_index');
Route::post('/store', 'BarController@store')->name('bar_store');


Route::get('/service', 'BarController@service');

Route::get('/book', 'HomeController@book');
Route::get('/book1', 'HomeController@book1');
Route::get('/book2', 'HomeController@book2');

Route::get('/about', 'HomeController@about');

