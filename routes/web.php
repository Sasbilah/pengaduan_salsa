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
Route::get('create','PengaduanController@create')->name('create');
Route::post('/simpan-pengaduan','PengaduanController@store')->name('simpan-pengaduan');
Route::get('/index','PengaduanController@index')->name('index');
Route::get('/destroy/{id_pengaduan}', 'PengaduanController@destroy');
Route::get('/cetak-pengaduan','PengaduanController@cetakform')->name('cetak-pengaduan');
Route::get('/cetak_pdf/{id_pengaduan}','PengaduanController@cetak_pdf')->name('cetak-pengaduan-pertanggal');

Route::get('/tanggapan/create','TanggapanController@create')->name('/tanggapan/create');
Route::post('/simpan-Tanggapan','TanggapanController@store')->name('simpan-tanggapan');
Route::get('/tanggapan/index','TanggapanController@index')->name('/tanggapan/index');
Route::get('/tanggapan/destroy/{id_tanggapan}', 'TanggapanController@destroy');


Route::get('/login', function () {
        return view('User.login');
    });
    Route::post('/postlogin','LoginController@postlogin')->name('postlogin');