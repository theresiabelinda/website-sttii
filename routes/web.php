<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\KategoriKegiatanController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DokumenSarjanaController;
use App\Http\Controllers\DokumenMagisterController;
use App\Http\Controllers\DokumenDoktorController;
use App\Http\Controllers\KebijakanController;
use App\Http\Controllers\LaporanController;

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
Route::get('/kebijakan', [HomeController::class, 'kebijakan'])->name('home.kebijakan');
Route::get('/laporan', [HomeController::class, 'laporan'])->name('home.laporan');
Route::get('/berita/baca/{id}', [HomeController::class, 'detail'])->name('berita.baca');
Route::get('/kumpulan', [HomeController::class, 'kumpulan'])->name('berita.kumpulan');

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

        Route::get('/kategori_kegiatan',[KategoriKegiatanController::class,'index'])->name('kategori_kegiatan.index');
        Route::get('/kategori_kegiatan/tambah',[KategoriKegiatanController::class,'tambah'])->name('kategori_kegiatan.tambah');
        Route::post('/kategori_kegiatan/prosesTambah',[KategoriKegiatanController::class,'prosesTambah'])->name('kategori_kegiatan.prosesTambah');
        Route::get('/kategori_kegiatan/ubah/{id}',[KategoriKegiatanController::class,'ubah'])->name('kategori_kegiatan.ubah');
        Route::post('/kategori_kegiatan/prosesUbah',[KategoriKegiatanController::class,'prosesUbah'])->name('kategori_kegiatan.prosesUbah');
        Route::get('/kategori_kegiatan/hapus/{id}',[KategoriKegiatanController::class,'hapus'])->name('kategori_kegiatan.hapus');

        Route::get('/berita',[BeritaController::class,'index'])->name('berita.index');
        Route::get('/berita/tambah',[BeritaController::class,'tambah'])->name('berita.tambah');
        Route::post('/berita/prosesTambah',[BeritaController::class,'prosesTambah'])->name('berita.prosesTambah');
        Route::get('/berita/ubah/{id}',[BeritaController::class,'ubah'])->name('berita.ubah');
        Route::post('/berita/prosesUbah',[BeritaController::class,'prosesUbah'])->name('berita.prosesUbah');
        Route::get('/berita/hapus/{id}',[BeritaController::class,'hapus'])->name('berita.hapus');

        Route::get('/dokumen_sarjana',[DokumenSarjanaController::class,'index'])->name('dokumen_sarjana.index');
        Route::get('/dokumen_sarjana/tambah',[DokumenSarjanaController::class,'tambah'])->name('dokumen_sarjana.tambah');
        Route::post('/dokumen_sarjana/prosesTambah',[DokumenSarjanaController::class,'prosesTambah'])->name('dokumen_sarjana.prosesTambah');
        Route::get('/dokumen_sarjana/ubah/{id}',[DokumenSarjanaController::class,'ubah'])->name('dokumen_sarjana.ubah');
        Route::post('/dokumen_sarjana/prosesUbah',[DokumenSarjanaController::class,'prosesUbah'])->name('dokumen_sarjana.prosesUbah');
        Route::get('/dokumen_sarjana/hapus/{id}',[DokumenSarjanaController::class,'hapus'])->name('dokumen_sarjana.hapus');

        //Route khusus buka file unggahan dokumen sarjana
        Route::get('admin/buka-file-sarjana/{path}', function ($path) {
            $path_file = storage_path('app/public/sarjana_pdf/' . $path);
            if (!file_exists($path_file)) {
                abort(404);
            }
            return response()->file($path_file);
        })->where('path', '.*')->name('storage.sarjana_view');

        Route::get('/dokumen_magister',[DokumenMagisterController::class,'index'])->name('dokumen_magister.index');
        Route::get('/dokumen_magister/tambah',[DokumenMagisterController::class,'tambah'])->name('dokumen_magister.tambah');
        Route::post('/dokumen_magister/prosesTambah',[DokumenMagisterController::class,'prosesTambah'])->name('dokumen_magister.prosesTambah');
        Route::get('/dokumen_magister/ubah/{id}',[DokumenMagisterController::class,'ubah'])->name('dokumen_magister.ubah');
        Route::post('/dokumen_magister/prosesUbah',[DokumenMagisterController::class,'prosesUbah'])->name('dokumen_magister.prosesUbah');
        Route::get('/dokumen_magister/hapus/{id}',[DokumenMagisterController::class,'hapus'])->name('dokumen_magister.hapus');

        //Route khusus buka file unggahan dokumen magister
        Route::get('admin/buka-file-magister/{path}', function ($path) {
            $path_file = storage_path('app/public/magister_pdf/' . $path);
            if (!file_exists($path_file)) {
                abort(404);
            }
            return response()->file($path_file);
        })->where('path', '.*')->name('storage.magister_view');

        Route::get('/dokumen_doktor',[DokumenDoktorController::class,'index'])->name('dokumen_doktor.index');
        Route::get('/dokumen_doktor/tambah',[DokumenDoktorController::class,'tambah'])->name('dokumen_doktor.tambah');
        Route::post('/dokumen_doktor/prosesTambah',[DokumenDoktorController::class,'prosesTambah'])->name('dokumen_doktor.prosesTambah');
        Route::get('/dokumen_doktor/ubah/{id}',[DokumenDoktorController::class,'ubah'])->name('dokumen_doktor.ubah');
        Route::post('/dokumen_doktor/prosesUbah',[DokumenDoktorController::class,'prosesUbah'])->name('dokumen_doktor.prosesUbah');
        Route::get('/dokumen_doktor/hapus/{id}',[DokumenDoktorController::class,'hapus'])->name('dokumen_doktor.hapus');

        //Route khusus buka file unggahan dokumen doktor
        Route::get('admin/buka-file-doktor/{path}', function ($path) {
            $path_file = storage_path('app/public/doktor_pdf/' . $path);
            if (!file_exists($path_file)) {
                abort(404);
            }
            return response()->file($path_file);
        })->where('path', '.*')->name('storage.doktor_view');

        Route::get('/kebijakan',[KebijakanController::class,'index'])->name('kebijakan.index');
        Route::get('/kebijakan/tambah',[KebijakanController::class,'tambah'])->name('kebijakan.tambah');
        Route::post('/kebijakan/prosesTambah',[KebijakanController::class,'prosesTambah'])->name('kebijakan.prosesTambah');
        Route::get('/kebijakan/ubah/{id}',[KebijakanController::class,'ubah'])->name('kebijakan.ubah');
        Route::post('/kebijakan/prosesUbah',[KebijakanController::class,'prosesUbah'])->name('kebijakan.prosesUbah');
        Route::get('/kebijakan/hapus/{id}',[KebijakanController::class,'hapus'])->name('kebijakan.hapus');

        //Route khusus buka file unggahan dokumen kebijakan SPMI
        Route::get('admin/buka-file-kebijakan/{path}', function ($path) {
            $path_file = storage_path('app/public/kebijakan_pdf/' . $path);
            if (!file_exists($path_file)) {
                abort(404);
            }
            return response()->file($path_file);
        })->where('path', '.*')->name('storage.kebijakan_view');

        Route::get('/laporan',[LaporanController::class,'index'])->name('laporan.index');
        Route::get('/laporan/tambah',[LaporanController::class,'tambah'])->name('laporan.tambah');
        Route::post('/laporan/prosesTambah',[LaporanController::class,'prosesTambah'])->name('laporan.prosesTambah');
        Route::get('/laporan/ubah/{id}',[LaporanController::class,'ubah'])->name('laporan.ubah');
        Route::post('/laporan/prosesUbah',[LaporanController::class,'prosesUbah'])->name('laporan.prosesUbah');
        Route::get('/laporan/hapus/{id}',[LaporanController::class,'hapus'])->name('laporan.hapus');

        //Route khusus buka file unggahan dokumen laporan SPMI
        Route::get('admin/buka-file-laporan/{path}', function ($path) {
            $path_file = storage_path('app/public/laporan_pdf/' . $path);
            if (!file_exists($path_file)) {
                abort(404);
            }
            return response()->file($path_file);
        })->where('path', '.*')->name('storage.laporan_view');

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
