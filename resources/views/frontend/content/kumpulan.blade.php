@extends('frontend.layout.main')

@section('content')
    {{-- Header --}}
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 29, 94, 0.7), rgba(0, 29, 94, 0.7)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-2 text-white mb-4 animated slideInDown">Arsip Berita</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Kegiatan Kampus</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-9">
                    <div class="mb-5">
                        <h6 class="text-primary text-uppercase mb-2">Informasi Kampus</h6>
                        <h1 class="display-6 mb-0">Daftar Kegiatan Terbaru</h1>
                        <hr class="w-25 bg-primary">
                    </div>

                    {{-- Start List Berita --}}
                    @foreach($kumpulan as $item)
                        <div class="card border-0 border-bottom rounded-0 mb-4 pb-4 wow fadeInUp" data-wow-delay="0.1s">
                            <div class="row align-items-center g-4">
                                {{-- Kolom Gambar Lebih Kecil (col-md-3) --}}
                                <div class="col-md-3">
                                    <div class="position-relative overflow-hidden rounded shadow-sm" style="height: 160px;">
                                        <img src="{{ route('storage', ['filename' => $item->gambar_berita]) }}"
                                             class="img-fluid h-100 w-100"
                                             alt="{{ $item->judul_berita }}"
                                             style="object-fit: cover;">
                                        <div class="bg-primary text-white position-absolute top-0 start-0 px-2 py-1 small">
                                            {{ $item->tahun }}
                                        </div>
                                    </div>
                                </div>

                                {{-- Kolom Teks --}}
                                <div class="col-md-9">
                                    <div class="card-body p-0">
                                        <div class="mb-2">
                                            <small class="text-muted text-uppercase fw-bold" style="letter-spacing: 1px;">
                                                <i class="fa fa-calendar-alt me-1"></i> {{ $item->created_at->format('d M Y') }}
                                            </small>
                                        </div>

                                        <h4 class="mb-2">
                                            <a href="{{ route('berita.baca', $item->id_berita) }}" class="text-dark text-decoration-none h5 d-block lh-base hover-primary">
                                                {{ $item->judul_berita }}
                                            </a>
                                        </h4>

                                        <p class="text-muted small mb-3">
                                            {{ Str::limit(strip_tags($item->isi_berita), 150) }}
                                        </p>

                                        <a href="{{ route('berita.baca', $item->id_berita) }}" class="btn btn-link text-primary p-0 fw-bold text-decoration-none small">
                                            BACA SELENGKAPNYA <i class="fa fa-chevron-right ms-1" style="font-size: 10px;"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    {{-- Pagination --}}
                    <div class="d-flex justify-content-center mt-5">
                        {{ $kumpulan->links('pagination::bootstrap-5') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .hover-primary:hover {
            color: #001D5E !important; /* Sesuaikan dengan warna primer STTII */
            transition: 0.3s;
        }
        .card {
            transition: transform 0.3s ease;
        }
        .card:hover {
            border-bottom-color: #001D5E !important;
        }
    </style>
@endsection
