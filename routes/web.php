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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// personal rout list
Route::get('/aboutUs', 'pagesController@aboutUs') ->name('about');
Route::get('/blog', 'pagesController@blog') ->name('blog');
Route::get('/pretoria', 'pretoriaController@pretoria') ->name('about');
Route::get('/contactUs', 'contactusController@contactUs') ->name('contact');
Route::get('/invent', 'eventController@event') ->name('about');
Route::get('/announcements', 'announcementsController@announcements') ->name('announcements');
Route::get('/nationalCircular', 'nationalCircularController@nationalCircular') ->name('about');
Route::get('/testimonies', 'pagesController@testimonies') ->name('about');
Route::get('/news', 'newsController@news') ->name('about');
Route::get('/audio', 'audioController@audio') ->name('about');
Route::get('/gallery', 'galleryController@gallery') ->name('about');


