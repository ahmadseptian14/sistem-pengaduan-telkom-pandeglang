<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\KritikController;
use App\Http\Controllers\TeknisiController;
use App\Http\Controllers\PengaduanController;
use App\Http\Controllers\PenilaianController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\TanggapanController;
use App\Http\Controllers\TanggapanKritikController;
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
Route::get('/pengaduan', [PengaduanController::class, 'pengaduan'])->name('pengaduan');



Route::middleware(['auth'])->group(function () {
    Route::post('/pengaduan', [PengaduanController::class, 'store'])->name('pengaduan.store');
    Route::get('/input-pengaduan', [PengaduanController::class, 'create'])->name('pengaduan.create');
    Route::get('/pengaduan-pelanggan', [PengaduanController::class, 'pengaduan_pelanggan'])->name('pengaduan.pelanggan');
    Route::get('/detail-pengaduan/{id}', [PengaduanController::class, 'detail_pengaduan'])->name('pengaduan.detail');


    // Penilaian
    Route::get('/input-penilaian/{id}', [PenilaianController::class, 'create'])->name('penilaian.create');
    Route::post('/create-penilaian', [PenilaianController::class, 'store'])->name('penilaian.store');

    // Kritik Saran
    Route::get('/kritik-saran', [KritikController::class, 'index'])->name('kritik.index');
    Route::get('/input-kritik-saran', [KritikController::class, 'create'])->name('kritik.create');
    Route::post('/kritik-saran-store', [KritikController::class, 'store'])->name('kritik.store');

});


Route::prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    // Dashboard
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard.index');

    // Pengaduan
    Route::get('/pengaduan', [PengaduanController::class, 'index'])->name('pengaduan.index');
    Route::get('/pengaduan-belum-diproses', [PengaduanController::class, 'belum_diproses'])->name('pengaduan.belumdiproses');
    Route::get('/pengaduan-sedang-diproses', [PengaduanController::class, 'sedang_diproses'])->name('pengaduan.sedangdiproses');
    Route::get('/pengaduan-selesai', [PengaduanController::class, 'selesai'])->name('pengaduan.selesai');
    Route::get('/detail-pengaduan/{id}', [PengaduanController::class, 'show'])->name('pengaduan.show');
    Route::delete('/pengaduan/{id}', [PengaduanController::class, 'destroy'])->name('pengaduan.destroy');
    Route::get('/cetak-laporan', [PengaduanController::class, 'cetakForm'])->name('cetak.form');
    Route::get('/cetak-laporan-pengaduan', [PengaduanController::class, 'cetakLaporan'])->name('cetak.laporan');


    // Tanggapan
    Route::get('/tanggapan/{id}', [TanggapanController::class, 'show'])->name('tanggapan.show');
    Route::post('/tanggapan', [TanggapanController::class, 'store'])->name('tanggapan.store');

    // Tanggapan kritik
    Route::get('/tanggapan-kritik/{id}', [TanggapanKritikController::class, 'show'])->name('tanggapan-kritik.show');
    Route::post('/tanggapan-kritik', [TanggapanKritikController::class, 'store'])->name('tanggapan-kritik.store');

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

    // teknisi
    Route::get('/teknisi', [TeknisiController::class, 'index'])->name('teknisi.index');
    Route::get('/create-teknisi', [TeknisiController::class, 'create'])->name('teknisi.create');
    Route::post('/create-teknisi-store', [TeknisiController::class, 'store'])->name('teknisi.store');
    Route::get('/edit-teknisi/{id}', [TeknisiController::class, 'edit'])->name('teknisi.edit');
    Route::put('/edit-teknisi/{id}', [TeknisiController::class, 'update'])->name('teknisi.update');
    Route::delete('/teknisi-delete/{id}', [TeknisiController::class, 'destroy'])->name('teknisi.destroy');

    //Penilaian
    Route::get('/penilaian', [PenilaianController::class, 'index'])->name('penilaian.index');

    //SMS
    Route::get('/sms/{id}', [SmsController::class, 'create'])->name('sms.create');
    Route::post('/send-sms', [SmsController::class, 'store'])->name('sms.store');

    // Kritik
    Route::get('/kritik-saran', [KritikController::class, 'admin_index'])->name('kritik.admin.index');

});


Auth::routes();
