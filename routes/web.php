<?php

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
})->name('/');

Auth::routes();

Route::get('/home', 'PagesController@index')->name('home');
Route::get('/news', 'PagesController@indexNews')->name('news');
Route::get('/encyclopedia', 'PagesController@indexEncyclopedia')->name('encyclopedia');
Route::get('/blogs', 'PagesController@indexBlogs')->name('blogs');
