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

// Route::get('/index',[
// 'as'=>'datatables.index',
// 'uses'=>'DatatablesController@index'] );

// Route::get('/show',[
// 'as'=>'datatables.data',
// 'uses'=>'DatatablesController@index'] );

Route::get('/index','DatatablesController@index');
Route::get('/show','DatatablesController@show')->name('datatables.data');