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

Route::resource('admin', 'PostController');
/**
 * Вывести панель с задачами
 */
Route::get('/', function () {
    //
});

/**
 * Добавить новую задачу
 */
Route::get('/task', 'TaskController@index');

/**
 * Удалить задачу
 */
Route::delete('/task/{task}', function (Task $task) {
    //
});
Route::get('/', function () {
    return view('tasks');
});
