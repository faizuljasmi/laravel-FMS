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
//Complaints Route
Route::get('/', 'ComplaintsController@index')->name('complaints_index');
//Create Complaints
Route::get('/create', 'ComplaintsController@create')->name('complaints_create');
//Store complaints
Route::post('/store', 'ComplaintsController@store')->name('complaints_store');
//Edit complaints
Route::get('/edit/{complaint}', 'ComplaintsController@edit')->name('complaints_edit');
//Update complaint
Route::post('/update/{complaint}','ComplaintsController@update')->name('complaints_update');
//Delete complaints
Route::get('/delete/{complaint}', 'ComplaintsController@delete')->name('complaints_delete');
//View Complaints
Route::get('/view/{complaint}', 'DetailsController@detail')->name('details_view');
