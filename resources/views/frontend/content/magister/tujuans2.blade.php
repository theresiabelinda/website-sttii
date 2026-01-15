@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Tujuan, Sasaran & Strategi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Tujuan S2</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN 1: TUJUAN (3 POIN UTAMA) --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Capaian Lulusan</h6>
                <h1 class="display-6 mb-4">Tujuan Prodi Magister Teologi</h1>
                <p class="text-secondary">Kami berkomitmen menghasilkan lulusan S2 dengan kualitas berikut:</p>
            </div>
            <div class="row g-4 justify-content-center">

                {{-- Tujuan 1 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-brain fs-4"></i>
                        </div>
                        <h4 class="mb-3">Pertumbuhan Intelektual</h4>
                        <p class="mb-0">Menghasilkan lulusan yang terus bertumbuh secara intelektual dan personal dalam pengenalan akan Allah.</p>
                    </div>
                </div>

                {{-- Tujuan 2 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-chalkboard-teacher fs-4"></i>
                        </div>
                        <h4 class="mb-3">Kecakapan Pelayanan</h4>
                        <p class="mb-0">Menghasilkan lulusan yang siap dan terampil melayani TUHAN sebagai penginjil, misiolog, pengajar, pemimpin gereja, dan konselor profesional.</p>
                    </div>
                </div>

                {{-- Tujuan 3 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-praying-hands fs-4"></i>
                        </div>
                        <h4 class="mb-3">Ketaatan & Kesetiaan</h4>
                        <p class="mb-0">Menghasilkan lulusan yang setia dalam mengasihi dan mentaati Allah di dalam Kristus Yesus.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- BAGIAN 2: SASARAN (Checklist Style) --}}
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary text-uppercase mb-3">Target Spesifik</h6>
                        <h1 class="display-6 mb-4">Sasaran Program Studi</h1>
                        <p class="mb-4 pb-2">Dalam penyelenggaraan pendidikan Magister, kami menetapkan sasaran sebagai berikut:</p>

                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Pengembangan Diri & Riset</h5>
                                        <p class="mb-0 text-muted">Mendorong mahasiswa untuk terus belajar dan mengembangkan diri secara intelektual, baik melalui penelitian, diskusi, maupun partisipasi akademik.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Pendidikan Komprehensif</h5>
                                        <p class="mb-0 text-muted">Menyediakan pendidikan yang berfokus pada persiapan lulusan untuk melayani sebagai penginjil, misiolog, pengajar, pemimpin gereja, dan konselor.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Landasan Iman Kokoh</h5>
                                        <p class="mb-0 text-muted">Membekali mahasiswa dengan iman yang kokoh dalam Kristus, sehingga mereka dapat mengasihi Allah dengan sepenuh hati, jiwa, pikiran, dan kekuatan.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Area Gambar Samping --}}
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100 bg-white d-flex align-items-center justify-content-center">
                        {{-- Pastikan path gambar S2 benar jika ada, atau gunakan default --}}
                        <img class="img-fluid" style="max-height: 100%; object-fit: contain;" src="{{ asset('assets/assets/img/fotos2.jpeg') }}" alt="Kegiatan Mahasiswa S2">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN 3: STRATEGI (LIST GRID) --}}
    {{-- Karena teks strategi S2 tidak dibagi per kategori, saya ubah layout Tabs menjadi Grid List agar lebih rapi --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Metode Pelaksanaan</h6>
                <h1 class="display-6 mb-4">Strategi Pencapaian</h1>
                <p class="text-secondary">Langkah-langkah strategis untuk mewujudkan visi dan misi program studi:</p>
            </div>

            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                {{-- Kolom Kiri --}}
                <div class="col-lg-6">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <ul class="list-group list-group-flush bg-transparent">
                            <li class="list-group-item bg-transparent d-flex align-items-start pb-3">
                                <i class="fa fa-arrow-right text-primary me-3 mt-1"></i>
                                <span>Menyediakan kurikulum yang relevan dengan konsentrasi prodi, kebutuhan pelayanan, serta perkembangan zaman, dengan penekanan pada pemikiran kritis dan analitis.</span>
                            </li>
                            <li class="list-group-item bg-transparent d-flex align-items-start py-3">
                                <i class="fa fa-arrow-right text-primary me-3 mt-1"></i>
                                <span>Mendorong keterlibatan aktif dalam penelitian independen (proyek penelitian & tesis) untuk mendalami topik tertentu secara mendalam.</span>
                            </li>
                            <li class="list-group-item bg-transparent d-flex align-items-start py-3">
                                <i class="fa fa-arrow-right text-primary me-3 mt-1"></i>
                                <span>Mengadakan diskusi dan seminar reguler tentang isu-isu teologis terkini dengan partisipasi aktif mahasiswa.</span>
                            </li>
                            <li class="list-group-item bg-transparent d-flex align-items-start pt-3">
                                <i class="fa fa-arrow-right text-primary me-3 mt-1"></i>
                                <span>Menyediakan akses sumber daya perpustakaan yang memadai (literatur terbaru, jurnal akademik, database elektronik).</span>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Kolom Kanan --}}
                <div class="col-lg-6">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <ul class="list-group list-group-flush bg-transparent">
                            <li class="list-group-item bg-transparent d-flex align-items-start pb-3">
                                <i class="fa fa-arrow-right text-primary me-3 mt-1"></i>
                                <span>Mendorong kolaborasi dan diskusi antar-mahasiswa melalui kelompok studi atau forum online untuk saling berbagi pengetahuan.</span>
                            </li>
                            <li class="list-group-item bg-transparent d-flex align-items-start py-3">
                                <i class="fa fa-arrow-right text-primary me-3 mt-1"></i>
                                <span>Mengundang dosen tamu dan pakar teologi terkemuka untuk memberikan kuliah dan wawasan beragam dari perspektif berbeda.</span>
                            </li>
                            <li class="list-group-item bg-transparent d-flex align-items-start pt-3">
                                <i class="fa fa-arrow-right text-primary me-3 mt-1"></i>
                                <span>Membangun kemitraan dengan institusi teologi dan universitas lain (lokal & internasional) untuk pertukaran akademik dan kolaborasi penelitian.</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- CSS Kecil untuk Hover Effect pada Card Tujuan --}}
    <style>
        .service-item {
            transition: .3s;
        }
        .service-item:hover {
            transform: translateY(-5px);
            background-color: #f8f9fa !important;
        }
    </style>

@endsection
