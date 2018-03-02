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

Route::get('/','StaticController@home')->name('home');
Route::get('about','StaticController@about')->name('about');
Route::get('contact','StaticController@contact')->name('contact');
Route::post('contactSave','StaticController@saveContact')->name('contact_save');


Route::resource('article', 'ArticleController');
