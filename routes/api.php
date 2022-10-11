<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/




Route::get('/entries_list', 'EntryApiController@index');
// Route::get('/api/entries/{entry}', 'EntryApiController@show');
// Route::get('/entries/create', 'EntryApiController@create');
Route::post('/entries', 'EntryApiController@store');
Route::get('/entries/{entryId}', 'EntryApiController@edit');
Route::post('/entries/edit/{entry_id}', 'EntryApiController@update');
Route::post('/entries/{entry}', 'EntryApiController@destroy');
// Route::delete('/api/entries_list/{entry}', 'EntryApiController@destroy');




