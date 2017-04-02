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

Route::get('/home', 'HomeController@index');
Route::get('/viewTasks/{id}','TaskController@viewTasks');

Route::post('/addTask','TaskController@addTaskData');
Route::get('/addTask','TaskController@addTaskForm');

Route::get('/deleteTask/{id}','TaskController@deleteTask');

Route::get('/editTask/{id}','TaskController@editTaskForm');
Route::post('/editTask/{id}','TaskController@editTaskData');
