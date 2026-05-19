<?php

<<<<<<< HEAD
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\KRSController;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('pages.dashboard');
});
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa');
Route::get('/mahasiswa/create', [MahasiswaController::class, 'create'])->name('form-mhs');
Route::post('/mahasiswa/store', [MahasiswaController::class, 'store'])->name('mahasiswastore');
Route::get('/mahasiswa/{npm}/edit', [MahasiswaController::class, 'edit'])->name('form-edit-mhs');
Route::put('/mahasiswa/{npm}', [MahasiswaController::class, 'update'])->name('mahasiswaupdate');
Route::delete('/mahasiswa/{npm}', [MahasiswaController::class, 'destroy'])->name('mahasiswa.delete');
Route::get('/show/{npm}/detail-mahasiswa', [mahasiswaController::class, 'show'])->name('detail-mahasiswa');

Route::get('/dosen', [DosenController::class, 'index'])->name('dosen');
Route::get('/dosen/create', [DosenController::class, 'create'])->name('form-dosen');
Route::post('/dosen/store', [DosenController::class, 'store'])->name('dosenstore');
Route::get('/dosen/{nidn}/edit', [DosenController::class, 'edit'])->name('form-edit-dosen');
Route::put('/dosen/{nidn}', [DosenController::class, 'update'])->name('dosenupdate');
Route::delete('/dosen/{nidn}', [DosenController::class, 'destroy'])->name('dosen.delete');
Route::get('/show/{nidn}/detail-dosen', [DosenController::class, 'show'])->name('detail-dosen');


Route::get('/matkul', [MatakuliahController::class, 'index'])->name('matkul');
Route::get('/matkul/create', [MatakuliahController::class, 'create'])->name('form-matkul');
Route::post('/matkul/store', [MatakuliahController::class, 'store'])->name('matkulstore');
Route::get('/matkul/{kode_matakuliah}/edit', [MatakuliahController::class, 'edit'])->name('form-edit-matkul');
Route::put('/matkul/{kode_matakuliah}', [MatakuliahController::class, 'update'])->name('matkulupdate');
Route::delete('/matkul/{kode_matakuliah}', [MatakuliahController::class, 'destroy'])->name('matkul.delete');
Route::get('/show/{kode_matakuliah}/detail-matakuliah', [MataKuliahController::class, 'show'])->name('detail-matakuliah');


Route::get('/jadwal', [JadwalController::class, 'index'])->name('jadwal');
Route::get('/jadwal/create', [JadwalController::class, 'create'])->name('form-jadwal');
Route::post('/jadwal/store', [JadwalController::class, 'store'])->name('jadwalstore');
Route::get('/jadwal/{id}/edit', [JadwalController::class, 'edit'])->name('form-edit-jadwal');
Route::put('/jadwal/{id}', [JadwalController::class, 'update'])->name('jadwalupdate');
Route::delete('/jadwal/{id}', [JadwalController::class, 'destroy'])->name('jadwal.delete');
Route::get('/show/{id}/detail-jadwal', [JadwalController::class, 'show'])->name('detail-jadwal');


Route::get('/krs', [KRSController::class, 'index'])->name('krs');
Route::get('/krs/create', [KRSController::class, 'create'])->name('form-krs');
Route::post('/krs/store', [KRSController::class, 'store'])->name('krsstore');
Route::get('/krs/{id}/edit', [KRSController::class, 'edit'])->name('form-edit-krs');
Route::put('/krs/{id}', [KRSController::class, 'update'])->name('krsupdate');
Route::delete('/krs/{id}', [KRSController::class, 'destroy'])->name('krs.delete');
Route::get('/show/{id}/detail-krs', [KRSController::class, 'show'])->name('detail-krs');
=======
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AlamatController;

Route::get('/',[HomeController::class,'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/Contact',[ContactController::class,'index']);
Route::get('/Product',[ProductController::class,'index']);
Route::get('/Alamat',[AlamatController::class,'index']);

// Route::get('/', function () {
//     return view('/home');
// });
>>>>>>> 37c6f6978ff17b3f5292bc531f2db3a8b36a6101
