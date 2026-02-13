@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Tujuan & Strategi S2</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Tujuan S2</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN 1: TUJUAN DENGAN FOTO (Sesuai Struktur Sebelumnya) --}}
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary text-uppercase mb-3">Capaian Lulusan</h6>
                        <h1 class="display-6 mb-4">Tujuan Prodi Magister Teologi</h1>
                        <p class="mb-4 pb-2">Menyiapkan pemimpin rohani yang relevan dan adaptif di era digital:</p>

                        <div class="row g-4">
                            {{-- Tujuan A --}}
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-graduation-cap text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-1">Lulusan Unggul Era 5.0</h5>
                                        <p class="mb-0 text-muted small">Teologi injili kritis dan integratif yang berdampak di masyarakat era 5.0.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Tujuan B --}}
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-file-alt text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-1">Publikasi Riset Bereputasi</h5>
                                        <p class="mb-0 text-muted small">Penelitian terindeks SINTA 4 hingga Jurnal Internasional bereputasi.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Tujuan C --}}
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-church text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-1">Kontribusi Perintisan</h5>
                                        <p class="mb-0 text-muted small">Mampu berkontribusi dalam perintisan jemaat dan lembaga pelayanan lainnya.</p>
                                    </div>
                                </div>
                            </div>
                            {{-- Tujuan D --}}
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-handshake text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-1">Kemitraan Strategis</h5>
                                        <p class="mb-0 text-muted small">Meningkatkan MoU & MoA nasional dan internasional.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- AREA GAMBAR S2 --}}
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100 bg-white d-flex align-items-center justify-content-center">
                        {{-- Sesuaikan path gambar ke folder aset Anda --}}
                        <img class="img-fluid" style="max-height: 100%; object-fit: contain;" src="{{ asset('assets/assets/img/fotos2.jpeg') }}" alt="Magister Teologi STTII">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN 2: STRATEGI (Visual Grid) --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Implementasi</h6>
                <h1 class="display-6 mb-4">Strategi Pencapaian</h1>
                <div class="bg-primary mx-auto" style="width: 80px; height: 3px; border-radius: 2px;"></div>
            </div>

            <div class="row g-4">
                {{-- Strategi A --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-light p-4 rounded h-100 shadow-sm">
                        <i class="fa fa-book-reader fa-2x text-primary mb-3"></i>
                        <h5>Kurikulum Adaptif</h5>
                        <p class="small mb-0">Merancang kurikulum teologi injili yang terintegrasi sesuai perkembangan masyarakat era 5.0.</p>
                    </div>
                </div>
                {{-- Strategi B --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-light p-4 rounded h-100 shadow-sm">
                        <i class="fa fa-laptop-code fa-2x text-primary mb-3"></i>
                        <h5>Inovasi Digital</h5>
                        <p class="small mb-0">Pendekatan berbasis proyek dan penggunaan teknologi digital dalam proses KBM.</p>
                    </div>
                </div>
                {{-- Strategi C --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light p-4 rounded h-100 shadow-sm">
                        <i class="fa fa-users fa-2x text-primary mb-3"></i>
                        <h5>Collaborative Learning</h5>
                        <p class="small mb-0">Team teaching dan seminar nasional/internasional guna menjawab isu kontemporer.</p>
                    </div>
                </div>
                {{-- Strategi D --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-light p-4 rounded h-100 shadow-sm">
                        <i class="fa fa-microscope fa-2x text-primary mb-3"></i>
                        <h5>Research Group</h5>
                        <p class="small mb-0">Pendampingan artikel melalui research group dan kolaborasi penelitian interdisipliner.</p>
                    </div>
                </div>
                {{-- Strategi E --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="bg-light p-4 rounded h-100 shadow-sm">
                        <i class="fa fa-tools fa-2x text-primary mb-3"></i>
                        <h5>Skill Praktis</h5>
                        <p class="small mb-0">Training dan workshop untuk perintisan jemaat serta pengembangan pelayanan lainnya.</p>
                    </div>
                </div>
                {{-- Strategi F --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="bg-light p-4 rounded h-100 shadow-sm">
                        <i class="fa fa-handshake fa-2x text-primary mb-3"></i>
                        <h5>Memorandum (MoU)</h5>
                        <p class="small mb-0">Kerjasama dengan Sinode, Lembaga Misi, dan Gereja Lokal baik dalam maupun luar negeri.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
