@extends('frontend.layout.main')

@section('content')

    {{-- HEADER --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Visi & Misi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">About Us</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Visi Misi</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN VISI (Fokus Utama) --}}
    <div class="container-xxl py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <div class="d-inline-block btn-square bg-primary text-white rounded-circle mb-4" style="width: 80px; height: 80px;">
                    <i class="fa fa-eye fa-2x"></i>
                </div>
                <h6 class="text-primary text-uppercase mb-2">Visi Kami</h6>
                <h2 class="display-6 mb-4">"Menjadi lembaga pendidikan tinggi Injili yang berkomitmen kepada Amanat Agung serta menjadi model penelitian teologi Injili di Indonesia."</h2>
            </div>
        </div>
    </div>

    {{-- BAGIAN MISI (3 Kolom Cards) --}}
    <div class="container-xxl py-6 pt-4">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Misi Kami</h6>
                <h1 class="display-6 mb-4">Langkah Nyata STTII</h1>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- Misi 1 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-bible fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Alkitabiah & Kontekstual</h5>
                        <p class="mb-0">Menyelenggarakan pendidikan teologi yang berbasis Alkitab dan kontekstual.</p>
                    </div>
                </div>

                {{-- Misi 2 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-user-check fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Integritas Karakter</h5>
                        <p class="mb-0">Membangun karakter mahasiswa agar memiliki integritas rohani dan moral.</p>
                    </div>
                </div>

                {{-- Misi 3 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-white text-center h-100 p-4 p-xl-5 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-hands-helping fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Menjawab Tantangan</h5>
                        <p class="mb-0">Menghasilkan lulusan yang mampu menjawab tantangan zaman dalam pelayanan gereja dan masyarakat.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- BAGIAN TUJUAN & SASARAN (Layout Split Kiri-Kanan) --}}
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="row g-5">

                {{-- TUJUAN --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Goals</h6>
                    <h1 class="display-6 mb-4">Tujuan</h1>
                    <p class="mb-4">Kami berkomitmen untuk mencapai tujuan berikut demi kemuliaan Tuhan:</p>

                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <p class="mb-0 pt-1">Menghasilkan lulusan yang memiliki komitmen terhadap panggilan dalam melaksanakan Amanat Agung.</p>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <p class="mb-0 pt-1">Menghasilkan lulusan yang mampu menjawab kebutuhan masyarakat melalui karya-karya penelitian teologi.</p>
                    </div>

                    <div class="d-flex align-items-start mb-3">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <p class="mb-0 pt-1">Menghasilkan lulusan yang memiliki keterampilan pelayanan praktis yang optimal sebagai wujud pengabdian kepada masyarakat dan gereja.</p>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                            <i class="fa fa-check text-white"></i>
                        </div>
                        <p class="mb-0 pt-1">Menghasilkan lulusan yang mampu menjalin kerjasama dengan masyarakat, lembaga, dan gereja.</p>
                    </div>
                </div>

                {{-- SASARAN --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Targets</h6>
                    <h1 class="display-6 mb-4">Sasaran</h1>
                    <p class="mb-4">Langkah konkret yang kami tempuh:</p>

                    <div class="bg-white p-4 rounded shadow-sm border-start border-4 border-primary mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-bullseye text-primary me-3 fa-2x"></i>
                            <span>Menyelenggarakan program pendidikan yang dijiwai oleh komitmen pendalaman kitab suci secara cermat.</span>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded shadow-sm border-start border-4 border-primary mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-search text-primary me-3 fa-2x"></i>
                            <span>Menyelenggarakan penelitian teologi injili yang relevan sesuai kebutuhan masyarakat.</span>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded shadow-sm border-start border-4 border-primary mb-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-heart text-primary me-3 fa-2x"></i>
                            <span>Menyelenggarakan pengabdian kepada masyarakat dan interdenominasi gereja.</span>
                        </div>
                    </div>

                    <div class="bg-white p-4 rounded shadow-sm border-start border-4 border-primary">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-handshake text-primary me-3 fa-2x"></i>
                            <span>Menyelenggarakan kerjasama dengan berbagai pihak yang memiliki kepedulian yang sama.</span>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
