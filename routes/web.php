<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\SmsController;
use App\Models\Pengaduan;
use Illuminate\Support\Facades\Auth;
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

// Halaman Utama
Route::get('/', [HomeController::class, 'index'])->name('home');



Route::middleware(['auth'])->group(function () {
    Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
    Route::get('/input-pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
    Route::get('/pengaduan-pelanggan', [PengaduanController::class, 'pengaduan_pelanggan'])->name('pengaduan.pelanggan');
    Route::get('/detail-pengaduan/{id}', [PengaduanController::class, 'detail_pengaduan'])->name('pengaduan.detail');


    // Penilaian
    Route::get('/input-penilaian/{id}', [PenilaianController::class, 'create'])->name('penilaian.create');
    Route::post('/create-penilaian', [PenilaianController::class, 'store'])->name('penilaian.store');

});


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    // Pengaduan
    Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');
    Route::get('/detail-pengaduan/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');
    Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');
    Route::get('/cetak-laporan', [PengaduanController::class, 'cetakForm'])->name('cetak.form');
    Route::get('/cetak-laporan-pengaduan', [PengaduanController::class, 'cetakLaporan'])->name('cetak.laporan');


    // Tanggapan
    Route::get('/tanggapan/{id}', [TanggapanController::class, 'show'])->name('tanggapan.show');
    Route::post('/tanggapan', [TanggapanController::class, 'store'])->name('tanggapan.store');

    // Petugas
    Route::get('/petugas', [PetugasController::class, 'index'])->name('petugas.index');
    Route::get('create-petugas', [PetugasController::class, 'create'])->name('petugas.create');
    Route::post('/create-petugas', [PetugasController::class, 'store'])->name('petugas.store');

    // customer
    Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
    Route::get('/create-customer', [CustomerController::class, 'create'])->name('customer.create');
    Route::post('/create-customer-store', [CustomerController::class, 'store'])->name('customer.store');
    Route::get('/edit-customer/{id}', [CustomerController::class, 'edit'])->name('customer.edit');
    Route::put('/edit-customer/{id}', [CustomerController::class, 'update'])->name('customer.update');
    Route::delete('/customer-delete/{id}', [CustomerController::class, 'destroy'])->name('customer.destroy');

    //Penialain
    Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');

    //SMS
    Route::get('/sms/{id}', [SmsController::class, 'create'])->name('sms.create');
    Route::post('/send-sms', [SmsController::class, 'store'])->name('sms.store');
});



Auth::routes();
