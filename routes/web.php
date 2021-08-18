<?php

use App\Http\Controllers\TasksController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', 'TasksController@listTasks')->name('home');

Route::get('/edit/{id}', 'TasksController@editTask')->name('edit');

Route::post('/edit/{id}/save/', 'TasksController@updateTask')->name('edit.save');

Route::get('/delete/{id}', 'TasksController@deleteTask')->name('delete');

Route::post('/tasks/add/', 'TasksController@addTask')->name('task.add');