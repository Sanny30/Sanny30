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
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//
Route::get('/main', 'ContactController@index')->name('main1');
Route::post('/add-con', 'ContactController@create');
Route::get('/del-con/{id}', 'ContactController@destroy');
Route::get('/edit-con/{id}','ContactController@edit');
Route::get('/show-con/{id}','ContactController@show');
Route::post('up-con/{id}','ContactController@update');
