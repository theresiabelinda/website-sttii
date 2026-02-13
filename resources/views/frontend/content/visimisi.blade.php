@extends('frontend.layout.main')

@section('content')

    {{-- HEADER --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Visi, Misi & Strategi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Tentang Kami</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Visi Misi</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN VISI --}}
    <div class="container-xxl py-6 pb-0">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <div class="d-inline-block btn-square bg-primary text-white rounded-circle mb-4" style="width: 80px; height: 80px;">
                    <i class="fa fa-eye fa-2x"></i>
                </div>
                <h6 class="text-primary text-uppercase mb-2">Visi Kami</h6>
                <h2 class="display-6 mb-4">"Menjadi lembaga pendidikan tinggi Injili yang berkomitmen kepada Amanat Agung serta menjadi model penelitian teologi Injili di Indonesia."</h2>
            </div>
        </div>
    </div>

    {{-- BAGIAN MISI (4 Kolom untuk 4 Poin) --}}
    <div class="container-xxl py-6 pt-4">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase mb-2">Misi Kami</h6>
                <h1 class="display-6 mb-4">Empat Pilar Pelayanan</h1>
            </div>

            <div class="row g-4">
                {{-- Misi A --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white text-center h-100 p-4 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-graduation-cap fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Pendidikan Unggul</h5>
                        <p class="small mb-0">Melahirkan pemimpin rohani berkarakter Kristus dengan kapasitas kepemimpinan global.</p>
                    </div>
                </div>

                {{-- Misi B --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white text-center h-100 p-4 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-microscope fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Riset Internasional</h5>
                        <p class="small mb-0">Penelitian teologi bermutu internasional yang relevan dengan konteks Indonesia.</p>
                    </div>
                </div>

                {{-- Misi C --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white text-center h-100 p-4 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-cross fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Mobilisasi Misi</h5>
                        <p class="small mb-0">Menguatkan gereja lokal dan perintisan jemaat untuk dampak nyata bagi bangsa.</p>
                    </div>
                </div>

                {{-- Misi D --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-white text-center h-100 p-4 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="btn-square bg-light text-primary rounded-circle mx-auto mb-4" style="width: 64px; height: 64px;">
                            <i class="fa fa-handshake fa-2x"></i>
                        </div>
                        <h5 class="mb-3">Kolaborasi Strategis</h5>
                        <p class="small mb-0">Menjalin sinergi dengan berbagai lembaga dalam mengemban mandat kultural.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN TUJUAN & STRATEGI --}}
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="row g-5">

                {{-- TUJUAN --}}
                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Our Goals</h6>
                    <h1 class="display-6 mb-4">Tujuan Utama</h1>

                    <div class="d-flex align-items-start mb-4">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                            <i class="fa fa-user-graduate text-white"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Lulusan Global</h5>
                            <p class="mb-0">Menghasilkan pemimpin berwawasan teologi Injili yang siap melayani di skala dunia.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start mb-4">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                            <i class="fa fa-book-reader text-white"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Kontribusi Ilmiah</h5>
                            <p class="mb-0">Menjadi rujukan pemecahan masalah aktual gereja melalui penelitian bertaraf internasional.</p>
                        </div>
                    </div>

                    <div class="d-flex align-items-start">
                        <div class="flex-shrink-0 btn-square bg-primary rounded-circle me-3">
                            <i class="fa fa-church text-white"></i>
                        </div>
                        <div>
                            <h5 class="mb-1">Multiplikasi Jemaat</h5>
                            <p class="mb-0">Meningkatkan keterlibatan lembaga dalam perintisan jemaat baru yang signifikan.</p>
                        </div>
                    </div>
                </div>

                {{-- STRATEGI (Grid Items) --}}
                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <h6 class="text-primary text-uppercase mb-2">Our Strategy</h6>
                    <h1 class="display-6 mb-4">Langkah Strategis</h1>
                    <div class="row g-3">
                        <div class="col-sm-6">
                            <div class="bg-white p-3 h-100 rounded shadow-sm border-start border-4 border-primary">
                                <h6 class="mb-2"><i class="fa fa-laptop-code text-primary me-2"></i>Kurikulum 5.0</h6>
                                <p class="small mb-0">Integrasi teologi, karakter, dan servant leadership.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white p-3 h-100 rounded shadow-sm border-start border-4 border-primary">
                                <h6 class="mb-2"><i class="fa fa-atom text-primary me-2"></i>Ekosistem Riset</h6>
                                <p class="small mb-0">Riset kolaboratif dengan metodologi mutakhir dan pendanaan optimal.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white p-3 h-100 rounded shadow-sm border-start border-4 border-primary">
                                <h6 class="mb-2"><i class="fa fa-users-cog text-primary me-2"></i>Kapasitas Dosen</h6>
                                <p class="small mb-0">Meningkatkan integritas dan kualitas publikasi ilmiah dosen.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white p-3 h-100 rounded shadow-sm border-start border-4 border-primary">
                                <h6 class="mb-2"><i class="fa fa-tools text-primary me-2"></i>Infrastruktur</h6>
                                <p class="small mb-0">Penyediaan fasilitas pendukung riset bertaraf internasional.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white p-3 h-100 rounded shadow-sm border-start border-4 border-primary">
                                <h6 class="mb-2"><i class="fa fa-chalkboard-teacher text-primary me-2"></i>Upgrade Wawasan</h6>
                                <p class="small mb-0">Workshop & seminar misi berfokus pada multiplikasi jemaat.</p>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="bg-white p-3 h-100 rounded shadow-sm border-start border-4 border-primary">
                                <h6 class="mb-2"><i class="fa fa-file-signature text-primary me-2"></i>Kemitraan (MoU)</h6>
                                <p class="small mb-0">Kolaborasi strategis dengan mitra nasional dan internasional.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
