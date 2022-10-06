<?php

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

use App\http\Controllers\logoutcontroller;

Route::get('/', function () {
    return view('home1');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});



Route::get('/testposter', function () {
    return view('testposter');
});

Route::get('/visimisi', function () {
    return view('visimisi');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/Ourpromise', function () {
    return view('Ourpromise');
});

Route::get('/struktur', function () {
    return view('struktur');
});

Route::get('/Sekbid', function () {
    return view('Sekbid');
});

Route::get('/mars', function () {
    return view('mars');
});

Route::get('/activities', function () {
    return view('activities');
});

Route::get('/detailactivities', function () {
    return view('detailactivities');
});

Route::get('/poster', function () {
    return view('poster');
});

Route::get('/mam', function () {
    return view('mam');
});



Route::get('/Achel', function () {
    return view('Achel');
});


Route::get('/main','maincontroller@index')->middleware('auth');




Route::get('/activities','activitiesController@activities');
Route::get('/poster','posterController@poster');
Route::get('/detailactivities/{gso25a}','activitiesController@show');

Route::middleware(['auth']) ->group(function(){
    Route::get('/tambahactivities','activitiesController@create');
    
    Route::post('/prosestambahactivities','activitiesController@store');
    
    Route::get('/activitiesend','activitiesController@index');
    
    Route::delete('/activitiesend/{gso25a}','activitiesController@destroy');
    
    
    
    
    Route::post('/prosestambahposter','posterController@store');
    Route::get('/tambahposter','posterController@create');
    Route::get('/posterend','posterController@index');
    Route::delete('/posterend/{poster}','posterController@destroy');
    
    



    Route::post('logout','logoutcontroller'::class);
});

Route::get('/daftar','daftarcontroller@index')->middleware('auth');
Route::get('/home1','daftarcontroller@create');
Route::post('/prosestambahdaftar','daftarcontroller@store');
Route::delete('/daftar/{daftar}','daftarcontroller@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

