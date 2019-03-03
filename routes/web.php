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

Route::get('/', 'StudentController@index');
Route::get('/students/{student}', 'StudentController@show');
Route::post('/students/{student}/contact', 'StudentContactController@store');

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::post('/students', 'StudentController@store');
    Route::get('/admin', 'AdminController@index')->name('home');
});

Auth::routes(['verify' => true]);

