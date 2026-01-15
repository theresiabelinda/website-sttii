<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Visitor;

class DashboardController extends Controller
{
    public function index()
    {
        $total_berita = Berita::count();

        $total_pengunjung = Visitor::count(); // Total semua waktu
        $pengunjung_hari_ini = Visitor::where('visit_date', now()->toDateString())->count();

        // Untuk persentase (opsional sederhana)
        $pengunjung_kemarin = Visitor::where('visit_date', now()->subDay()->toDateString())->count();
        $selisih = ($pengunjung_kemarin > 0) ? (($pengunjung_hari_ini - $pengunjung_kemarin) / $pengunjung_kemarin) * 100 : 0;

        return view('backend.content.dashboard', compact('total_berita','total_pengunjung', 'pengunjung_hari_ini', 'selisih'));
    }
}
