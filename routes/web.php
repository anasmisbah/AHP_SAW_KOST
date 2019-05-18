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
use App\Kost;
use App\Criteria;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('criteria', 'CriteriaController');
Route::resource('user', 'UserController');
Route::get('/analysis/criteria','AnalisaCriteriaController@index')->name('analysiscriteria.index');
Route::post('/analysis/criteria/proses','AnalisaCriteriaController@proses')->name('analisyscriteria.proses');
Route::get('/dashboard','HomeController@dashboard')->name('spkkost.dashboard');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}','Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback','Auth\SocialiteController@handleProviderCallback');
Route::resource('kost', 'KostController');
Route::get('/analysis/alternatif','AnalisaAlternatifController@tampilAlternatif')->name('alternatif.tampil');
Route::get('/analysis/alternatif/proses','AnalisaALternatifController@prosesAlternatif')->name('alternatif.proses');
Route::get('/addkost', function () {
    $value =[
        1=>['value'=>700000],
        2=>['value'=>3],
        3=>['value'=>9],
        4=>['value'=>400],
        
    ];
    dd($value);
    $kost = new Kost;
    $kost->name = "Ridho";
    $kost->address = "jl Alam Segar 3";
    $kost->type = "l";
    $kost->phone_number = "081349416332";
    $kost->save();
    
    $kost->criterias()->attach($value);

    return $kost;
});

Route::get('/lihatkost', function () {
   $kost = Kost::all();
   $jmlcriteria = Criteria::count();
// dd($kost[0]->criterias[0]->pivot->value);
   $matriks = [];
   for ($i=0; $i < $kost->count() ; $i++) { 
       for ($j=0; $j < $jmlcriteria ; $j++) { 
            $matriks[$i][$j] = $kost[$i]->criterias[$j]->pivot->value;
       }
   }

   foreach ($kost as $item) {
       dd($item->criterias());
   }
   dd($matriks);
   
});
