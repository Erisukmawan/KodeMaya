<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CustomerController;
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

Route::get('/',[LandingPageController::class, 'index'])->name('landingpage');

// Route::get('/list-files', function() {
//     // The human readable folder name to get the contents of...
//     // For simplicity, this folder is assumed to exist in the root directory.
//     $folder = '1TIGPlwR94tafFHQfg9uNYmF_sLhB8UXT';

//     // Get directory contents...
//     $files = collect(Storage::disk('google')->listContents($folder));
//     // $files = Storage::disk('google')->allFiles($folder);
//     // $file = Storage::disk('google')->get('1TIGPlwR94tafFHQfg9uNYmF_sLhB8UXT/1Vx1U_XaV5ueyc4YEfYg6O-nZb4SMK57i');

//     return $files;
//     // return $files->mapWithKeys(function($file) {
//     //     return [$file->path() => pathinfo($file->path(),PATHINFO_BASENAME)];
//     // });
// });

// Route::get('/create-dir', function() {
//     Storage::disk('google')->makeDirectory('/1TIGPlwR94tafFHQfg9uNYmF_sLhB8UXT/Test Dir');
//     return 'Directory was created in Google Drive';
// });

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/register', 'register')->name('register');
    Route::get('/verify', 'verify')->name('verify');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::middleware(['admin'])->controller(AdminController::class)->group(function() {
    Route::get('/admin/dashboard', 'view_dashboard')->name('admin.menu.dashboard');
    Route::get('/admin/users', 'view_manage_users')->name('admin.menu.users');
    Route::get('/admin/users/get', 'get_user')->name('admin.menu.users.get');
    Route::post('/admin/users/update', 'update_user')->name('admin.menu.users.update');
    Route::get('/admin/global', 'view_manage_global')->name('admin.menu.parameter.global');
    Route::get('/admin/global/get', 'get_global')->name('admin.menu.parameter.global.get');
    Route::post('/admin/global/add', 'add_global')->name('admin.menu.parameter.global.add');
    Route::post('/admin/global/update', 'update_global')->name('admin.menu.parameter.global.update');
    Route::post('/admin/global/delete', 'delete_global')->name('admin.menu.parameter.global.delete');
    Route::get('/admin/enum', 'view_manage_enum')->name('admin.menu.parameter.enum');
    Route::get('/admin/notification', 'view_notification')->name('admin.menu.notification');
    Route::get('/admin/income', 'view_income')->name('admin.finance.income');
    Route::get('/admin/disbursement', 'view_disbursement')->name('admin.finance.disbursement');
    Route::get('/admin/transactions', 'view_transactions')->name('admin.finance.transactions');
    Route::get('/admin/tulung/post', 'view_tulung_post')->name('admin.features.tulung.post');
    Route::get('/admin/tulung/task', 'view_tulung_task')->name('admin.features.tulung.task');
    Route::get('/admin/tulung/history', 'view_tulung_history')->name('admin.features.tulung.history');
    Route::get('/admin/consultation/post', 'view_consultation_post')->name('admin.features.consultation.post');
    Route::get('/admin/consultation/task', 'view_consultation_task')->name('admin.features.consultation.task');
    Route::get('/admin/consultation/history', 'view_consultation_history')->name('admin.features.consultation.history');
    Route::get('/admin/file-manager', 'view_file_manager')->name('admin.utility.file-manager');
});


Route::middleware(['mentor'])->controller(MentorController::class)->group(function() {
    Route::get('/mentor/dashboard', 'view_dashboard')->name('mentor.menu.dashboard');
    Route::get('/mentor/dashboard', 'view_dashboard')->name('mentor.menu.dashboard');
    Route::get('/mentor/pemesanan/', 'view_pemesanan')->name('mentor.menu.pemesanan');
    Route::get('/mentor/pemesanan/pengerjaan-pemesanan', 'view_pengerjaan_pemesanan')->name('mentor.menu.pemesanan.pengerjaan_pemesanan');
    Route::get('/mentor/pemesanan/detail-pemesanan', 'view_detail_pemesanan')->name('mentor.menu.pemesanan.detail_pemesanan');
    Route::get('/mentor/pembayaran/', 'view_pembayaran')->name('mentor.menu.pembayaran');
    Route::get('/mentor/pembayaran/tambah', 'view_pembayaran_tambah')->name('mentor.menu.pembayaran.tambah');
    Route::get('/mentor/pembayaran/preview', 'view_pembayaran_preview')->name('mentor.menu.pembayaran.bukti_pembayaran');
    Route::get('/mentor/kontrak', 'view_kontrak')->name('mentor.menu.kontrak');
    Route::get('/mentor/kontrak/detail-kontrak', 'view_detail_kontrak')->name('mentor.menu.kontrak.detail_kontrak');
    Route::get('/mentor/profile', 'view_profile')->name('mentor.profile');
    Route::get('/mentor/pemesanan/negosiasi', 'view_nego')->name('mentor.menu.nego');
});

Route::middleware(['customer'])->controller(CustomerController::class)->group(function() {
    Route::get('/customer/dashboard', 'view_dashboard')->name('customer.menu.dashboard');
    Route::get('/customer/pemesanan/', 'view_pemesanan')->name('customer.menu.pemesanan');
    Route::get('/customer/pemesanan/form-pemesanan', 'view_form_pemesanan')->name('customer.menu.pemesanan.form_pemesanan');
    Route::get('/customer/pemesanan/detail-pemesanan', 'view_detail_pemesanan')->name('customer.menu.pemesanan.detail_pemesanan');
    Route::get('/customer/pembayaran/', 'view_pembayaran')->name('customer.menu.pembayaran');
    Route::get('/customer/pembayaran/checkout', 'view_pembayaran_checkout')->name('customer.menu.pembayaran.checkout');
    Route::get('/customer/pembayaran/preview', 'view_pembayaran_preview')->name('customer.menu.pembayaran.bukti_pembayaran');
    Route::get('/customer/profile', 'view_profile')->name('customer.profile');
    Route::get('/customer/kontrak', 'view_kontrak')->name('customer.menu.kontrak');
    Route::get('/customer/kontrak/detail-kontrak', 'view_detail_kontrak')->name('customer.menu.kontrak.detail_kontrak');
});