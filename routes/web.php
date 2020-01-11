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
    return view('index');
})->name('home');

Route::resource('/work', 'WorkController');
Route::resource('/occupationalinjury', 'InjuryController');
Route::resource('/caraccident', 'CaraccidentController');
Route::resource('/renthouse', 'RenthouseController');
Route::get('/legal', 'LegalController@index')->name('legal');
Route::get('/cooperation','CooperationController@index')->name('cooperation');
Route::get('/intention', 'IntentionController@index')->name('intention');
Route::get('/aboutme','AboutmeController@index')->name('aboutme');

Auth::routes();

Route::get('/home', 'HomeController@index');

