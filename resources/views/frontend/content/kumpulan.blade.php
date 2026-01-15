@extends('frontend.layout.main')

@section('content')
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

    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Informasi Kampus</h6>
                <h1 class="display-6 mb-4">Jelajahi Semua Kegiatan STTII Yogyakarta</h1>
            </div>

            <div class="row g-4">
                @foreach($kumpulan as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100 shadow">
                            <div class="position-relative">
                                <img class="img-fluid"
                                     src="{{ route('storage', ['filename' => $item->gambar_berita]) }}"
                                     alt="{{ $item->judul_berita }}"
                                     style="height: 230px; width: 100%; object-fit: cover;">
                                <div class="bg-primary text-white position-absolute top-0 start-0 m-3 py-1 px-3">
                                    {{ $item->tahun }}
                                </div>
                            </div>
                            <div class="p-4 flex-grow-1">
                                <h5 class="mb-3">{{ $item->judul_berita }}</h5>
                                <p class="text-muted">{{ Str::limit(strip_tags($item->isi_berita), 120) }}</p>
                            </div>
                            <div class="p-4 pt-0 mt-auto">
                                <a class="btn btn-outline-primary w-100 rounded-pill" href="{{ route('berita.baca', $item->id_berita) }}">
                                    Baca Selengkapnya <i class="fa fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="d-flex justify-content-center mt-5 wow fadeInUp" data-wow-delay="0.1s">
                {{ $kumpulan->links('pagination::bootstrap-5') }}
            </div>
        </div>
    </div>
@endsection
