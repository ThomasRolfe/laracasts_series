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


Route::get('/', 'PostsController@index')->name('home');
Route::get('/home', 'PostsController@index');
Route::get('/posts/create', 'PostsController@create');
Route::get('/posts/{post}', 'PostsController@show');
Route::post('/posts', 'PostsController@store');
Route::post('/posts/{post}/comments', 'CommentsController@store');

Auth::routes();

Route::post('/login', 'SessionsController@store');
Route::get('/register', 'RegistrationController@create');
Route::get('/login', 'SessionsController@create');
Route::post('/register', 'RegistrationController@store');
Route::get('/logout', 'Sessionscontroller@destroy');
