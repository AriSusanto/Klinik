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
Route::get('/tampilanmenu',['uses'=>'MainController@tampilanmenu']);
Route::get('/register',['uses'=>'MainController@register']);
Route::get('/beranda',['uses'=>'MainController@beranda']);
Route::get('/login',['uses'=>'MainController@login']);
Route::get('/pasien',['uses'=>'MainController@pasien']);
Route::get('/logout',['uses'=>'MainController@logout']);
Route::get('/data_pasien',['uses'=>'MainController@data_pasien']);
Route::get('/info_pasien',['uses'=>'MainController@info_pasien']);
Route::get('/dokter',['uses'=>'MainController@dokter']);
Route::get('/apotik',['uses'=>'MainController@apotik']);
Route::get('/obat',['uses'=>'MainController@obat']);
Route::get('/pesanan',['uses'=>'MainController@pesanan']);
Route::get('/gabung',['uses'=>'MainController@gabung']);
Route::get('/gigi',['uses'=>'MainController@gigi']);
Route::get('/ibuanak',['uses'=>'MainController@ibuanak']);

Route::post('/proses_daftar',['uses'=>'MainController@proses_daftar']);
Route::post('/proses_login',['uses'=>'MainController@proses_login']);
// CRUD Pasien Umum
Route::post('/proses_simpan_pasien',['uses'=>'MainController@proses_simpan_pasien']);
Route::post('/proses_update_pasien',['uses'=>'MainController@proses_update_pasien']);
Route::post('/hapus_pasien',['uses'=>'MainController@hapus_pasien']);

//CRUD Riwayat Pasien
Route::post('/simpan_riwayat',['uses'=>'MainController@simpan_riwayat']);
Route::post('/proses_update_riwayat',['uses'=>'MainController@proses_update_riwayat']);

//CRUD Apotik
Route::post('/simpan_obat',['uses'=>'MainController@simpan_obat']);
Route::post('/proses_update_obat',['uses'=>'MainController@proses_update_obat']);
Route::post('/hapus_obat',['uses'=>'MainController@hapus_obat']);

//CRUD Pasien Gigi
Route::post('/proses_simpan_pasien_gigi',['uses'=>'MainController@proses_simpan_pasien_gigi']);
Route::post('/proses_update_pasien_gigi',['uses'=>'MainController@proses_update_pasien_gigi']);
Route::post('/hapus_pasien_gigi',['uses'=>'MainController@hapus_pasien_gigi']);

//CRUD Pasien Ibu Dan Anak
Route::post('/proses_simpan_pasien_anak',['uses'=>'MainController@proses_simpan_pasien_anak']);
Route::post('/proses_update_pasien_anak',['uses'=>'MainController@proses_update_pasien_anak']);
Route::post('/hapus_pasien_anak',['uses'=>'MainController@hapus_pasien_anak']);