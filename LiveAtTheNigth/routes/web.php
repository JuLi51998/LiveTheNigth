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

Route::get('/', 'FrontEndController@index');
Route::get('/about', 'FrontEndController@about');
Route::get('/contact', 'FrontEndController@contact');
Route::get('/signin', 'FrontEndController@signin');
Route::post('/signin', 'FrontEndController@login');
Route::get('/signup', 'FrontEndController@signup');
Route::post('/signup', 'FrontEndController@register');





