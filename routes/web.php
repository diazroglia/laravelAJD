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


Route::get('/home', 'HomeController@index')->name('home');

Route::view('/home1', 'home1')->name('home1');
Route::view('/about', 'about')->name('about');
Route::get('/portfolio', 'ProjectController@index')->name('projects.index');
// Ojo el orden importa... Crear antes que id...
Route::get('/portfolio/crear', 'ProjectController@create')->name('projects.create');
Route::get('/portfolio/{project}/editar', 'ProjectController@edit')->name('projects.edit');
Route::patch('/portfolio/{project}', 'ProjectController@update')->name('projects.update');

Route::post('/portfolio', 'ProjectController@store')->name('projects.store');

Route::get('/portfolio/{project}', 'ProjectController@show')->name('projects.show');

Route::view('/contact', 'contact')->name('contact');
Route::post('contact','MessageController@store')->name('messages.store');

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
