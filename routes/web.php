<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FinancialController;
use App\Http\Controllers\MentorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [LandingPageController::class, 'index'])->name('landingpage');
Route::get('/faq', [LandingPageController::class, 'faq'])->name('faq');
Route::get('/faq1', [LandingPageController::class, 'faq'])->name('faq');
Route::get('/kebijakan-privasi', [LandingPageController::class, 'kebijakan'])->name('kebijakan');
Route::get('/syarat-dan-ketentuan', [LandingPageController::class, 'syarat'])->name('syarat');
Route::get('/dalam-pengembangan', [LandingPageController::class, 'pengembangan'])->name('dalampengembangan');
Route::get('/gakada', [LandingPageController::class, 'gakada'])->name('gakada');


Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'login')->name('login');
    Route::get('/register', 'register')->name('register');
    Route::get('/register-mentor', 'register_mentor')->name('register-mentor');
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/register-customer-process', 'register_customer_process')->name('register_customer_process');
    Route::post('/register-mentor-process', 'register_mentor_process')->name('register_mentor_process');
    Route::post('/login-auth', 'login_auth')->name('login_auth');
    Route::get('/verify-account', 'verify_account')->name('verify_account');
    Route::post('/change-profile', 'change_profile')->name('change_profile');
    Route::post('/change-picture', 'change_picture')->name('change_picture');
    Route::post('/logout', 'logout')->name('logout');
    Route::post('/payment-callback','payment_callback')->name('payment_callback');
});


Route::middleware(['admin'])->controller(AdminController::class)->group(function () {
    Route::get('/admin/dashboard', 'view_dashboard')->name('admin.menu.dashboard');
    Route::get('/admin/profile', 'view_profile')->name('admin.profile');
    Route::get('/admin/review', 'view_review')->name('admin.menu.review');
    Route::get('/admin/review/detail', 'view_detail_review')->name('admin.menu.review.detail_pemesanan');
    Route::post('/admin/review/process/{id}', 'process_review')->name('admin.menu.review.process');
});

Route::middleware(['financial'])->controller(FinancialController::class)->group(function () {
    Route::get('/financial/dashboard', 'view_dashboard')->name('financial.menu.dashboard');
    Route::get('/financial/profile', 'view_profile')->name('financial.profile');
    Route::get('/financial/rekap', 'view_rekap')->name('financial.menu.rekap');
});


Route::middleware(['mentor'])->controller(MentorController::class)->group(function () {
    Route::get('/mentor/dashboard', 'view_dashboard')->name('mentor.menu.dashboard');
    Route::get('/mentor/pemesanan/', 'view_pemesanan')->name('mentor.menu.pemesanan');
    Route::post('/mentor/penyerahan-pesanan/upload/{id}', 'upload_projek')->name('mentor.project.upload');
    Route::get('/mentor/penyerahan-pesanan/pengerjaan-pemesanan', 'view_pengerjaan_pemesanan')->name('mentor.menu.penyerahan-pesanan.pengerjaan_pemesanan');
    Route::post('/mentor/penyerahan-pesanan/pengerjaan-pemesanan-update', 'update_pengerjaan_pemesanan')->name('mentor.menu.penyerahan-pesanan.pengerjaan_pemesanan.update');
    Route::get('/mentor/pemesanan/detail-pemesanan/{id}', 'view_detail_pemesanan')->name('mentor.menu.pemesanan.detail_pemesanan');
    Route::get('/mentor/pemesanan/ambil/{id}', 'ambil_pemesanan')->name('mentor.menu.pemesanan.ambil');
    Route::post('/mentor/pemesanan/detail-pemesanan/json', 'detail_pemesanan')->name('mentor.menu.pemesanan.get');
    Route::post('/mentor/negosiasi/send', 'kirim_pesan')->name('mentor.menu.negosiasi.send');
    Route::get('/mentor/pembayaran/', 'view_pembayaran')->name('mentor.menu.pembayaran');
    Route::get('/mentor/pembayaran/tambah', 'view_pembayaran_tambah')->name('mentor.menu.pembayaran.tambah');
    Route::get('/mentor/pembayaran/preview', 'view_pembayaran_preview')->name('mentor.menu.pembayaran.bukti_pembayaran');
    Route::get('/mentor/profile', 'view_profile')->name('mentor.profile');
    Route::get('/mentor/pemesanan/negosiasi', 'view_nego')->name('mentor.menu.nego');
    Route::get('/mentor/penyerahan-pesanan', 'view_penyerahan')->name('mentor.menu.penyerahan-pesanan');
    Route::get('/mentor/pemesanan/tambah-kontrak/{id}', 'view_tambahkontrak')->name('mentor.menu.pemesanan.tambah-kontrak');
    Route::post('/mentor/pemesanan/proses-tambah-kontrak', 'create_kontrak')->name('mentor.menu.pemesanan.proses-tambah-kontrak');
    Route::get('/mentor/pemesanan/detail-kontrak/{id}', 'view_detailkontrak')->name('mentor.menu.pemesanan.detail-kontrak');
});

Route::middleware(['customer'])->controller(CustomerController::class)->group(function () {
    Route::get('/customer/dashboard', 'view_dashboard')->name('customer.menu.dashboard');
    Route::get('/customer/pemesanan/', 'view_pemesanan')->name('customer.menu.pemesanan');
    Route::get('/customer/pemesanan/form-pemesanan', 'view_form_pemesanan')->name('customer.menu.pemesanan.form_pemesanan');
    Route::post('/customer/pemesanan/buat-pemesanan', 'create_pemesanan')->name('customer.menu.pemesanan.create');
    Route::post('/customer/pemesanan/detail-pemesanan/json', 'detail_pemesanan')->name('customer.menu.pemesanan.get');
    Route::post('/customer/negosiasi/send', 'kirim_pesan')->name('customer.menu.negosiasi.send');
    Route::get('/customer/pemesanan/detail-pemesanan/{id}', 'view_detail_pemesanan')->name('customer.menu.pemesanan.detail_pemesanan');
    Route::get('/customer/pembayaran/', 'view_pembayaran')->name('customer.menu.pembayaran');
    Route::get('/customer/pembayaran/checkout', 'view_pembayaran_checkout')->name('customer.menu.pembayaran.checkout');
    Route::post('/customer/pembayaran/proses', 'proses_pembayaran')->name('customer.menu.pembayaran.process');
    Route::get('/customer/pembayaran/preview', 'view_pembayaran_preview')->name('customer.menu.pembayaran.bukti_pembayaran');
    Route::get('/customer/profile', 'view_profile')->name('customer.profile');
    Route::get('/customer/pemesanan/negosiasi', 'view_nego')->name('customer.menu.nego');
    Route::get('/customer/penyerahan-pesanan/review', 'view_review')->name('customer.menu.penyerahan-pesanan.review');
    Route::get('/customer/pemesanan/persetujuan-kontrak', 'persetujuan_kontrak')->name('customer.menu.pemesanan.persetujuan_kontrak');
    Route::get('/customer/pemesanan/detail-kontrak/{id}', 'view_detailkontrak')->name('customer.menu.pemesanan.detail-kontrak');
    Route::get('/customer/penyerahan-pesanan', 'view_penyerahan')->name('customer.menu.penyerahan-pesanan');
});
