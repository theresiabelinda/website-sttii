@extends('layouts.app') {{-- Sesuaikan dengan nama layout utama Anda --}}

@section('content')
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8 mx-auto">
                    <div class="mb-4">
                        <h1 class="display-5 mb-3">{{ $berita->judul_berita }}</h1>
                        <div class="d-flex align-items-center text-muted">
                            <small class="me-3"><i class="fa fa-calendar-alt text-primary me-2"></i>{{ $berita->created_at->format('d M Y') }}</small>
                            <small class="me-3"><i class="fa fa-folder text-primary me-2"></i>{{ $berita->kategori_kegiatan->nama_kategori ?? 'Umum' }}</small>
                            <small><i class="fa fa-tag text-primary me-2"></i>Tahun {{ $berita->tahun }}</small>
                        </div>
                    </div>

                    <div class="position-relative mb-5">
                        <img class="img-fluid w-100 rounded shadow"
                             src="{{ route('storage', ['filename' => $berita->gambar_berita]) }}"
                             alt="{{ $berita->judul_berita }}"
                             style="max-height: 500px; object-fit: cover;">
                    </div>

                    <div class="content" style="line-height: 1.8; font-size: 1.1rem; color: #333;">
                        {!! nl2br($berita->isi_berita) !!}
                    </div>

                    <div class="mt-5 pt-5 border-top">
                        <a href="{{ url('/') }}" class="btn btn-primary py-3 px-5">
                            <i class="fa fa-arrow-left me-2"></i>Kembali ke Beranda
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
