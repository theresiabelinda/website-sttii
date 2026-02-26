@extends('frontend.layout.main')

@section('content')

    {{-- HERO SECTION --}}
    <div class="container-fluid py-5 mb-5 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .6)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover; min-height: 450px; display: flex; align-items: center;">
        <div class="container text-center">
            <h1 class="display-3 text-white animated slideInDown mb-3 uppercase font-bold">Jogja Istimewa</h1>
            <p class="text-white fs-4 mb-4">Harmoni Budaya, Pusat Ilmu, dan Panggilan Iman</p>
            <div class="mx-auto" style="width: 100px; height: 5px; background-color: #ffc107;"></div>
        </div>
    </div>

    {{-- JOGJA SEBAGAI PUSAT PENDIDIKAN --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Kota Pelajar</h6>
                    <h2 class="display-6 mb-4">Keunggulan Geografis & Budaya Yogyakarta</h2>
                    <p class="mb-4">Yogyakarta bukan sekadar kota, melainkan ekosistem intelektual. Sebagai "Kota Pelajar", Jogja menawarkan atmosfer belajar yang tenang, biaya hidup yang terjangkau, dan keramahan masyarakat yang mendukung fokus studi mahasiswa.</p>
                    <div class="row g-3 mb-4">
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Lingkungan Akademik Kondusif
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Pusat Akulturasi Budaya
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Biaya Hidup Mahasiswa
                        </div>
                        <div class="col-sm-6">
                            <i class="fa fa-check text-primary me-2"></i>Akses Transportasi Mudah
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow zoomIn" data-wow-delay="0.5s">
                    <img class="img-fluid rounded shadow-lg" src="{{asset('assets-fe/img/jogja.jpg')}}" alt="Yogyakarta Landmark">
                </div>
            </div>
        </div>
    </div>

    {{-- HUBUNGAN KEUNGGULAN JOGJA DENGAN STTII --}}
    <div class="container-fluid bg-light py-5 my-5">
        <div class="container py-5">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h2 class="display-6 mb-3">Sinergi Jogja & STTII Yogyakarta</h2>
                <p class="text-primary fw-bold">Mengapa STTII Yogyakarta adalah Pilihan Tepat?</p>
            </div>

            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white border-top border-5 border-primary p-4 h-100 shadow-sm transition-card">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-university fa-2x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Laboratorium Budaya & Misi</h5>
                        <p>Keberagaman Jogja menjadi laboratorium nyata bagi mahasiswa STTII untuk mempraktikkan pelayanan lintas budaya dan memahami konteks masyarakat Indonesia yang majemuk.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white border-top border-5 border-primary p-4 h-100 shadow-sm transition-card">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-book-open fa-2x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Akses Referensi Luas</h5>
                        <p>Dikelilingi oleh ratusan perguruan tinggi, mahasiswa STTII memiliki akses ke jaringan perpustakaan dan komunitas ilmiah yang sangat luas untuk menunjang penelitian teologi.</p>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white border-top border-5 border-primary p-4 h-100 shadow-sm transition-card">
                        <div class="btn-square bg-light rounded-circle mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-hands-helping fa-2x text-primary"></i>
                        </div>
                        <h5 class="mb-3">Jaringan Gereja Lokal</h5>
                        <p>Pertumbuhan gereja yang dinamis di Jogja memudahkan mahasiswa untuk melakukan praktik pelayanan lapangan (PPL) dan penguatan gereja lokal sesuai visi Amanat Agung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .transition-card {
            transition: all 0.3s ease;
        }
        .transition-card:hover {
            transform: translateY(-10px);
            background-color: #f8f9fa !important;
        }
        .btn-square {
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>

@endsection
