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
                    <li class="breadcrumb-item text-primary active" aria-current="page">Tujuan S3</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN 1: TUJUAN (3 POIN UTAMA) --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Komitmen Doktoral</h6>
                <h1 class="display-6 mb-4">Tujuan Prodi Doktor Teologi</h1>
                <p class="text-secondary">Kami bertekad menghasilkan Doktor Teologi dengan kualifikasi unggul sebagai berikut:</p>
            </div>
            <div class="row g-4 justify-content-center">

                {{-- Tujuan 1 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-bible fs-4"></i>
                        </div>
                        <h4 class="mb-3">Solusi Biblika</h4>
                        <p class="mb-0">Mampu menjawab pergumulan gereja dengan mendasarkan pada prinsip-prinsip Alkitab yang digali secara cermat (eksegesis mendalam).</p>
                    </div>
                </div>

                {{-- Tujuan 2 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-user-tie fs-4"></i>
                        </div>
                        <h4 class="mb-3">Peneliti & Pemimpin</h4>
                        <p class="mb-0">Mampu menjadi peneliti, pengajar, dan pemimpin gereja/lembaga pendidikan tinggi Teologi baik di Indonesia maupun mancanegara.</p>
                    </div>
                </div>

                {{-- Tujuan 3 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-heart fs-4"></i>
                        </div>
                        <h4 class="mb-3">Karakter Mulia</h4>
                        <p class="mb-0">Memiliki watak berbudi luhur sesuai Kitab Suci, serta konsisten menerapkan kebenaran tersebut dalam pembangunan karakter institusi yang dipimpinnya.</p>
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
                        <h6 class="text-primary text-uppercase mb-3">Target & Capaian</h6>
                        <h1 class="display-6 mb-4">Sasaran Program Studi</h1>
                        <p class="mb-4 pb-2">Sasaran penyelenggaraan pendidikan Doktor Teologi meliputi:</p>

                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Fasilitas & Pengetahuan Maksimal</h5>
                                        <p class="mb-0 text-muted">Menyediakan fasilitas terbaik untuk pengelolaan program yang optimal guna menghasilkan lulusan dengan pengetahuan Teologi Biblika maksimal.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">SDM Berkualitas</h5>
                                        <p class="mb-0 text-muted">Menyediakan tenaga pengelola (dosen dan tenaga kependidikan) yang berkualitas tinggi.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Mutu & Pendanaan</h5>
                                        <p class="mb-0 text-muted">Meningkatkan mutu pengajaran, penelitian, dan pengabdian melalui alokasi dana yang memadai.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Kemitraan Luas</h5>
                                        <p class="mb-0 text-muted">Menjalin kemitraan (dalam & luar negeri) untuk meningkatkan kualitas pengelolaan program studi.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Area Gambar Samping --}}
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    <div class="position-relative h-100 bg-white d-flex align-items-center justify-content-center">
                        {{-- Ganti gambar di sini --}}
                        <img class="img-fluid" style="max-height: 100%; object-fit: contain;" src="{{ asset('assets/assets/img/profils3.jpeg') }}" alt="Kegiatan Doktoral">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN 3: STRATEGI (LIST GRID) --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Rencana Aksi</h6>
                <h1 class="display-6 mb-4">Strategi Pencapaian</h1>
                <p class="text-secondary">Langkah konkret untuk memastikan tercapainya visi, misi, dan tujuan program doktoral:</p>
            </div>

            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                {{-- Kolom Kiri --}}
                <div class="col-lg-6">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <ul class="list-group list-group-flush bg-transparent">
                            {{-- Strategi 1 --}}
                            <li class="list-group-item bg-transparent d-flex align-items-start pb-3">
                                <i class="fa fa-building text-primary me-3 mt-1"></i>
                                <span>Menyediakan sarana dan prasarana yang lengkap agar penyelenggaraan program studi berjalan optimal.</span>
                            </li>
                            {{-- Strategi 2 --}}
                            <li class="list-group-item bg-transparent d-flex align-items-start py-3">
                                <i class="fa fa-book-reader text-primary me-3 mt-1"></i>
                                <div>
                                    <span>Menyelenggarakan pendidikan dengan 5 Kriteria Utama:</span>
                                    <ul class="mb-0 mt-1 text-muted small" style="list-style-type: circle;">
                                        <li><strong>Otoritas:</strong> Alkitab sebagai dasar mutlak.</li>
                                        <li><strong>Diversitas:</strong> Wawasan studi yang luas.</li>
                                        <li><strong>Spesialisasi:</strong> Pengkhususan sesuai panggilan.</li>
                                        <li><strong>Korelasi:</strong> Keseimbangan pengetahuan & pelayanan.</li>
                                        <li><strong>Interaksi:</strong> Metode belajar timbal balik.</li>
                                    </ul>
                                </div>
                            </li>
                            {{-- Strategi 3 --}}
                            <li class="list-group-item bg-transparent d-flex align-items-start py-3">
                                <i class="fa fa-users text-primary me-3 mt-1"></i>
                                <span>Menciptakan lingkungan kampus kondusif melalui hubungan akrab antara dosen, mahasiswa, dan karyawan.</span>
                            </li>
                            {{-- Strategi 4 --}}
                            <li class="list-group-item bg-transparent d-flex align-items-start pt-3">
                                <i class="fa fa-life-ring text-primary me-3 mt-1"></i>
                                <span>Memberikan pendampingan (solusi masalah) bagi mahasiswa yang mengalami kendala studi agar lulus tepat waktu.</span>
                            </li>
                        </ul>
                    </div>
                </div>

                {{-- Kolom Kanan --}}
                <div class="col-lg-6">
                    <div class="bg-light p-4 rounded shadow-sm h-100">
                        <ul class="list-group list-group-flush bg-transparent">
                            {{-- Strategi 5 --}}
                            <li class="list-group-item bg-transparent d-flex align-items-start pb-3">
                                <i class="fa fa-certificate text-primary me-3 mt-1"></i>
                                <span>Meningkatkan kualifikasi dosen melalui perolehan Jabatan Fungsional Akademik (JFA) dan sertifikasi pendidik.</span>
                            </li>
                            {{-- Strategi 6 --}}
                            <li class="list-group-item bg-transparent d-flex align-items-start py-3">
                                <i class="fa fa-journal-whills text-primary me-3 mt-1"></i>
                                <span>Mendorong dosen melakukan penelitian dan publikasi jurnal nasional yang berguna bagi gereja dan masyarakat.</span>
                            </li>
                            {{-- Strategi 7 --}}
                            <li class="list-group-item bg-transparent d-flex align-items-start py-3">
                                <i class="fa fa-bullhorn text-primary me-3 mt-1"></i>
                                <span>Melakukan promosi rutin melalui media sosial, brosur, dan kegiatan <em>mission trip</em> mahasiswa ke berbagai daerah.</span>
                            </li>
                            {{-- Strategi 8 --}}
                            <li class="list-group-item bg-transparent d-flex align-items-start pt-3">
                                <i class="fa fa-sync-alt text-primary me-3 mt-1"></i>
                                <span>Melakukan evaluasi kurikulum berkala menyesuaikan perkembangan teologi dan masukan dari <em>stakeholders</em> (alumni/gereja).</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    {{-- CSS Kecil untuk Hover Effect --}}
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
