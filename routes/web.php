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

route::get('/','loginController@index');
Route::post('/daftar','loginController@daftar')->name('daftar');
Route::post('/login','loginController@login');
Route::get('/logout','loginController@logout');

//ADMIN
Route::get('/user','userController@tampil')->name('admin.user');
Route::post('/user','userController@tambah')->name('tambah.user');
Route::get('/user/edit/{id}','userController@edit');
Route::post('/user/update','userController@update')->name('update.user');

Route::get('user/delete/{id}','userController@delete');


Route::get('/transaksi','transaksiController@tampil')->name('admin.transaksi');
Route::get('transaksi/edit/{id}','transaksiController@edit');
Route::patch('transaksi/update/{id}','transaksiController@update');
Route::get('transaksi/delete/{id}','transaksiController@delete');

Route::get('/hadiah','hadiahController@tampil')->name('admin.hadiah');
Route::post('/hadiah','hadiahController@tambah');
Route::get('hadiah/edit/{id}','hadiahController@edit');
Route::post('hadiah/update','hadiahController@update')->name('update.hadiah');
Route::get('hadiah/delete/{id}','hadiahController@delete');

Route::get('/barang','barangController@tampil')->name('admin.barang');
Route::post('/barang','barangController@tambah');
Route::get('barang/edit/{id}','barangController@edit');
Route::post('barang/update','barangController@update')->name('update.barang');
Route::get('barang/delete/{id}','barangController@delete');



//CUSTOMER
Route::get('/belanja','customerController@tampilBelanja')->name('customer.belanja');
Route::get('belanja/pilihBarang/{id}','customerController@pilihBarang');
Route::post('belanja/beli','customerController@beliBarang')->name('beli');
Route::get('/point','customerController@tampilPoint')->name('customer.point');


