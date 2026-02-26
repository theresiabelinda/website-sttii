@extends('frontend.layout.main')

@section('content')

    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Perpustakaan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Tentang Kami</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Perpustakaan</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="rounded p-5 shadow-lg" style="background-color: #061429;">
                        <h3 class="text-white mb-4">Akses Digital</h3>
                        <div class="d-flex flex-column gap-3">
                            <a href="https://pistis.sttii-yogyakarta.ac.id/" target="_blank" class="btn btn-light btn-lg text-primary text-start fw-bold shadow-sm p-3 custom-link">
                                <i class="fa fa-book-open me-3 text-primary"></i>Jurnal Pistis
                            </a>
                            <a href="https://www.ejournal.sttii-yogyakarta.ac.id/" target="_blank" class="btn btn-light btn-lg text-primary text-start fw-bold shadow-sm p-3 custom-link">
                                <i class="fa fa-scroll me-3 text-primary"></i>Jurnal Predica Verbum
                            </a>
                            <a href="https://epustaka.sttii-yogyakarta.ac.id/" target="_blank" class="btn btn-light btn-lg text-primary text-start fw-bold shadow-sm p-3 custom-link">
                                <i class="fa fa-search me-3 text-primary"></i>Perpustakaan Online STTII
                            </a>
                        </div>
                        <div class="mt-4 pt-3 border-top border-light border-opacity-25">
                            <p class="text-white mb-0 small opacity-75">
                                <i class="fa fa-info-circle me-2"></i>
                                Silahkan klik link di atas untuk mengakses koleksi digital.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 ps-lg-4">
                        <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 3px;">Pusat Literasi</h6>
                        <h1 class="display-6 mb-4">Ruang Nyaman Untuk Bertumbuh Secara Intelektual</h1>
                        <p class="mb-4">Perpustakaan STTII Yogyakarta hadir sebagai jantung akademik yang mendukung mahasiswa dalam riset, studi teologi, dan pengembangan spiritual.</p>

                        <div class="row g-3 mb-4">
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-sm-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <span class="fw-medium">Akses Wi-Fi Cepat</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-sm-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <span class="fw-medium">Area Diskusi Terbuka</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-sm-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <span class="fw-medium">Koleksi Jurnal Digital</span>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="d-flex align-items-center">
                                    <div class="btn-sm-square bg-primary rounded-circle me-3">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <span class="fw-medium">Ruang AC Nyaman</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Agar tombol link memiliki efek hover yang cantik */
        .custom-link {
            transition: all 0.3s ease;
            border: none;
        }
        .custom-link:hover {
            background-color: #f8f9fa;
            transform: translateX(10px);
            color: #061429 !important;
        }
    </style>
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Galeri Fasilitas</h6>
                <h1 class="display-6">Eksplorasi Sudut Baca Kami</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white rounded overflow-hidden shadow-sm h-100">
                        <img class="img-fluid" src="{{asset('assets-fe/img/perpus3.jpeg')}}" alt="">
                        <div class="p-4">
                            <h5 class="mb-3">Ruang Referensi</h5>
                            <p>Koleksi buku teks utama, kamus teologi, dan ensiklopedia yang lengkap untuk referensi tugas akhir.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white rounded overflow-hidden shadow-sm h-100">
                        <img class="img-fluid" src="{{asset('assets-fe/img/perpus2.jpeg')}}" alt="">
                        <div class="p-4">
                            <h5 class="mb-3">Pojok Digital</h5>
                            <p>Tersedia beberapa unit komputer yang terhubung ke e-library untuk mempermudah pencarian jurnal internasional.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white rounded overflow-hidden shadow-sm h-100">
                        <img class="img-fluid" src="{{asset('assets-fe/img/perpus.jpeg')}}" alt="">
                        <div class="p-4">
                            <h5 class="mb-3">Area Baca Nyaman</h5>
                            <p>Bagi yang menyukai suasana lebih santai, kami menyediakan area duduk yang bersih dan nyaman.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .service-item img {
            transition: .5s;
            height: 250px;
            width: 100%;
            object-fit: cover;
        }
        .service-item:hover img {
            transform: scale(1.1);
        }
        .service-item {
            transition: .5s;
        }
        .service-item:hover {
            margin-top: -10px;
            box-shadow: 0 0.5rem 1.5rem rgba(0, 0, 0, .1) !important;
        }
    </style>

@endsection
