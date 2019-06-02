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
Route::get('auth/{provider}','Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\SocialiteController@handleProviderCallback');



Route::middleware(['auth'])->group(function (){

    
   
    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('analysis/user/perbandingankriteria','AnalisaCriteriaController@userCriteriaIndex')->name('user.perbandingankriteria');
    Route::post('analysis/user/perbandingankriteria/proses','AnalisaCriteriaController@userProses')->name('user.analisakriteria');
    Route::get('analysis/user/alternatif','AnalisaAlternatifController@userAlternatif')->name('user.alternatif');
    Route::get('analysis/user/alternatif/proses','AnalisaAlternatifController@userProsesAlternatif')->name('user.alternatifproses');
    Route::get('/alternatif/hasilrangking','UserController@hasilRangking')->name('user.hasilrangking');
    Route::get('/alternatif/kost','KostController@userIndex')->name('user.kostindex');
    Route::get('/detail/kost','KostController@detailApi')->name('kost.detail');

    Route::middleware(['admin'])->group(function (){
        Route::resource('criteria', 'CriteriaController');
        Route::resource('user', 'UserController');
        Route::get('/dashboard','HomeController@dashboard')->name('spkkost.dashboard');
        Route::resource('kost', 'KostController');
        Route::get('/analysis/criteria','AnalisaCriteriaController@index')->name('analysiscriteria.index');
        Route::post('/analysis/criteria/proses','AnalisaCriteriaController@proses')->name('analisyscriteria.proses');
        Route::get('/analysis/alternatif','AnalisaAlternatifController@tampilAlternatif')->name('alternatif.tampil');
        Route::get('/analysis/alternatif/proses','AnalisaALternatifController@prosesAlternatif')->name('alternatif.proses');
    });
});

