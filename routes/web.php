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

// Route::get('/', function () {
//   return redirect('entries');
// });

// Route::resource('entries', 'EntryController');

Route::get('/entries', 'EntryController@index')->name('entries.index');
Route::get('/entries/create', 'EntryController@create')->name('entries.create');
Route::post('/entries', 'EntryController@store')->name('entries.store');
Route::get('/entries/edit', 'EntryController@edit')->name('entries.edit');
// Route::post('/entries/{entryId}', 'EntryController@update')->name('entries.update');
Route::get('/entries/{entry}', 'EntryController@show')->name('entries.show'); 
Route::post('/entries/{entry}', 'EntryController@destroy')->name('entries.destroy');

// Route::get('/entries_list_aaa', 'EntryController@index');

Route::get('/log_test', 'LogTestController@index'); 