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

Route::get('/', 'SiteController@index')->name('index');
Route::post('/', 'SiteController@store');

Route::group(['prefix' => Config::get('app.loginUrl')], function() {
    Auth::routes();
});

Route::group(['middleware' => 'isAdmin', 'prefix' => 'admin'], function(){
    Route::get('', 'AdminController@index');
});

Route::get('/home', 'HomeController@index')->name('home');
