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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/', 'LogicController@index');
Route::get('campaign', 'LogicController@campaign');

Route::get('test','LogicController@test');

Route::post('test','LogicController@posttest');

// DELETE
Route::get('url/delete/{id}', 'LogicController@delete');
Route::get('variation/delete/{id}', 'LogicController@deleteVariation');
Route::post('url/delete/select', 'LogicController@deletes');
Route::post('url/copy/select', 'LogicController@copyClip');
Route::post('url/export/select', 'LogicController@export'); 

//Route::post('url/delete-all','LogicController@delete_all');
Route::get('url/delete-all',function(){
    
    return view("delete_all");
    
});

Route::post('variation/add', 'LogicController@addVariation');
Route::post('variation/update', 'LogicController@updateVariation');

Route::post('school/add', 'LogicController@addSchool');
// EDIT
Route::post('url/edit/{id}', 'LogicController@update');
Route::get('url/edit/{id}', 'LogicController@edit');
Route::post('url/upload', 'LogicController@upload');
Route::get('url/upload', 'LogicController@redirectHome');
Route::post('url/single', 'LogicController@single');
Route::get('url/single', 'LogicController@redirectHome');
Route::get('/{url}', 'LogicController@short');




