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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/sejarah', function(){
    return view('sejarah');
});


Route::get('/prestasi', function(){
    return view('prestasi');
});

Route::get('/ekstrakurikuler', function(){
    return view('ekstrakurikuler');
});

Route::get('/kegiatan', function(){
    return view('kegiatan');
});

Route::get('/kbm', function(){
    return view('kbm');
});

Route::get('/santri', function(){
    return view('santri');
});

Route::get('/fasilitas', function(){
    return view('fasilitas');
});

Route::get('/lain-lain', function(){
    return view('lain-lain');
});

Route::get('/vismis', function(){
    return view('vismis');
});




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
