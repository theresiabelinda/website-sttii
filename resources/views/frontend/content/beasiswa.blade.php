@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Beasiswa & Bantuan Studi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Kehidupan Kampus</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Beasiswa</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- SECTION 1: JENIS BEASISWA --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Dukungan Finansial</h6>
                <h1 class="display-6 mb-4">Program Beasiswa STTII</h1>
                <p class="text-secondary">Kami berkomitmen mendukung mahasiswa yang berprestasi dan memiliki panggilan pelayanan namun terkendala biaya.</p>
            </div>

            <div class="row g-4 justify-content-center">
                {{-- Jenis 1: Beasiswa Prestasi --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="beasiswa-item bg-white p-4 h-100 shadow-sm rounded border-top border-5 border-primary text-center">
                        <div class="icon-box bg-light rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fa fa-medal text-primary fs-2"></i>
                        </div>
                        <h4 class="mb-3">Beasiswa Sensasi</h4>
                        <p class="mb-4 text-muted">Beasiswa Selamatkan 1 Generasi (Sensasi) diberikan kepada mahasiswa dengan IPK tinggi (minimal 3.00) dan aktif dalam kegiatan kemahasiswaan serta pelayanan kampus.</p>
                        {{-- <a href="#" class="btn btn-sm btn-outline-primary px-3 rounded-pill">Lihat Detail</a> --}}
                    </div>
                </div>

                {{-- Jenis 2: Beasiswa Yayasan (Ekonomi) --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="beasiswa-item bg-white p-4 h-100 shadow-sm rounded border-top border-5 border-success text-center">
                        <div class="icon-box bg-light rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            <i class="fa fa-hand-holding-heart text-success fs-2"></i>
                        </div>
                        <h4 class="mb-3">Anglican Church Scholarship</h4>
                        <p class="mb-4 text-muted">Beasiswa yang diberikan kepada mahasiswa dengan IPK tinggi (minimal 3.00) dan aktif dalam kegiatan kemahasiswaan serta pelayanan gereja.</div>
                </div>

                {{-- Jenis 3: Beasiswa Perorangan & Alumni --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="beasiswa-item bg-white p-4 h-100 shadow-sm rounded border-top border-5 border-warning text-center">
                        <div class="icon-box bg-light rounded-circle mx-auto mb-4 d-flex align-items-center justify-content-center" style="width: 80px; height: 80px;">
                            {{-- Icon diganti menjadi User Friends (Perorangan/Alumni) --}}
                            <i class="fa fa-user-friends text-warning fs-2"></i>
                        </div>
                        <h4 class="mb-3">Beasiswa Perorangan / Alumni</h4>
                        <p class="mb-4 text-muted">Dukungan dana pendidikan yang bersumber dari donatur perorangan dan kepedulian Ikatan Alumni STTII Yogyakarta.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- SECTION 2: PERSYARATAN & ALUR (Split Layout) --}}
    <div class="container-fluid bg-light py-6">
        <div class="container">
            <div class="row g-5">

                {{-- Kolom Kiri: Persyaratan Umum --}}
                <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                    <h3 class="mb-4">Persyaratan Umum</h3>
                    <p class="mb-4">Mahasiswa yang ingin mengajukan beasiswa wajib memenuhi kriteria dasar berikut untuk memastikan bantuan tepat sasaran:</p>

                    <ul class="list-group list-group-flush bg-transparent">
                        <li class="list-group-item bg-transparent d-flex align-items-center px-0">
                            <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                            <span>Terdaftar sebagai mahasiswa aktif (Minimal Semester 2).</span>
                        </li>
                        <li class="list-group-item bg-transparent d-flex align-items-center px-0">
                            <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                            <span>Memiliki Indeks Prestasi Kumulatif (IPK) minimal <strong>3.00</strong>.</span>
                        </li>
                        <li class="list-group-item bg-transparent d-flex align-items-center px-0">
                            <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                            <span>Berkelakuan baik dan tidak sedang terkena sanksi akademik.</span>
                        </li>
                        <li class="list-group-item bg-transparent d-flex align-items-center px-0">
                            <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                            <span>Aktif dalam pelayanan gereja atau kegiatan kerohanian kampus.</span>
                        </li>
                        <li class="list-group-item bg-transparent d-flex align-items-center px-0">
                            <i class="fa fa-check-circle text-primary me-3 fs-5"></i>
                            <span>Melampirkan Surat Keterangan Tidak Mampu (khusus beasiswa bantuan).</span>
                        </li>
                    </ul>
                </div>

                {{-- Kolom Kanan: Alur Pendaftaran (Timeline Style) --}}
                <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                    <h3 class="mb-4">Alur Pengajuan</h3>
                    <div class="position-relative border-start border-2 border-primary ps-4">

                        <div class="mb-4">
                            <span class="position-absolute start-0 bg-white border border-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; margin-left: -13px;">
                                <small class="text-primary fw-bold">1</small>
                            </span>
                            <h5 class="mb-1">Pengambilan Formulir</h5>
                            <p class="mb-0 text-muted small">Mahasiswa mengunduh formulir di website atau mengambil di Bagian Kemahasiswaan (BAAK).</p>
                        </div>

                        <div class="mb-4">
                            <span class="position-absolute start-0 bg-white border border-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; margin-left: -13px;">
                                <small class="text-primary fw-bold">2</small>
                            </span>
                            <h5 class="mb-1">Melengkapi Berkas</h5>
                            <p class="mb-0 text-muted small">Menyiapkan transkrip nilai, surat rekomendasi, dan dokumen pendukung lainnya.</p>
                        </div>

                        <div class="mb-4">
                            <span class="position-absolute start-0 bg-white border border-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; margin-left: -13px;">
                                <small class="text-primary fw-bold">3</small>
                            </span>
                            <h5 class="mb-1">Wawancara (Interview)</h5>
                            <p class="mb-0 text-muted small">Calon penerima beasiswa akan diwawancarai oleh Pembantu Ketua III Bidang Kemahasiswaan.</p>
                        </div>

                        <div>
                            <span class="position-absolute start-0 bg-primary border border-primary rounded-circle d-flex align-items-center justify-content-center" style="width: 24px; height: 24px; margin-left: -13px;">
                                <i class="fa fa-check text-white" style="font-size: 10px;"></i>
                            </span>
                            <h5 class="mb-1">Pengumuman</h5>
                            <p class="mb-0 text-muted small">Hasil seleksi akan diumumkan melalui papan pengumuman kampus dan email mahasiswa.</p>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- STYLE CUSTOM --}}
    <style>
        .beasiswa-item {
            transition: .4s;
        }

        .beasiswa-item:hover {
            transform: translateY(-10px);
            background-color: #f8f9fa !important;
        }

        .beasiswa-item:hover .icon-box {
            background-color: var(--bs-primary) !important;
        }

        .beasiswa-item:hover .icon-box i {
            color: #fff !important;
        }

        /* Khusus Border Warna-warni saat hover */
        .beasiswa-item.border-success:hover .icon-box { background-color: #198754 !important; }
        .beasiswa-item.border-warning:hover .icon-box { background-color: #ffc107 !important; }
    </style>

@endsection
