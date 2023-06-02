<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LandingPageController;
use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', 'index')->name('admin');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/dashboard', 'dashboard')->name('dashboard');

    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    Route::post('/logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function() {
    Route::get('/admin/dashboard', 'view_dashboard')->name('admin.dashboard');
    Route::get('/admin/users', 'view_manage_users')->name('admin.users');
    Route::get('/admin/pricing', 'view_manage_pricing')->name('admin.pricing');
    Route::get('/admin/enum', 'view_manage_enum')->name('admin.enum');
    Route::get('/admin/notification', 'view_notification')->name('admin.notification');
    Route::get('/admin/income', 'view_income')->name('admin.income');
    Route::get('/admin/disbursement', 'view_disbursement')->name('admin.disbursement');
    Route::get('/admin/transactions', 'view_transactions')->name('admin.transactions');
    Route::get('/admin/tulung/post', 'view_tulung_post')->name('admin.tulung.post');
    Route::get('/admin/tulung/task', 'view_tulung_task')->name('admin.tulung.task');
    Route::get('/admin/tulung/history', 'view_tulung_history')->name('admin.tulung.history');
    Route::get('/admin/consultation/post', 'view_consultation_post')->name('admin.consultation.post');
    Route::get('/admin/consultation/task', 'view_consultation_task')->name('admin.consultation.task');
    Route::get('/admin/consultation/history', 'view_consultation_history')->name('admin.consultation.history');
});