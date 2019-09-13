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


//Route Home
Route::get('/', function () {
    return view('welcome');
})->name('rHome');

Route::get('/logic', 'HomeController@logic')->name('logic');
Route::get('/webdev', 'HomeController@webdev')->name('webdev');

//Route Logic
Route::get('/nomor1', 'LogicController@nomor1')->name('nomor1');
Route::get('/nomor2', 'LogicController@nomor2')->name('nomor2');
Route::get('/nomor3', 'LogicController@nomor3')->name('nomor3');
Route::get('/nomor4', 'LogicController@nomor4')->name('nomor4');
Route::get('/nomor5', 'LogicController@nomor5')->name('nomor5');

Route::post('/nomor1Post', 'LogicController@nomor1Post')->name('nomor1Post');
Route::post('/nomor3Post', 'LogicController@nomor3Post')->name('nomor3Post');

//Route WebDev
Route::post('/saveData', 'WebDevController@saveData')->name('saveData');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
