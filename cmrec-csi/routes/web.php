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

Route::get('/',"PagesController@index" );
Route::get('/news',"EventsController@news");
Route::get('/login',"PagesController@login");
Route::get('/aboutus',"PagesController@aboutus");
Auth::routes(['register'=>false]);
Route::get('/event/{id}','EventsController@show');
