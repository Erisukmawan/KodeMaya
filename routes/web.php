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

Route::middleware(['admin'])->controller(AdminController::class)->group(function() {
    Route::get('/admin/dashboard', 'view_dashboard')->name('admin.menu.dashboard');
    Route::get('/admin/users', 'view_manage_users')->name('admin.menu.users');
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
});