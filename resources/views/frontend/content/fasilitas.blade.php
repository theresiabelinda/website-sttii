@extends('frontend.layout.main')

@section('content')

    {{-- 1. HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Fasilitas Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Tentang Kami</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Fasilitas</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- 2. LIST FASILITAS --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Sarana & Prasarana</h6>
                <h1 class="display-6 mb-4">Daftar Fasilitas Kampus</h1>
                <p class="text-secondary">Kami menyediakan lingkungan yang kondusif untuk belajar, beribadah, dan membangun komunitas.</p>
            </div>

            <div class="row g-4">

                {{-- ==================== BAGIAN YANG ADA FOTO (Hanya 2) ==================== --}}

                {{-- Item 1: Kapel (PAKAI FOTO) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center bg-white rounded shadow-sm overflow-hidden facility-item h-100">
                        {{-- Gambar di Kiri --}}
                        <div class="flex-shrink-0 position-relative" style="width: 140px; height: 100%; min-height: 120px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets-fe/img/kapel.jpeg') }}" alt="Kapel" style="object-fit: cover;">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
                            {{-- Icon Overlay --}}
                            <div class="position-absolute top-50 start-50 translate-middle text-white">
                                <i class="fa fa-church fa-2x"></i>
                            </div>
                        </div>
                        {{-- Teks di Kanan --}}
                        <div class="p-4">
                            <h5 class="mb-2 text-primary">Kapel Ibadah</h5>
                            <p class="mb-0 text-muted small">Ruang ibadah yang representatif untuk kebaktian rutin dan pembinaan rohani.</p>
                        </div>
                    </div>
                </div>

                {{-- Item 2: Ruang Kelas (PAKAI FOTO) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex align-items-center bg-white rounded shadow-sm overflow-hidden facility-item h-100">
                        <div class="flex-shrink-0 position-relative" style="width: 140px; height: 100%; min-height: 120px;">
                            <img class="img-fluid w-100 h-100" src="{{ asset('assets-fe/img/kelas.jpeg') }}" alt="Kelas" style="object-fit: cover;">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25"></div>
                            <div class="position-absolute top-50 start-50 translate-middle text-white">
                                <i class="fa fa-chalkboard-teacher fa-2x"></i>
                            </div>
                        </div>
                        <div class="p-4">
                            <h5 class="mb-2 text-primary">Ruang Kelas AC</h5>
                            <p class="mb-0 text-muted small">Kelas nyaman ber-AC dilengkapi proyektor multimedia untuk pembelajaran.</p>
                        </div>
                    </div>
                </div>

                {{-- ==================== BAGIAN TANPA FOTO (Desain List + Icon) ==================== --}}

                {{-- Item 3: Asrama (Tanpa Foto - Background Biru) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center bg-white rounded shadow-sm overflow-hidden facility-item h-100">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-primary position-relative overflow-hidden" style="width: 140px; height: 100%; min-height: 120px;">
                            <i class="fa fa-bed position-absolute text-white opacity-25" style="font-size: 5rem; transform: rotate(-10deg);"></i>
                            <i class="fa fa-bed fa-2x text-white position-relative z-index-1"></i>
                        </div>
                        <div class="p-4">
                            <h5 class="mb-2 text-primary">Asrama Putra/i</h5>
                            <p class="mb-0 text-muted small">Tempat tinggal yang membina kebersamaan dan kedisiplinan hidup berasrama.</p>
                        </div>
                    </div>
                </div>

                {{-- Item 4: Olahraga (Tanpa Foto - Background Dark) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="d-flex align-items-center bg-white rounded shadow-sm overflow-hidden facility-item h-100">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-dark position-relative overflow-hidden" style="width: 140px; height: 100%; min-height: 120px;">
                            <i class="fa fa-volleyball-ball position-absolute text-white opacity-25" style="font-size: 5rem; transform: rotate(10deg);"></i>
                            <i class="fa fa-volleyball-ball fa-2x text-white position-relative z-index-1"></i>
                        </div>
                        <div class="p-4">
                            <h5 class="mb-2 text-primary">Sarana Olahraga</h5>
                            <p class="mb-0 text-muted small">Lapangan olahraga untuk menjaga kebugaran fisik dan rekreasi mahasiswa.</p>
                        </div>
                    </div>
                </div>

                {{-- Item 5: Wi-Fi (Tanpa Foto - Background Biru) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="d-flex align-items-center bg-white rounded shadow-sm overflow-hidden facility-item h-100">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-primary position-relative overflow-hidden" style="width: 140px; height: 100%; min-height: 120px;">
                            <i class="fa fa-wifi position-absolute text-white opacity-25" style="font-size: 5rem; transform: rotate(-15deg);"></i>
                            <i class="fa fa-wifi fa-2x text-white position-relative z-index-1"></i>
                        </div>
                        <div class="p-4">
                            <h5 class="mb-2 text-primary">Free Wi-Fi Area</h5>
                            <p class="mb-0 text-muted small">Akses internet kecepatan tinggi di seluruh area kampus.</p>
                        </div>
                    </div>
                </div>

                {{-- Item 6: Kantin (Tanpa Foto - Background Dark) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="d-flex align-items-center bg-white rounded shadow-sm overflow-hidden facility-item h-100">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-dark position-relative overflow-hidden" style="width: 140px; height: 100%; min-height: 120px;">
                            <i class="fa fa-utensils position-absolute text-white opacity-25" style="font-size: 5rem; transform: rotate(10deg);"></i>
                            <i class="fa fa-utensils fa-2x text-white position-relative z-index-1"></i>
                        </div>
                        <div class="p-4">
                            <h5 class="mb-2 text-primary">Kantin Sehat</h5>
                            <p class="mb-0 text-muted small">Menyediakan makanan sehat dan higienis dengan harga terjangkau.</p>
                        </div>
                    </div>
                </div>

                {{-- Item 7: Guest House (Tanpa Foto - Background Biru) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="d-flex align-items-center bg-white rounded shadow-sm overflow-hidden facility-item h-100">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-primary position-relative overflow-hidden" style="width: 140px; height: 100%; min-height: 120px;">
                            <i class="fa fa-home position-absolute text-white opacity-25" style="font-size: 5rem; transform: rotate(-10deg);"></i>
                            <i class="fa fa-home fa-2x text-white position-relative z-index-1"></i>
                        </div>
                        <div class="p-4">
                            <h5 class="mb-2 text-primary">Guest House</h5>
                            <p class="mb-0 text-muted small">Penginapan bagi dosen tamu maupun orang tua mahasiswa yang berkunjung.</p>
                        </div>
                    </div>
                </div>

                {{-- Item 8: Taman (Tanpa Foto - Background Dark) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="d-flex align-items-center bg-white rounded shadow-sm overflow-hidden facility-item h-100">
                        <div class="flex-shrink-0 d-flex align-items-center justify-content-center bg-dark position-relative overflow-hidden" style="width: 140px; height: 100%; min-height: 120px;">
                            <i class="fa fa-tree position-absolute text-white opacity-25" style="font-size: 5rem; transform: rotate(15deg);"></i>
                            <i class="fa fa-tree fa-2x text-white position-relative z-index-1"></i>
                        </div>
                        <div class="p-4">
                            <h5 class="mb-2 text-primary">Gazebo & Taman</h5>
                            <p class="mb-0 text-muted small">Ruang terbuka hijau untuk diskusi kelompok atau bersantai.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- CSS CUSTOM --}}
    <style>
        .facility-item {
            transition: all 0.3s ease;
            border: 1px solid #f0f0f0;
        }

        .facility-item:hover {
            transform: translateX(5px);
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.10)!important;
            border-left: 5px solid var(--bs-primary);
        }
    </style>

@endsection
