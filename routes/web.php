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
//     return view('welcome');
// });

Route::get('create', ['as'=>'create','uses'=>'CrudController@create']);

Route::post('store', ['as'=>'store','uses'=>'CrudController@store']);

Route::get('read',['as'=>'read','uses'=>'CrudController@retrieve']);

Route::get('search', ['as'=>'search','uses'=>'CrudController@search']);

Route::get('edit/{id}', ['as'=>'edit','uses'=>'CrudController@edit']);

Route::post('update', ['as'=>'update', 'uses'=>'CrudController@update']);

Route::get('delete/{id}', ['as'=>'delete', 'uses'=>'CrudController@delete']);
