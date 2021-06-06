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

Route::get('/','HomeController@index');

Route::get('/siswa','SiswaController@index');
Route::get('/siswa/tambah/','SiswaController@tambah');
Route::post('/siswa/store','SiswaController@store');
Route::get('/siswa/edit/{id}','SiswaController@edit');
Route::post('/siswa/update','SiswaController@update');
Route::get('/siswa/konfirmasihapus/{id}','SiswaController@konfirmasihapus');
Route::get('/siswa/hapus/{id}','SiswaController@hapus');


Route::get('/mahasiswa','MahasiswaController@index');
Route::get('/mahasiswa/tambah/','MahasiswaController@tambah');
Route::post('/mahasiswa/store','MahasiswaController@store');
Route::get('/mahasiswa/edit/{id}','MahasiswaController@edit');
Route::post('/mahasiswa/update','MahasiswaController@update');
Route::get('/mahasiswa/konfirmasihapus/{id}','MahasiswaController@konfirmasihapus');
Route::get('/mahasiswa/hapus/{id}','MahasiswaController@hapus');

