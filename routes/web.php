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
Route::get('/beranda','BerandaController@index');
// Route::get('/pengaduan','PengaduanController@index');
// Route::get('/pengaduan/create','PengaduanController@create');
// Route::post('/pengaduan/store','PengaduanController@store');
Route::get('/index','PengaduanController@index')->name('index');
Route::get('/login', function () {
    return view('user.login');
});
Route::post('/postlogin','LoginController@postlogin')->name('postlogin');