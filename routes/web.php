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
    return redirect('login');
});

Route::get('/dashboard', "App\Http\Controllers\DashboardController@index")->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/mall', "App\Http\Controllers\MallController@index")->middleware(['auth'])->name('mall');
Route::get('/mall/create', "App\Http\Controllers\MallController@create")->middleware(['auth'])->name('mallCreate');
Route::POST('/mall/create', "App\Http\Controllers\MallController@store")->middleware(['auth'])->name('mallStore');;
Route::get('/mall/edit/{id}', "App\Http\Controllers\MallController@edit")->middleware(['auth'])->name('mallEdit');
Route::POST('/mall/update/{id}', "App\Http\Controllers\MallController@update")->middleware(['auth'])->name('mallUpdate');;
Route::get('/mall/delete/{id}', "App\Http\Controllers\MallController@destroy")->middleware(['auth'])->name('mallDelete');;

Route::get('/user', "App\Http\Controllers\UserController@index")->middleware(['auth'])->name('user');

Route::get('/lahan_parkir', "App\Http\Controllers\LahanParkirController@index")->middleware(['auth'])->name('lahanParkir');
Route::get('/lahan_parkir/create', "App\Http\Controllers\LahanParkirController@create")->middleware(['auth'])->name('lahanParkirCreate');
Route::POST('/lahan_parkir/create', "App\Http\Controllers\LahanParkirController@store")->middleware(['auth'])->name('lahanParkirStore');;
Route::get('/lahan_parkir/edit/{id}', "App\Http\Controllers\LahanParkirController@edit")->middleware(['auth'])->name('lahanParkirEdit');
Route::POST('/lahan_parkir/update/{id}', "App\Http\Controllers\LahanParkirController@update")->middleware(['auth'])->name('lahanParkirUpdate');;

Route::POST('/gerbang_masuk', "App\Http\Controllers\TransaksiController@store")->middleware(['auth'])->name('transaksiStore');

Route::POST('/ruang_parkir', "App\Http\Controllers\TransaksiController@store")->middleware(['auth'])->name('ruangParkirStore');

Route::POST('/gerbang_keluar', "App\Http\Controllers\TransaksiController@store")->middleware(['auth'])->name('gerbangKeluarStore');

Route::get('/kendaraan_ada', function () {
    return view('kendaraan_ada');
});

Route::get('/laporan_kendaraan', "App\Http\Controllers\LaporanKendaraanController@index")->middleware(['auth'])->name('laporanKendaraan');

Route::get('/laporan', "App\Http\Controllers\LaporanController@index")->middleware(['auth'])->name('laporan');


