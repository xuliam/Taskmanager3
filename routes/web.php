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

Route::get('/', 'HomeController@root');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('projects', 'ProjectController@store')->name('project.store');
Route::delete('projects/{id}', 'ProjectController@destroy')->name('projects.destroy');
Route::patch('projects/{id}', 'ProjectController@update')->name('project.update');
Route::get('projects/{individual}', 'ProjectController@show')->name('project.show');
Route::resource('tasks','TasksController');
