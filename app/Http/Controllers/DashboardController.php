<?php

namespace App\Http\Controllers;

use App\Models\Footer;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Visitor;

class DashboardController extends Controller
{
    public function index()
    {
        $total_berita = Berita::count();
        $total_pengunjung = Visitor::count();
        $pengunjung_hari_ini = Visitor::where('visit_date', now()->toDateString())->count();

        $data_footer = Footer::latest()->paginate(5);

        $pengunjung_kemarin = Visitor::where('visit_date', now()->subDay()->toDateString())->count();
        $selisih = ($pengunjung_kemarin > 0) ? (($pengunjung_hari_ini - $pengunjung_kemarin) / $pengunjung_kemarin) * 100 : 0;

        $data_grafik = [];
        $label_grafik = [];

        for ($m = 1; $m <= 12; $m++) {
            $label = \Carbon\Carbon::create()->month($m)->translatedFormat('M');

            $count = Visitor::whereYear('visit_date', date('Y'))
                ->whereMonth('visit_date', $m)
                ->count();

            $data_grafik[] = $count;
            $label_grafik[] = $label;
        }

        return view('backend.content.dashboard', compact(
            'total_berita',
            'total_pengunjung',
            'pengunjung_hari_ini',
            'selisih',
            'data_grafik',
            'label_grafik',
            'data_footer'
        ));
    }

    public function prosesTambah(Request $request)
    {
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'tanggal_upload' => 'required|date'
        ], [
            'foto.required' => 'Foto wajib diunggah!',
            'foto.image'    => 'File harus berupa gambar.',
            'foto.max'      => 'Ukuran foto maksimal 2MB.',
        ]);

        try {
            $nama_foto = null;
            if ($request->hasFile('foto')) {
                $file = $request->file('foto');

                $nama_foto = time() . "_" . $file->getClientOriginalName();

                $tujuan_upload = public_path('uploads/footer');
                $file->move($tujuan_upload, $nama_foto);
            }
            Footer::create([
                'tanggal_upload' => $request->tanggal_upload,
                'foto'           => $nama_foto,
            ]);

            return redirect()->back()->with('success', 'Data Footer berhasil ditambahkan! ✨');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Gagal mengunggah data: ' . $e->getMessage());
        }
    }

    public function hapus($id)
    {
        $footer = Footer::findOrFail($id);

        $path = public_path('uploads/footer/' . $footer->foto);
        if (File::exists($path)) {
            File::delete($path);
        }

        $footer->delete();

        return redirect()->back()->with('success', 'Data Footer berhasil dihapus!');
    }
}
