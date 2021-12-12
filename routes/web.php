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
    return redirect('/login');
});

Route::get('admin-page', function(){
    return 'Halaman Untuk Admin';
})->middleware('role:admin')->name('admin.page');

Route::get('user-page', function(){
    return 'Halama Untuk User';
})->middleware('role:user')->name('user.page');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('barang', [App\Http\Controllers\BarangController::class, 'index'])->name('barang.page');
Route::post('tambahbarang', [App\Http\Controllers\BarangController::class, 'tambahbarang'])->name('tambahbarang.page');
Route::get('/hapusbarang/{id}', [App\Http\Controllers\BarangController::class, 'hapusbarang'])->name('hapusbarang.page');
Route::get('/editbarang/{id}', [App\Http\Controllers\BarangController::class, 'editbarang'])->name('editbarang.page');
Route::post('updatebarang/', [App\Http\Controllers\BarangController::class, 'updatebarang'])->name('updatebarang.page');

Route::get('kategori', [App\Http\Controllers\KategoriController::class, 'index'])->name('kategori.page');
Route::post('tambahkategori', [App\Http\Controllers\KategoriController::class, 'tambahkategori'])->name('tambahkategori.page');
Route::get('/hapuskategori/{id}', [App\Http\Controllers\KategoriController::class, 'hapuskategori'])->name('hapuskategori.page');
Route::get('/editkategori/{id}', [App\Http\Controllers\KategoriController::class, 'editkategori'])->name('editkategori.page');
Route::post('updatekategori', [App\Http\Controllers\KategoriController::class, 'updatekategori'])->name('updatekategori.page');
