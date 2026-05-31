<?php

use Illuminate\Support\Facades\Route;

//Route::get('/', 'TasksController@index');
//Route::get('/tasks', 'TasksController@index');
use App\Http\Controllers\TasksController;

Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/tasks/create','TasksController@create');

Route::post('/tasks','TasksController@store');

Route::patch('/tasks/{id}','TasksController@update');

Route::delete('/tasks/{id}','TasksController@delete');