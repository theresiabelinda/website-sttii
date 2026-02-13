<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\DokumenDoktor;
use App\Models\DokumenMagister;
use App\Models\DokumenSarjana;
use App\Models\Kebijakan;
use App\Models\Laporan;
use App\Models\Visitor;
use App\Models\Dosen;
use App\Models\Footer;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $berita_carousel = Berita::where('id_kategori_kegiatan', '!=', 1)
            ->latest()
            ->take(2)
            ->get();

        $berita = Berita::where('id_kategori_kegiatan', '!=', 1)
            ->latest()
            ->take(4)
            ->get();

        $popup_pmb = Berita::where('id_kategori_kegiatan', 1)
            ->latest()
            ->first();

        $footer_terbaru = Footer::latest()->first();

        Visitor::firstOrCreate([
            'ip_address' => request()->ip(),
            'visit_date' => now()->toDateString(),
        ]);
        return view('frontend.content.home', compact('berita', 'berita_carousel', 'popup_pmb', 'footer_terbaru'));
    }

    public function detail($id)
    {
        $berita = Berita::with('kategori_kegiatan')->findOrFail($id);
        return view('frontend.content.berita_detail', compact('berita'));
    }

    public function sambutan(){
        return view('frontend.content.sambutan');
    }

    public function sejarah(){
        return view('frontend.content.sejarah');
    }

    public function visimisi(){
        return view('frontend.content.visimisi');
    }

    public function kriteria(){
        return view('frontend.content.kriteria');
    }

    public function pernyataan(){
        return view('frontend.content.pernyataan');
    }

    public function dosen()
    {
        $dosen = Dosen::with(['bimbingan1', 'bimbingan2'])->get();
        return view('frontend.content.dosen', compact('dosen'));
    }

    public function tendik(){
        return view('frontend.content.tendik');
    }

    //Frontend S1
    public function profils1(){
        return view('frontend.content.sarjana.profil');
    }

    public function visis1(){
        return view('frontend.content.sarjana.visis1');
    }

    public function tujuan(){
        return view('frontend.content.sarjana.tujuan');
    }

    public function konsentrasi(){
        return view('frontend.content.sarjana.konsentrasi');
    }

    public function unduhS1()
    {
        $dokumen = DokumenSarjana::latest()->paginate(5);
        return view('frontend.content.sarjana.unduh', compact('dokumen'));
    }

    //Frontend S2
    public function profils2(){
        return view('frontend.content.magister.profils2');
    }

    public function visis2(){
        return view('frontend.content.magister.visis2');
    }

    public function tujuans2(){
        return view('frontend.content.magister.tujuans2');
    }

    public function konsentrasis2(){
        return view('frontend.content.magister.konsentrasis2');
    }

    public function unduhS2()
    {
        // Mengambil semua dokumen, urut dari yang terbaru
        $dokumen = DokumenMagister::latest()->paginate(5);

        return view('frontend.content.magister.unduh', compact('dokumen'));
    }

    //Frontend S3
    public function profils3(){
        return view('frontend.content.doktor.profils3');
    }

    public function visis3(){
        return view('frontend.content.doktor.visis3');
    }

    public function tujuans3(){
        return view('frontend.content.doktor.tujuans3');
    }

    public function konsentrasis3(){
        return view('frontend.content.doktor.konsentrasis3');
    }

    public function unduhS3()
    {
        $dokumen = DokumenDoktor::latest()->paginate(5);

        return view('frontend.content.doktor.unduh', compact('dokumen'));
    }

    public function beasiswa(){
        return view('frontend.content.beasiswa');
    }

    public function fasilitas(){
        return view('frontend.content.fasilitas');
    }

    public function asrama(){
        return view('frontend.content.asrama');
    }

    public function faq(){
        return view('frontend.content.faq');
    }

    public function kebijakan()
    {
        $kebijakan = Kebijakan::latest()->paginate(5);
        return view('frontend.content.kebijakan', compact('kebijakan'));
    }

    public function laporan()
    {
        $laporan = Laporan::latest()->paginate(5);
        return view('frontend.content.laporan', compact('laporan'));
    }

    public function kumpulan()
    {
         $kumpulan = Berita::where('id_kategori_kegiatan', '!=', 1)
            ->latest()
            ->paginate(8);

        return view('frontend.content.kumpulan', compact('kumpulan'));
    }
}
