<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
	return view('welcome');
});

Route::get('home',['as' => 'root', 'uses' => 'StaticsController@root']);

Route::get('profile',['as' => 'profile', 'uses' => 'StaticsController@profile']);

Route::resource('articles', 'ArticlesController');

Route::resource('comments', 'CommentsController');

Route::get('importExport','ImportExportController@importExport');
Route::post('importExcel','ImportExportController@importExcel');
Route::get('exportExcel/','ImportExportController@exportExcel')->name('exportExcel');
Route::get('exportbyId/{id}','ImportExportController@exportbyId')->name('exportbyId');

