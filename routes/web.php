<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\TendikController;
use App\Http\Controllers\BimbinganController;
use App\Http\Controllers\KategoriKegiatanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BukuJurnalController;
use App\Http\Controllers\DokumenSarjanaController;
use App\Http\Controllers\DokumenMagisterController;
use App\Http\Controllers\DokumenDoktorController;
use App\Http\Controllers\CeritaController;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;


Route::get('/',[HomeController::class, 'index'])->name('home.index');

Route::get('/sambutan', [HomeController::class, 'sambutan'])->name('home.sambutan');
Route::get('/sejarah', [HomeController::class, 'sejarah'])->name('home.sejarah');
Route::get('/visimisi', [HomeController::class, 'visimisi'])->name('home.visimisi');
Route::get('/kriteria', [HomeController::class, 'kriteria'])->name('home.kriteria');
Route::get('/pernyataan', [HomeController::class, 'pernyataan'])->name('home.pernyataan');
Route::get('/dosen', [HomeController::class, 'dosen'])->name('home.dosen');
Route::get('/tendik', [HomeController::class, 'tendik'])->name('home.tendik');
Route::get('/beasiswa', [HomeController::class, 'beasiswa'])->name('home.beasiswa');
Route::get('/fasilitas', [HomeController::class, 'fasilitas'])->name('home.fasilitas');
Route::get('/berita/baca/{id}', [HomeController::class, 'detail'])->name('berita.baca');
Route::get('/kumpulan', [HomeController::class, 'kumpulan'])->name('berita.kumpulan');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
Route::get('/asrama', [HomeController::class, 'asrama'])->name('home.asrama');
Route::get('/perpus', [HomeController::class, 'perpus'])->name('home.perpus');
Route::get('/jogjaIstimewa', [HomeController::class, 'jogjaIstimewa'])->name('home.jogjaIstimewa');

//Route untuk frontend S1
Route::get('/profils1', [HomeController::class, 'profils1'])->name('home.profils1');
Route::get('/visis1', [HomeController::class, 'visis1'])->name('home.visis1');
Route::get('/tujuan', [HomeController::class, 'tujuan'])->name('home.tujuan');
Route::get('/konsentrasi', [HomeController::class, 'konsentrasi'])->name('home.konsentrasi');
Route::get('/unduhS1', [HomeController::class, 'unduhS1'])->name('home.unduhS1');

//Route untuk frontend S2
Route::get('/profils2', [HomeController::class, 'profils2'])->name('home.profils2');
Route::get('/visis2', [HomeController::class, 'visis2'])->name('home.visis2');
Route::get('/tujuans2', [HomeController::class, 'tujuans2'])->name('home.tujuans2');
Route::get('/konsentrasis2', [HomeController::class, 'konsentrasis2'])->name('home.konsentrasis2');
Route::get('/unduhS2', [HomeController::class, 'unduhS2'])->name('home.unduhS2');

//Route untuk frontend S3
Route::get('/profils3', [HomeController::class, 'profils3'])->name('home.profils3');
Route::get('/visis3', [HomeController::class, 'visis3'])->name('home.visis3');
Route::get('/tujuans3', [HomeController::class, 'tujuans3'])->name('home.tujuans3');
Route::get('/konsentrasis3', [HomeController::class, 'konsentrasis3'])->name('home.konsentrasis3');
Route::get('/unduhS3', [HomeController::class, 'unduhS3'])->name('home.unduhS3');

Route::get('/login',[AuthController::class,'index'])->name('auth.index')->middleware('guest');
Route::post('/login',[AuthController::class,'verify'])->name('auth.verify');

Route::group(['middleware' => 'auth'], function () {
    Route::prefix('admin')->group(function () {

        Route::get('/',[DashboardController::class,'index'])->name('dashboard.index');
        Route::post('/prosesTambah',[DashboardController::class,'prosesTambah'])->name('dashboard.prosesTambah');
        Route::get('/hapus/{id}',[DashboardController::class,'hapus'])->name('dashboard.hapus');

        Route::post('/tambahHeader',[DashboardController::class,'tambahHeader'])->name('dashboard.tambahHeader');
        Route::get('/hapusHeader/{id}',[DashboardController::class,'hapusHeader'])->name('dashboard.hapusHeader');

        Route::get('/kategori_kegiatan',[KategoriKegiatanController::class,'index'])->name('kategori_kegiatan.index');
        Route::post('/kategori_kegiatan/prosesTambah',[KategoriKegiatanController::class,'prosesTambah'])->name('kategori_kegiatan.prosesTambah');
        Route::post('/kategori_kegiatan/prosesUbah',[KategoriKegiatanController::class,'prosesUbah'])->name('kategori_kegiatan.prosesUbah');
        Route::get('/kategori_kegiatan/hapus/{id}',[KategoriKegiatanController::class,'hapus'])->name('kategori_kegiatan.hapus');

        Route::get('/berita',[BeritaController::class,'index'])->name('berita.index');
        Route::get('/berita/tambah',[BeritaController::class,'tambah'])->name('berita.tambah');
        Route::post('/berita/prosesTambah',[BeritaController::class,'prosesTambah'])->name('berita.prosesTambah');
        Route::get('/berita/ubah/{id}',[BeritaController::class,'ubah'])->name('berita.ubah');
        Route::post('/berita/prosesUbah',[BeritaController::class,'prosesUbah'])->name('berita.prosesUbah');
        Route::get('/berita/hapus/{id}',[BeritaController::class,'hapus'])->name('berita.hapus');

        Route::get('/dokumen_sarjana',[DokumenSarjanaController::class,'index'])->name('dokumen_sarjana.index');
        Route::post('/dokumen_sarjana/prosesTambah',[DokumenSarjanaController::class,'prosesTambah'])->name('dokumen_sarjana.prosesTambah');
        Route::post('/dokumen_sarjana/prosesUbah',[DokumenSarjanaController::class,'prosesUbah'])->name('dokumen_sarjana.prosesUbah');
        Route::get('/dokumen_sarjana/hapus/{id}',[DokumenSarjanaController::class,'hapus'])->name('dokumen_sarjana.hapus');

        Route::get('/dokumen_magister',[DokumenMagisterController::class,'index'])->name('dokumen_magister.index');
        Route::post('/dokumen_magister/prosesTambah',[DokumenMagisterController::class,'prosesTambah'])->name('dokumen_magister.prosesTambah');
        Route::post('/dokumen_magister/prosesUbah',[DokumenMagisterController::class,'prosesUbah'])->name('dokumen_magister.prosesUbah');
        Route::get('/dokumen_magister/hapus/{id}',[DokumenMagisterController::class,'hapus'])->name('dokumen_magister.hapus');

        Route::get('/dokumen_doktor',[DokumenDoktorController::class,'index'])->name('dokumen_doktor.index');
        Route::get('/dokumen_doktor/tambah',[DokumenDoktorController::class,'tambah'])->name('dokumen_doktor.tambah');
        Route::post('/dokumen_doktor/prosesTambah',[DokumenDoktorController::class,'prosesTambah'])->name('dokumen_doktor.prosesTambah');
        Route::get('/dokumen_doktor/ubah/{id}',[DokumenDoktorController::class,'ubah'])->name('dokumen_doktor.ubah');
        Route::post('/dokumen_doktor/prosesUbah',[DokumenDoktorController::class,'prosesUbah'])->name('dokumen_doktor.prosesUbah');
        Route::get('/dokumen_doktor/hapus/{id}',[DokumenDoktorController::class,'hapus'])->name('dokumen_doktor.hapus');

        Route::get('/dosen',[DosenController::class,'index'])->name('dosen.index');
        Route::post('/dosen/prosesTambah',[DosenController::class,'prosesTambah'])->name('dosen.prosesTambah');
        Route::get('/dosen/ubah/{id}',[DosenController::class,'ubah'])->name('dosen.ubah');
        Route::post('/dosen/prosesUbah',[DosenController::class,'prosesUbah'])->name('dosen.prosesUbah');
        Route::get('/dosen/hapus/{id}',[DosenController::class,'hapus'])->name('dosen.hapus');

        Route::get('/tendik',[TendikController::class,'index'])->name('tendik.index');
        Route::post('/tendik/prosesTambah',[TendikController::class,'prosesTambah'])->name('tendik.prosesTambah');
        Route::post('/tendik/prosesUbah',[TendikController::class,'prosesUbah'])->name('tendik.prosesUbah');
        Route::get('/tendik/hapus/{id}',[TendikController::class,'hapus'])->name('tendik.hapus');

        Route::get('/bimbingan',[BimbinganController::class,'index'])->name('bimbingan.index');
        Route::post('/bimbingan/prosesTambah',[BimbinganController::class,'prosesTambah'])->name('bimbingan.prosesTambah');
        Route::post('/bimbingan/prosesUbah',[BimbinganController::class,'prosesUbah'])->name('bimbingan.prosesUbah');
        Route::get('/bimbingan/hapus/{id}',[BimbinganController::class,'hapus'])->name('bimbingan.hapus');

        Route::get('/buku_jurnal',[BukuJurnalController::class,'index'])->name('buku_jurnal.index');
        Route::post('/buku_jurnal/prosesTambah',[BukuJurnalController::class,'prosesTambah'])->name('buku_jurnal.prosesTambah');
        Route::post('/buku_jurnal/prosesUbah',[BukuJurnalController::class,'prosesUbah'])->name('buku_jurnal.prosesUbah');
        Route::get('/buku_jurnal/hapus/{id}',[BukuJurnalController::class,'hapus'])->name('buku_jurnal.hapus');

        Route::get('/cerita',[CeritaController::class,'index'])->name('cerita.index');
        Route::post('/cerita/prosesTambah',[CeritaController::class,'prosesTambah'])->name('cerita.prosesTambah');
        Route::post('/cerita/prosesUbah',[CeritaController::class,'prosesUbah'])->name('cerita.prosesUbah');
        Route::get('/cerita/hapus/{id}',[CeritaController::class,'hapus'])->name('cerita.hapus');


    });

    Route::get('/logout',[AuthController::class,'logout'])->name('auth.logout');
});

Route::get('files/{filename}', function ($filename){
    $path = storage_path('app/public/berita/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }
    $file = File::get($path);
    $type = File::mimeType($path);
    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
})->name('storage');

//Route khusus buka file unggahan dokumen sarjana
Route::get('admin/buka-file-sarjana/{path}', function ($path) {
    $path_file = storage_path('app/public/sarjana_pdf/' . $path);
    if (!file_exists($path_file)) {
        abort(404);
    }
    return response()->file($path_file);
})->where('path', '.*')->name('storage.sarjana_view');

//Route khusus buka file unggahan dokumen magister
Route::get('admin/buka-file-magister/{path}', function ($path) {
    $path_file = storage_path('app/public/magister_pdf/' . $path);
    if (!file_exists($path_file)) {
        abort(404);
    }
    return response()->file($path_file);
})->where('path', '.*')->name('storage.magister_view');

//Route khusus buka file unggahan dokumen doktor
Route::get('admin/buka-file-doktor/{path}', function ($path) {
    $path_file = storage_path('app/public/doktor_pdf/' . $path);
    if (!file_exists($path_file)) {
        abort(404);
    }
    return response()->file($path_file);
})->where('path', '.*')->name('storage.doktor_view');
