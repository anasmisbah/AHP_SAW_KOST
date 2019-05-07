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

Route::resource('criteria', 'CriteriaController');

Route::get('/analysis/criteria','AnalisaCriteriaController@index')->name('analysiscriteria.index');
Route::post('/analysis/criteria/proses','AnalisaCriteriaController@proses')->name('analisyscriteria.proses');
Route::get('/tests', function () {
    return view('dashboard');
});
