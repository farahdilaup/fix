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

Route::get('/admin', function () {
    return view('indexadmin');
});
use App\Http\Controllers\C_publik;
Route::get('/anggota','C_publik@anggotaindex');
Route::get('/asal','C_publik@asalindex');
Route::get('/buku','C_publik@bukuindex');
Route::get('/buku1','C_publik@bukuindex1');
Route::get('/bahasa','C_publik@bahasaindex');
Route::get('/pegawai','C_publik@pegawaiindex');
Route::get('/penerbit','C_publik@penerbitindex');
Route::get('/anggotaa','C_publik@anggotaindex');
Route::get('/eksemplar','C_publik@eksindex');
Route::get('/jenis','C_publik@jenisindex');
Route::get('/peminjaman','C_publik@peminjamanindex');
Route::get('/peminjaman/cetak_pdf', 'C_publik@cetakpinjam_pdf');
Route::get('/penerimaan','C_publik@penerimaanindex');
Route::get('/penerimaan/cetak_pdf', 'C_publik@cetakterima_pdf');
Route::get('/detterima','C_publik@detterimaindex');
Route::get('/detpinjam','C_publik@detpinjamindex');
Route::get('/detpinjam1','C_publik@detpinjamindex1');
Route::get('/penggantian','C_publik@penggantianindex');
Route::get('/penggantian/cetak_pdf', 'C_publik@cetakganti_pdf');

Route::get('/buku/tambah','C_publik@tambahbuku');
Route::get('/buku/store','C_publik@storebuku');
Route::get('/eksemplar/tambah','C_publik@tambaheks');
Route::get('/eksemplar/store','C_publik@storeeks');
Route::get('/penerbit/tambah','C_publik@tambahpenerbit');
Route::get('/penerbit/store','C_publik@storepenerbit');
Route::get('/anggota/tambah','C_publik@tambahanggota');
Route::get('/anggota/store','C_publik@storeanggota');
Route::get('/penerimaan/tambah','C_publik@tambahpenerimaan');
Route::get('/penerimaan/store','C_publik@storepenerimaan');
Route::get('/peminjaman/tambah','C_publik@tambahpeminjaman');
Route::get('/peminjaman/store','C_publik@storepeminjaman');
Route::get('/detpinjam/tambah','C_publik@tambahdetpinjam');
Route::get('/detpinjam/store','C_publik@storedetpinjam');
Route::get('/detpinjam/tambah1','C_publik@tambahdetpinjam1');
Route::get('/detpinjam/store1','C_publik@storedetpinjam1');
Route::get('/detterima/tambah','C_publik@tambahdetterima');
Route::get('/detterima/store','C_publik@storedetterima');
Route::get('/penggantian/tambah','C_publik@tambahpenggantian');
Route::get('/penggantian/store','C_publik@storepenggantian');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout',function(){
    Auth::logout();
    return  redirect ('/login');
});

use App\Http\Controllers\C_transaksi;
Route::get('/eksemplar/edit/{id}','C_transaksi@editeks');
Route::get('/eksemplar/update','C_transaksi@updateeks');
Route::get('/eksemplar/hapus/{id}','C_transaksi@hapuseks');

Route::get('/buku/edit/{id}','C_transaksi@editbuku');
Route::get('/buku/update','C_transaksi@updatebuku');
Route::get('/buku/hapus/{id}','C_transaksi@hapusbuku');

Route::get('/detpinjam/edit/{id}','C_transaksi@editdetpinjam');
Route::get('/detpinjam/update','C_transaksi@updatedetpinjam');
Route::get('/detpinjam/edit1/{id}','C_transaksi@editdetpinjam1');
Route::get('/detpinjam/update1','C_transaksi@updatedetpinjam1');
Route::get('/detpinjam/hapus/{id}','C_transaksi@hapusdetpinjam');

Route::get('/detterima/edit/{id}','C_transaksi@editdetterima');
Route::get('/detterima/update','C_transaksi@updatedetterima');
Route::get('/detterima/hapus/{id}','C_transaksi@hapusdetterima');

Route::get('/penerbit/edit/{id}','C_transaksi@editpenerbit');
Route::get('/penerbit/update','C_transaksi@updatepenerbit');
Route::get('/penerbit/hapus/{id}','C_transaksi@hapuspenerbit');

Route::get('/penerimaan/edit/{id}','C_transaksi@editpenerimaan');
Route::get('/penerimaan/update','C_transaksi@updatepenerimaan');
Route::get('/penerimaan/hapus/{id}','C_transaksi@hapuspenerimaan');

Route::get('/peminjaman/edit/{id}','C_transaksi@editpeminjaman');
Route::get('/peminjaman/update','C_transaksi@updatepeminjaman');
Route::get('/peminjaman/hapus/{id}','C_transaksi@hapuspeminjaman');

Route::get('/penggantian/edit/{id}','C_transaksi@editpenggantian');
Route::get('/penggantian/update','C_transaksi@updatepenggantian');
Route::get('/penggantian/hapus/{id}','C_transaksi@hapuspenggantian');

Route::get('/masuk', 'C_auth_login@preLogin');
Route::post('/post_masuk', 'C_auth_login@postLogin');
Route::get('/regis', 'C_auth_login@preRegister');
Route::post('/post_regis', 'C_auth_login@postRegister');
Route::get('/logout', 'C_auth_login@Logout');

Route::get('/admin', function () {
    return view('indexadmin');
});

Route::get('/anggota', function () {
    return view('indexanggota');
});





