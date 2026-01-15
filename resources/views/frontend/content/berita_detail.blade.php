@extends('frontend.layout.main')

@section('content')
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-lg-10">
                    <h1 class="display-5 mb-4">{{ $berita->judul_berita }}</h1>

                    <div class="d-flex align-items-center text-muted mb-4">
                        <span class="me-3"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $berita->created_at->format('d M Y') }}</span>
                        <span class="me-3"><i class="fa fa-folder text-primary me-2"></i>{{ $berita->kategori_kegiatan->nama_kategori ?? 'Berita' }}</span>
                        <span><i class="fa fa-tag text-primary me-2"></i>Tahun {{ $berita->tahun }}</span>
                    </div>

                    <div class="mb-5">
                        <img class="img-fluid w-100 rounded shadow"
                             src="{{ route('storage', ['filename' => $berita->gambar_berita]) }}"
                             alt="{{ $berita->judul_berita }}"
                             style="max-height: 500px; width: 100%; object-fit: cover;">
                    </div>

                    <div class="content" style="line-height: 2; font-size: 1.1rem; color: #333;">
                        {!! $berita->isi_berita !!}
                    </div>

                    <div class="mt-5 pt-4 border-top">
                        <a href="{{ url('/') }}" class="btn btn-primary py-3 px-5">Kembali ke Beranda</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
