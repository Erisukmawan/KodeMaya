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
Route::get('/kebijakan-privasi', [LandingPageController::class, 'kebijakan'])->name('kebijakan');
Route::get('/syarat-dan-ketentuan', [LandingPageController::class, 'syarat'])->name('syarat');


// Route::get('/list-dir', function() {
//     $folder = env('GOOGLE_DRIVE_FOLDER');
//     $listDir = collect(Storage::disk('google')->listContents($folder, true));

//     return $listDir;
// });

// Route::get('/list-files', function() {
//     // The human readable folder name to get the contents of...
//     // For simplicity, this folder is assumed to exist in the root directory.
//     // $folder = '17MLpOnKad2ren9enhC2jYV7Y0uKIhxky';
//     // $filePath = 'KodeMaya Files/Document/Kodemaya Mentor.zip';
//     // $filePath = '1CGtusA0vlbxRyWXFCsCizZuE6uYmzGIc/1OezXwRST-KXI6DmVuybmMXOu2hdwrIZ5/Kodemaya Mentor.zip';
//     $fileId = '1OezXwRST-KXI6DmVuybmMXOu2hdwrIZ5/1a9eK0-SohO8wb5GWVxPQu13gJVpp3U2h';
//     // Get directory contents...
//     // $files = collect(Storage::disk('google')->listContents($folder, true));
//     // $files = Storage::disk('google')->allFiles($folder);
//     // $files = Storage::disk('google')->get($fileId);
//     // $files = Storage::disk('google')->getAdapter()->getMetadata($fileId);

//     return $files;
//     // return $files->mapWithKeys(function($file) {
//     //     return [$file->path() => pathinfo($file->path(),PATHINFO_BASENAME)];
//     // });
// });

// Route::get('/create-dir', function() {
//     Storage::disk('google')->makeDirectory('/1TIGPlwR94tafFHQfg9uNYmF_sLhB8UXT/Test Dir');
//     return 'Directory was created in Google Drive';
// });

Route::controller(LoginRegisterController::class)->group(function () {
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/register', 'register')->name('register');
    Route::get('/register-mentor', 'register_mentor')->name('register-mentor');
    Route::get('/verify', 'verify')->name('verify');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/register-customer-process', 'register_customer_process')->name('register_customer_process');
    Route::post('/register-mentor-process', 'register_mentor_process')->name('register_mentor_process');
    Route::post('/login-auth', 'login_auth')->name('login_auth');
    Route::get('/verify-account', 'verify_account')->name('verify_account');
    Route::post('/change-profile', 'change_profile')->name('change_profile');
    Route::post('/change-picture', 'change_picture')->name('change_picture');
});


Route::middleware(['admin'])->controller(AdminController::class)->group(function () {
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
    Route::get('/admin/profile', 'view_profile')->name('admin.profile');
    Route::get('/admin/review', 'view_review')->name('admin.menu.review');
    Route::get('/admin/review/detail', 'view_detail')->name('admin.menu.review.detail_pemesanan');
});

Route::middleware(['financial'])->controller(FinancialController::class)->group(function () {
    Route::get('/financial/dashboard', 'view_dashboard')->name('financial.menu.dashboard');
    Route::get('/financial/profile', 'view_profile')->name('financial.profile');
    Route::get('/financial/rekap', 'view_rekap')->name('financial.menu.rekap');
});


Route::middleware(['mentor'])->controller(MentorController::class)->group(function () {
    Route::get('/mentor/dashboard', 'view_dashboard')->name('mentor.menu.dashboard');
    Route::get('/mentor/pemesanan/', 'view_pemesanan')->name('mentor.menu.pemesanan');
    Route::get('/mentor/penyerahan-pesanan/pengerjaan-pemesanan', 'view_pengerjaan_pemesanan')->name('mentor.menu.penyerahan-pesanan.pengerjaan_pemesanan');
    Route::get('/mentor/pemesanan/detail-pemesanan', 'view_detail_pemesanan')->name('mentor.menu.pemesanan.detail_pemesanan');
    Route::get('/mentor/pembayaran/', 'view_pembayaran')->name('mentor.menu.pembayaran');
    Route::get('/mentor/pembayaran/tambah', 'view_pembayaran_tambah')->name('mentor.menu.pembayaran.tambah');
    Route::get('/mentor/pembayaran/preview', 'view_pembayaran_preview')->name('mentor.menu.pembayaran.bukti_pembayaran');
    Route::get('/mentor/profile', 'view_profile')->name('mentor.profile');
    Route::get('/mentor/pemesanan/negosiasi', 'view_nego')->name('mentor.menu.nego');
    Route::get('/mentor/penyerahan-pesanan', 'view_penyerahan')->name('mentor.menu.penyerahan-pesanan');
    Route::get('/mentor/pemesanan/tambah-kontrak', 'view_tambahkontrak')->name('mentor.menu.pemesanan.tambah-kontrak');
});

Route::middleware(['customer'])->controller(CustomerController::class)->group(function () {
    Route::get('/customer/dashboard', 'view_dashboard')->name('customer.menu.dashboard');
    Route::get('/customer/pemesanan/', 'view_pemesanan')->name('customer.menu.pemesanan');
    Route::get('/customer/pemesanan/form-pemesanan', 'view_form_pemesanan')->name('customer.menu.pemesanan.form_pemesanan');
    Route::get('/customer/pemesanan/detail-pemesanan', 'view_detail_pemesanan')->name('customer.menu.pemesanan.detail_pemesanan');
    Route::get('/customer/pembayaran/', 'view_pembayaran')->name('customer.menu.pembayaran');
    Route::get('/customer/pembayaran/checkout', 'view_pembayaran_checkout')->name('customer.menu.pembayaran.checkout');
    Route::get('/customer/pembayaran/preview', 'view_pembayaran_preview')->name('customer.menu.pembayaran.bukti_pembayaran');
    Route::get('/customer/profile', 'view_profile')->name('customer.profile');
    Route::get('/customer/pemesanan/negosiasi', 'view_nego')->name('customer.menu.nego');
    Route::get('/customer/penyerahan-pesanan/review', 'view_review')->name('customer.menu.penyerahan-pesanan.review');
    Route::get('/customer/pemesanan/detail-kontrak', 'view_detailkontrak')->name('customer.menu.pemesanan.detail-kontrak');
    Route::get('/customer/penyerahan-pesanan', 'view_penyerahan')->name('customer.menu.penyerahan-pesanan');
});
