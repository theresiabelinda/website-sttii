@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Tujuan & Strategi S3</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Tujuan S3</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN 1: TUJUAN DENGAN FOTO --}}
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-7 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary text-uppercase mb-3">Capaian Doktoral</h6>
                        <h1 class="display-6 mb-4">Tujuan Prodi Doktor Teologi</h1>
                        <p class="mb-4 pb-2">Menghasilkan pakar dan pemimpin transformatif bagi kemajuan teologi dan gereja:</p>

                        <div class="row g-4">
                            {{-- Tujuan 1 & 2 --}}
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 40px; height: 40px;">
                                        <i class="fa fa-graduation-cap text-white small"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Pengembangan Konsep Baru</h6>
                                        <p class="mb-0 text-muted small">Menciptakan teori dan praktik baru di bidang biblika, kepemimpinan, konseling, dan misi.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 40px; height: 40px;">
                                        <i class="fa fa-microscope text-white small"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Analisis Interdisipliner</h6>
                                        <p class="mb-0 text-muted small">SDM doktoral yang kritis terhadap dinamika sosial, ekonomi, dan politik.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Tujuan 3 & 4 --}}
                            <div class="col-md-6">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 40px; height: 40px;">
                                        <i class="fa fa-book text-white small"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Riset Orisinal & Inovatif</h6>
                                        <p class="mb-0 text-muted small">Penelitian kontekstual yang berkontribusi signifikan bagi keilmuan teologi.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 40px; height: 40px;">
                                        <i class="fa fa-user-tie text-white small"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Profesionalisme Global</h6>
                                        <p class="mb-0 text-muted small">Teolog dan misiolog yang profesional, etis, dan berdaya saing internasional.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Tujuan 5 & 6 --}}
                            <div class="col-md-12">
                                <div class="d-flex align-items-start mb-4">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 40px; height: 40px;">
                                        <i class="fa fa-network-wired text-white small"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Jejaring Strategis</h6>
                                        <p class="mb-0 text-muted small">Memperkuat kolaborasi nasional dan internasional guna meningkatkan reputasi prodi.</p>
                                    </div>
                                </div>
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 40px; height: 40px;">
                                        <i class="fa fa-cross text-white small"></i>
                                    </div>
                                    <div class="ms-3">
                                        <h6 class="mb-1">Kepemimpinan Transformatif</h6>
                                        <p class="mb-0 text-muted small">Membentuk akademisi yang berintegritas demi pemenuhan Amanat Agung.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- AREA GAMBAR S3 --}}
                <div class="col-lg-5 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100 bg-white d-flex align-items-center justify-content-center">
                        <img class="img-fluid" style="max-height: 100%; object-fit: contain;" src="{{ asset('assets/assets/img/profils3.jpeg') }}" alt="Program Doktor STTII">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN 2: STRATEGI (Visual Grid) --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Rencana Aksi</h6>
                <h1 class="display-6 mb-4">Strategi Pencapaian</h1>
                <div class="bg-primary mx-auto" style="width: 80px; height: 3px; border-radius: 2px;"></div>
            </div>

            <div class="row g-4">
                {{-- Strategi 1 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="card h-100 border-0 shadow-sm p-4 border-top border-4 border-primary">
                        <h5 class="mb-3">1. Kurikulum Berbasis Riset</h5>
                        <p class="small text-muted mb-0">Pembelajaran inovatif dan interdisipliner untuk menghasilkan pemikiran teologi injili yang orisinal.</p>
                    </div>
                </div>
                {{-- Strategi 2 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="card h-100 border-0 shadow-sm p-4 border-top border-4 border-primary">
                        <h5 class="mb-3">2. Analisis Kontekstual</h5>
                        <p class="small text-muted mb-0">Memperkuat solusi teologis yang relevan bagi dinamika gereja di Indonesia dan global.</p>
                    </div>
                </div>
                {{-- Strategi 3 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="card h-100 border-0 shadow-sm p-4 border-top border-4 border-primary">
                        <h5 class="mb-3">3. Publikasi Bereputasi</h5>
                        <p class="small text-muted mb-0">Mengintensifkan riset unggulan yang melahirkan teori dan model baru dalam praksis gerejawi.</p>
                    </div>
                </div>
                {{-- Strategi 4 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="card h-100 border-0 shadow-sm p-4 border-top border-4 border-primary">
                        <h5 class="mb-3">4. Inovasi Teknologi</h5>
                        <p class="small text-muted mb-0">Pemanfaatan teknologi akademik untuk membentuk pendidik yang profesional dan adaptif.</p>
                    </div>
                </div>
                {{-- Strategi 5 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="card h-100 border-0 shadow-sm p-4 border-top border-4 border-primary">
                        <h5 class="mb-3">5. Kolaborasi Global</h5>
                        <p class="small text-muted mb-0">Kerja sama riset dan publikasi internasional untuk meningkatkan reputasi program doktoral.</p>
                    </div>
                </div>
                {{-- Strategi 6 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="card h-100 border-0 shadow-sm p-4 border-top border-4 border-primary">
                        <h5 class="mb-3">6. Dampak Strategis</h5>
                        <p class="small text-muted mb-0">Membentuk lulusan berintegritas yang berdampak nyata dalam rangka pemenuhan Amanat Agung.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
