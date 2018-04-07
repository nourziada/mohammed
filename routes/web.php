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

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::get('/','WebSite\HomeController@index')->name('index');
	Route::get('/testimonials','WebSite\HomeController@getTestimonials')->name('testimonials');
	Route::get('/character','WebSite\HomeController@getCharacter')->name('character');
	Route::get('/biography','WebSite\HomeController@getBiography')->name('biography');
	Route::get('/muhammad-and-divine-revelation','WebSite\HomeController@getRevelation')->name('revelation');
	Route::get('/the-message-of-islam','WebSite\HomeController@getMessage')->name('prophecy.message');
	Route::get('/one-god-one-message','WebSite\HomeController@getOneGod')->name('prophecy.onegod');
	Route::get('/the-universality-of-islam','WebSite\HomeController@getUniversality')->name('prophecy.universality');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
