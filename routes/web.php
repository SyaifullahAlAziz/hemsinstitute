<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\KontakCompanyController;
use App\Http\Controllers\Admin\SliderCompanyController;
use App\Http\Controllers\Admin\UserCompanyController;
use App\Http\Controllers\Admin\BeritaController;
use App\Http\Controllers\Admin\FeaturesController;
use App\Http\Controllers\Admin\CalonSiswaController;
use App\Http\Controllers\Admin\ArmadaController;
use App\Http\Controllers\Admin\PersyaratanProgramController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\GaleriController;
use App\Http\Controllers\Admin\PengurusController;
use App\Http\Controllers\Admin\GaleriVideoController;


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

Route::group(['prefix' => 'admin'], function () {
    Route::middleware(['belum_login'])->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('view_login_admin');
        Route::post('/aksilogin', [DashboardController::class, 'aksi_login_admin'])->name('aksi_login_admin');
    });

    Route::middleware(['sudah_login'])->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin_dashboard');
        Route::get('/logout', [DashboardController::class, 'aksi_logout_admin'])->name('aksi_logout_admin');

        // slider company
        Route::get('/slider-company', [SliderCompanyController::class, 'index'])->name('slider_company');
        Route::get('/slider-company/create', [SliderCompanyController::class, 'create'])->name('slider_company.create');
        Route::post('/slider-company', [SliderCompanyController::class, 'store'])->name('slider_company.store');
        Route::get('/slider-company-edit/{id}', [SliderCompanyController::class, 'edit'])->name('slider_company.edit');
        Route::post('/slider-company-update/{id}', [SliderCompanyController::class, 'update'])->name('slider_company.update');
        Route::delete('/slider-company/{slider}', [SliderCompanyController::class, 'destroy'])->name('slider_company.delete');

        // profile
        Route::get('/admin-profile', [ProfileController::class, 'index'])->name('admin-profile');
        Route::get('/admin-profile-tambah', [ProfileController::class, 'create'])->name('admin-profile-tambah');
        Route::post('/admin-profile-simpan', [ProfileController::class, 'store'])->name('admin-profile-simpan');
        Route::get('/admin-profile-edit/{id}', [ProfileController::class, 'edit'])->name('admin-profile-edit');
        Route::post('/admin-profile-update/{id}', [ProfileController::class, 'update'])->name('admin-profile-update');
        Route::delete('/admin-profile-hapus/{id}', [ProfileController::class, 'destroy'])->name('admin-profile-hapus');

        // profile pengurus
        Route::get('/admin-pengurus', [PengurusController::class, 'index'])->name('admin-pengurus');
        Route::get('/admin-pengurus-tambah', [PengurusController::class, 'create'])->name('admin-pengurus-tambah');
        Route::post('/admin-pengurus-simpan', [PengurusController::class, 'store'])->name('admin-pengurus-simpan');
        Route::get('/admin-pengurus-edit/{id}', [PengurusController::class, 'edit'])->name('admin-pengurus-edit');
        Route::post('/admin-pengurus-update/{id}', [PengurusController::class, 'update'])->name('admin-pengurus-update');
        Route::delete('/admin-pengurus-hapus/{id}', [PengurusController::class, 'destroy'])->name('admin-pengurus-hapus');

        // berita
        Route::get('/admin-berita', [BeritaController::class, 'index'])->name('admin-berita');
        Route::get('/admin-berita-tambah', [BeritaController::class, 'create'])->name('admin-berita-tambah');
        Route::post('/admin-berita-simpan', [BeritaController::class, 'store'])->name('admin-berita-simpan');
        Route::get('/admin-berita-edit/{id}', [BeritaController::class, 'edit'])->name('admin-berita-edit');
        Route::post('/admin-berita-update/{id}', [BeritaController::class, 'update'])->name('admin-berita-update');
        Route::delete('/admin-berita-hapus/{id}', [BeritaController::class, 'destroy'])->name('admin-berita-hapus');

        // user
        Route::get('/user-company', [UserCompanyController::class, 'index'])->name('user_company');

        //calon siswa
        Route::get('/calon-siswa', [CalonSiswaController::class, 'index'])->name('calon-siswa');
        Route::get('/detail-calon-siswa/{id}', [CalonSiswaController::class, 'detail'])->name('detail-calon-siswa');
        Route::delete('/hapus-calon-siswa/{id}', [CalonSiswaController::class, 'destroy'])->name('hapus-calon-siswa');

        // Armada
        Route::get('/admin-armada', [ArmadaController::class, 'index'])->name('admin-armada');
        Route::get('/tambah-armada', [ArmadaController::class, 'create'])->name('tambah-armada');
        Route::post('/simpan-armada', [ArmadaController::class, 'store'])->name('simpan-armada');
        Route::get('/edit-armada/{id}', [ArmadaController::class, 'edit'])->name('edit-armada');
        Route::post('/update-wisata/{id}', [ArmadaController::class, 'update'])->name('update-wisata');
        Route::delete('/hapus-armada/{armada}', [ArmadaController::class, 'destroy'])->name('hapus-armada');

        // Persyaratan Program
        Route::get('/admin-persyaratan-program', [PersyaratanProgramController::class, 'index'])->name('admin-persyaratan-program');
        Route::get('/tambah-persyaratan-program', [PersyaratanProgramController::class, 'create'])->name('tambah-persyaratan-program');
        Route::post('/simpan-persyaratan-program', [PersyaratanProgramController::class, 'store'])->name('simpan-persyaratan-program');
        Route::get('/edit-persyaratan-program/{id}', [PersyaratanProgramController::class, 'edit'])->name('edit-persyaratan-program');
        Route::post('/update-persyaratan-program/{id}', [PersyaratanProgramController::class, 'update'])->name('update-persyaratan-program');
        Route::delete('/hapus-persyaratan-program/{id}', [PersyaratanProgramController::class, 'destroy'])->name('hapus-persyaratan-program');

        // Galeri
        Route::get('/admin-galeri', [GaleriController::class, 'index'])->name('admin-galeri');
        Route::get('/tambah-galeri', [GaleriController::class, 'create'])->name('tambah-galeri');
        Route::post('/simpan-galeri', [GaleriController::class, 'store'])->name('simpan-galeri');
        Route::get('/edit-galeri/{galeri}', [GaleriController::class, 'edit'])->name('edit-galeri');
        Route::put('/update-galeri/{galeri}', [GaleriController::class, 'update'])->name('update-galeri');
        Route::delete('/hapus-galeri/{galeri}', [GaleriController::class, 'destroy'])->name('hapus-galeri');

        // Galeri Video
        Route::get('/admin-galeri-video', [GaleriVideoController::class, 'index'])->name('admin-galeri-video');
        Route::get('/tambah-galeri-video', [GaleriVideoController::class, 'create'])->name('tambah-galeri-video');
        Route::post('/simpan-galeri-video', [GaleriVideoController::class, 'store'])->name('simpan-galeri-video');
        Route::get('/edit-galeri-video/{galeri}', [GaleriVideoController::class, 'edit'])->name('edit-galeri-video');
        Route::post('/update-galeri-video/{galeri}', [GaleriVideoController::class, 'update'])->name('update-galeri-video');
        Route::delete('/hapus-galeri-video/{galeri}', [GaleriVideoController::class, 'destroy'])->name('hapus-galeri-video');


        // kontak
        Route::get('/admin-kontak', [KontakCompanyController::class, 'index'])->name('admin-kontak');
        Route::get('/tambah-kontak', [KontakCompanyController::class, 'create'])->name('tambah-kontak');
        Route::post('/simpan-kontak', [KontakCompanyController::class, 'store'])->name('simpan-kontak');
        Route::get('/edit-kontak/{kontak}', [KontakCompanyController::class, 'edit'])->name('edit-kontak');
        Route::put('/update-kontak/{kontak}', [KontakCompanyController::class, 'update'])->name('update-kontak');
        Route::delete('/hapus-kontak/{kontak}', [KontakCompanyController::class, 'destroy'])->name('hapus-kontak');

        // Features
        Route::get('/admin-features', [FeaturesController::class, 'index'])->name('admin-features');
        Route::get('/tambah-features', [FeaturesController::class, 'create'])->name('tambah-features');
        Route::post('/simpan-features', [FeaturesController::class, 'store'])->name('simpan-features');
        Route::get('/edit-features/{id}', [FeaturesController::class, 'edit'])->name('edit-features');
        Route::post('/update-features/{id}', [FeaturesController::class, 'update'])->name('update-features');
        Route::delete('/hapus-features/{id}', [FeaturesController::class, 'destroy'])->name('hapus-features');
    });
});

//tampilan front-end
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/profil', [HomeController::class, 'profil'])->name('profil');
Route::get('/program', [HomeController::class, 'program'])->name('program');
Route::get('/kategori-program/{nama}', [HomeController::class, 'kategori_program'])->name('kategori-program');
Route::get('/detail-program/{slug}', [HomeController::class, 'detail_program'])->name('detail-program');
Route::get('/kategori-wisata/{nama}', [HomeController::class, 'kategori_wisata'])->name('kategori-wisata');
Route::get('/detail-wisata/{slug}', [HomeController::class, 'detail_wisata'])->name('detail-wisata');
Route::get('/tampil-berita/{slug}', [HomeController::class, 'tampil_berita'])->name('tampil-berita');
Route::get('/berita', [HomeController::class, 'berita'])->name('berita');
Route::get('/detail-berita/{slug}', [HomeController::class, 'detail_berita'])->name('detail-berita');
Route::get('/payment', [HomeController::class, 'payment'])->name('payment');
Route::get('/kontak', [HomeController::class, 'kontak'])->name('kontak');
Route::get('/galeri', [HomeController::class, 'galeri'])->name('galeri');


// Route::get('/team', [HomeController::class, 'team'])->name('team');
