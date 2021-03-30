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

Route::get('login','logincontroller@index');
Route::post('login/cek', 'logincontroller@cek');
Route::get('dashboard', 'dashcontroller@index');
Route::get('/logout', 'logincontroller@logout');
Route::get('/loginsiswa', 'siswalogin@siswaLogin');
Route::post('/login/siswa/proses', 'siswalogin@login');
Route::get('/dashsiswa', 'siswalogin@index');
Route::get('/siswa/logout', 'siswalogin@logout');

Route::get('masuk', 'siswalogin@mmasuk');
// Route::post('native/auth', 'siswalogin@auth');
// Route::get('/logoutsiswa', 'siswalogin@logout');

Route::get('/laporan', 'LaporanController@index');
Route::get('/laporan/create', 'LaporanController@create');

// Route::group(['middleware'=>'cek_login'], function(){
//   if(Session::get('level') == 'admin'){
//
//   }
// });

//PETUGAS
Route::get('/petugas', 'petugasController@petugas');
Route::get('/petugas/create', 'petugasController@create');
Route::post('petugas', 'petugasController@store');
Route::get('petugas/{petugas}/edit', 'petugasController@edit');
Route::post('petugas/{petugas}/update', 'petugasController@update');
Route::get('petugas/{petugas}', 'petugasController@show');
Route::get('petugas/{petugas}/delete', 'petugasController@delete');

// Route::get('profile', 'pageController@profile');

Route::resource('/history', 'HistoryController');

//SISWA
Route::get('/siswa', 'siswaController@siswa');
Route::get('/siswa/create', 'siswaController@create');
Route::post('siswa/store', 'siswaController@store');
Route::get('siswa/{siswa}/edit', 'siswaController@edit');
Route::post('siswa/{siswa}/update', 'siswaController@update');
Route::get('siswa/{siswa}', 'siswaController@show');
Route::get('siswa/{siswa}/delete', 'siswaController@delete');

//KELAS
Route::get('/kelas', 'kelasController@kelas');
Route::get('/kelas/create', 'kelasController@create');
Route::post('kelas/store', 'kelasController@store');
Route::get('kelas/{kelas}/edit', 'kelasController@edit');
Route::post('kelas/{kelas}/update', 'kelasController@update');
Route::get('kelas/{kelas}', 'kelasController@show');
Route::get('kelas/{kelas}/delete', 'kelasController@delete');

//SPP
Route::get('/spp', 'sppController@spp');
Route::get('/spp/create', 'sppController@create');
Route::post('spp/store', 'sppController@store');
Route::get('spp/{spp}/edit', 'sppController@edit');
Route::post('spp/{spp}/update', 'sppController@update');
Route::get('spp/{spp}', 'sppController@show');
Route::get('spp/{spp}/delete', 'sppController@delete');

//PEMBAYARAN
Route::get('/pembayaran', 'transcontroller@pembayaran');
Route::get('/pembayaran/create', 'transcontroller@create');
Route::post('pembayaran/store', 'transcontroller@store');
Route::get('pembayaran/{pembayaran}/edit', 'transcontroller@edit');
Route::post('pembayaran/{pembayaran}/update', 'transcontroller@update');
Route::get('pembayaran/{pembayaran}', 'transcontroller@show');
Route::get('pembayaran/{pembayaran}/delete', 'transcontroller@delete');
