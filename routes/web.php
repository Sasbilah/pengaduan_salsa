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
// Route::get('/register','LoginController@register');
Route::get('/beranda','BerandaController@index');
// Route::get('/pengaduan','PengaduanController@index');
Route::get('create','PengaduanController@create')->name('create');
Route::post('/simpan-pengaduan','PengaduanController@store')->name('simpan-pengaduan');
Route::get('/index','PengaduanController@index')->name('index');
Route::get('/destroy/{id_pengaduan}', 'PengaduanController@destroy');
Route::get('/login', function () {
    return view('masyarakat.login');
});
// Route::get('/postlogin','LoginController@postlogin')->name('postlogin');

Route::get('/tanggapan/create','TanggapanController@create')->name('/tanggapan/create');
Route::post('/simpan-Tanggapan','TanggapanController@store')->name('simpan-tanggapan');
Route::get('/tanggapan/index','TanggapanController@index')->name('/tanggapan/index');
Route::get('/destroy/{id_tanggapan}', 'TanggapanController@destroy');