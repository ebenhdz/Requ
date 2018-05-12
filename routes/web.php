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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/requisicion', function(){
   return view('layouts.requisicion');
});


Route::get('/requisiciones', function(){
    return view('Requisicion.requisiciongeneral');
});

Route::get('/requisiciones-admin', function(){
    return view('Requisicion.requisicioadmin');
});

Route::get('/nueva-requisicion', function(){
    return view('Requisicion.NewReq');
});

Route::get('/directivos', function(){
    return view('Requisicion.Directivos');
});