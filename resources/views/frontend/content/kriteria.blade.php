@extends('frontend.layout.main')

@section('content')

    {{-- HEADER --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Kriteria Pendidikan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">About Us</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Kriteria</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN INTRO --}}
    <div class="container-xxl py-6 pb-0">
        <div class="container text-center wow fadeInUp" data-wow-delay="0.1s">
            <h6 class="text-primary text-uppercase mb-2">Standar Kualitas</h6>
            <h1 class="display-6 mb-5">Komitmen Mutu STTII Yogyakarta</h1>
        </div>
    </div>

    {{-- BAGIAN 3S, 3i, 3P (GRID SYSTEM) --}}
    <div class="container-xxl py-6 pt-0">
        <div class="container">
            <div class="row g-4">

                {{-- CARD 1: 3S --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white shadow rounded h-100 p-4 border-top border-5 border-primary position-relative overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="text-primary display-4 fw-bold m-0">3S</h2>
                            <i class="fa fa-user-graduate fa-3x text-light"></i>
                        </div>
                        <h5 class="mb-3">Karakter Lulusan</h5>
                        <p class="text-muted mb-4">Keseimbangan antara aspek:</p>

                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex">
                                <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                                <div>
                                    <strong>Sarjana</strong>
                                    <br><small>Pengetahuan teologi alkitabiah yang mumpuni.</small>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                                <div>
                                    <strong>Suci</strong>
                                    <br><small>Kesalehan hidup dan karakter yang serupa Kristus.</small>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="fa fa-check-circle text-primary me-3 mt-1"></i>
                                <div>
                                    <strong>Setia</strong>
                                    <br><small>Kecakapan dan kesetiaan pelayanan di gereja dan masyarakat.</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- CARD 2: 3i --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white shadow rounded h-100 p-4 border-top border-5 border-success position-relative overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="text-success display-4 fw-bold m-0">3i</h2>
                            <i class="fa fa-book-open fa-3x text-light"></i>
                        </div>
                        <h5 class="mb-3">Sifat Pendidikan</h5>
                        <p class="text-muted mb-4">Pengelolaan pendidikan yang bersifat:</p>

                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex">
                                <i class="fa fa-check-circle text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Imani</strong>
                                    <br><small>Menjadikan iman sebagai dasar hidup.</small>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="fa fa-check-circle text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Injili</strong>
                                    <br><small>Menjunjung Alkitab sebagai otoritas yang tertinggi.</small>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="fa fa-check-circle text-success me-3 mt-1"></i>
                                <div>
                                    <strong>Interdenominasi</strong>
                                    <br><small>Merangkul berbagai denominasi gereja untuk bekerja sama.</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- CARD 3: 3P --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white shadow rounded h-100 p-4 border-top border-5 border-danger position-relative overflow-hidden">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <h2 class="text-danger display-4 fw-bold m-0">3P</h2>
                            <i class="fa fa-church fa-3x text-light"></i>
                        </div>
                        <h5 class="mb-3">Profil Pelayanan</h5>
                        <p class="text-muted mb-4">Membentuk hamba Tuhan sebagai:</p>

                        <ul class="list-unstyled">
                            <li class="mb-3 d-flex">
                                <i class="fa fa-check-circle text-danger me-3 mt-1"></i>
                                <div>
                                    <strong>Pengkhotbah</strong>
                                    <br><small>Cakap menyusun dan menyampaikan khotbah ekspositori.</small>
                                </div>
                            </li>
                            <li class="mb-3 d-flex">
                                <i class="fa fa-check-circle text-danger me-3 mt-1"></i>
                                <div>
                                    <strong>Penginjil</strong>
                                    <br><small>Semangat dalam penginjilan dan pendirian jemaat.</small>
                                </div>
                            </li>
                            <li class="d-flex">
                                <i class="fa fa-check-circle text-danger me-3 mt-1"></i>
                                <div>
                                    <strong>Pengajar</strong>
                                    <br><small>Mengajar kreatif di gereja dan lembaga pendidikan.</small>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- BAGIAN 3.1 (VISI STRATEGIS) --}}
    {{-- Menggunakan background Primary agar kontras dan terlihat penting --}}
    <div class="container-fluid bg-primary text-white py-6 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 text-center text-lg-start mb-4 mb-lg-0">
                    <h1 class="display-2 fw-bold text-white mb-0">3.1</h1>
                    <span class="fs-5 fw-light text-white-50">Visi Strategis</span>
                </div>
                <div class="col-lg-9">
                    <h3 class="text-white mb-3">Indonesia 1.1.1</h3>
                    <p class="fs-5 mb-0" style="line-height: 1.8;">
                        "Pendirian <strong>satu jemaat</strong> dalam <strong>satu desa</strong> yang dicapai dalam <strong>satu generasi</strong> dengan metode atau strategi yang biblikal dan kontekstual sebagai wujud ketaatan terhadap Amanat Agung Tuhan Yesus dalam Matius 28:19-20 untuk memuridkan segala suku bangsa."
                    </p>
                </div>
            </div>
        </div>
    </div>

@endsection
