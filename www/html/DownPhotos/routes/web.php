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



Route::get('/', 'HomeController@index')->name('home'); # é uma forma de referencia para a url especificada no route.


Route::get('/login', 'LoginController@create'); # loga o usuário
Route::post('/login', 'LoginController@store'); # submit dos dados do usuário.
Route::post('/logout', 'LoginController@destroy'); # rota que desloga o usuário


Route::get('/registro', 'RegistroController@create'); //rota da página que cria o usuário
Route::post('/registro', 'RegistroController@store'); //rota do submit dos dados do usuário registrado



    