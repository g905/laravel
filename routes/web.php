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
Route::get('/cat', 'ShopController@index')->name('cat');

Route::get('/', 'WelcomeController@index')->name('index');

Route::view('/about', 'about.index')->name('about.index');

Route::view('/contact', 'contact.index')->name('contact.index');

Route::get('/languages', 'LanguagesController@index')->name('languages.index');

Route::get('/locations', 'LocationsController@index')->name('locations.index');

Route::get('/maps', 'MapsController@index')->name('maps.index');

//Route::get('/events', 'EventsController@index')->name('events.index');
//Route::get('/events/{id}', 'EventsController@show')->name('events.show');
Route::resource('events', 'EventsController');

Auth::routes();
