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
Route::get('/exclusive',"PagesController@exclusive");
Route::get('/contact',"PagesController@contact");
Route::get('/logged',"PagesController@logged");
Route::get('/loggednews',"PagesController@loggednews");
Route::get('/loggedevents',"PagesController@loggedevents");
Auth::routes(['register'=>false]);
Route::get('/event/{id}','EventsController@show');
