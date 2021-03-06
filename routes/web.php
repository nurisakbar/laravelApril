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

Route::get('todo2',function(){
    $data['todos'] = array('Pergi Sekolah Pagi','Kerjakan PR','Tidur Malam');
    return view('todo',$data);
});

Route::get('todo','TodoController@index');
Route::get('todo/create','Todocontroller@create');
Route::post('todo','TodoController@store');
Route::get('todo/{id}/edit','TodoController@edit');
Route::put('todo/{id}','TodoController@update');
Route::delete('todo/{id}','TodoController@destroy');

Route::get('category','CategoryController@index');
Route::get('category/create','CategoryController@create');
Route::post('category','CategoryController@store');

// Route::get('user','UserController@index');
// Route::get('user/create','UserController@create');
// Route::post('user','UserController@store');
// Route::get('user/{id}/edit','UserController@edit');
// Route::put('user','UserController@store');

Route::resource('user', 'UserController');


