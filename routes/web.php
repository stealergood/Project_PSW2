<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AutentController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\RegistrasiController;
use App\Http\Controllers\AdminProdukController;
use App\Http\Controllers\AdminCustomerController;
use App\Http\Controllers\CaraPemesananController;
use App\Http\Controllers\AdminPemesananController;
use App\Http\Controllers\AdminEditProdukController;
use App\Http\Controllers\AdminHalamanAboutController;
use App\Http\Controllers\AdminHalamanUtamaController;
use App\Http\Controllers\AdminTambahProdukController;
use App\Http\Controllers\AdminDetailPesananController;
use App\Http\Controllers\AdminHalamanBerandaController;

/*
|--------------------------------------------------------------------------
| Web Routes
|-------------------------------------- ------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// get 
Route::get('/login',[AutentController::class, 'login']);
Route::get('/register',[RegistrasiController::class, 'daftar']);
Route::get('/produk',[ProdukController::class, 'produk']);
Route::get('/keranjang',[KeranjangController::class, 'keranjang']);
Route::get('/',[IndexController::class, 'index']);
Route::get('/about',[AboutController::class, 'about']);
Route::get('/carapemesanan',[CaraPemesananController::class, 'carapemesanan']);
Route::get('/checkout',[CheckoutController::class, 'checkout']);


// get Admin
Route::get('/admin/index',[AdminLoginController::class, 'index']);   
Route::get('/admin/halaman_utama',[AdminHalamanUtamaController::class, 'halaman_utama']);
Route::get('/admin/halaman_beranda',[AdminHalamanBerandaController::class, 'halaman_beranda']);
Route::get('/admin/halaman_about',[AdminHalamanAboutController::class, 'halaman_about']);
Route::get('/admin/m_produk',[AdminProdukController::class, 'm_produk']);
Route::get('/admin/m_customer',[AdminCustomerController::class, 'm_customer']);
Route::get('/admin/produksi',[AdminPemesananController::class, 'produksi']);
Route::get('/admin/tm_produk',[AdminTambahProdukController::class, 'tm_produk']);
Route::get('/admin/detailorder',[AdminDetailPesananController::class, 'detailorder']);
Route::get('/admin/edit_produk',[AdminEditProdukController::class, 'edit_produk']);



// post
Route::post('/register/proses',[RegistrasiController::class, 'store']);
Route::post('/login/proses',[AutentController::class, 'Masuk']);
Route::post('/logout',[AutentController::class, 'logout']);

// post
Route::post('/admin/proses/tm_produk',[AdminTambahProdukController::class, 'menambahproduk']);

