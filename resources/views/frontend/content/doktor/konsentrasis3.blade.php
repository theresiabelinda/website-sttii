@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Konsentrasi Studi S3</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Konsentrasi S3</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- CONTENT SECTION --}}
    <div class="container-xxl py-6">
        <div class="container">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Puncak Studi Teologi</h6>
                <h1 class="display-6 mb-4">3 Konsentrasi Doktor Teologi</h1>
                <p class="text-secondary">Program Doktor kami dirancang untuk menghasilkan pakar teologi yang mendalam, pemimpin strategis, dan konselor yang Alkitabiah.</p>
            </div>

            <div class="row g-5">
                {{-- TAB NAVIGATION (Kiri) --}}
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <button class="nav-link active text-start py-3 mb-2" id="v-pills-biblika-tab" data-bs-toggle="pill" data-bs-target="#v-pills-biblika" type="button" role="tab" aria-controls="v-pills-biblika" aria-selected="true">
                            <i class="fa fa-scroll me-2"></i> Konsentrasi Biblika
                        </button>

                        <button class="nav-link text-start py-3 mb-2" id="v-pills-leadership-tab" data-bs-toggle="pill" data-bs-target="#v-pills-leadership" type="button" role="tab" aria-controls="v-pills-leadership" aria-selected="false">
                            <i class="fa fa-chalkboard-teacher me-2"></i> Leadership & Ed.
                        </button>

                        <button class="nav-link text-start py-3 mb-2" id="v-pills-counseling-tab" data-bs-toggle="pill" data-bs-target="#v-pills-counseling" type="button" role="tab" aria-controls="v-pills-counseling" aria-selected="false">
                            <i class="fa fa-heart me-2"></i> Biblical Counseling
                        </button>

                    </div>
                </div>

                {{-- TAB CONTENT (Kanan) --}}
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="tab-content" id="v-pills-tabContent">

                        {{-- 1. Konsentrasi Biblika --}}
                        <div class="tab-pane fade show active" id="v-pills-biblika" role="tabpanel" aria-labelledby="v-pills-biblika-tab">
                            <div class="bg-light p-4 rounded shadow-sm border-top border-5 border-primary">
                                <h3 class="mb-3 text-dark">Konsentrasi Biblika</h3>
                                <p class="mb-4 text-muted">Membuka kesempatan bagi mahasiswa untuk mendalami topik-topik populer masa kini seperti <strong>Gulungan Laut Mati</strong> dan <strong>Studi Perjanjian Lama dalam Perjanjian Baru</strong>.</p>

                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <h5 class="text-primary"><i class="fa fa-search me-2"></i>Fokus Studi</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fa fa-check text-success me-2"></i><strong>Studi Qumran (Extra-Biblical Texts):</strong> Memperasah bahasa Semitik, memahami sejarah, metode tafsir, teologi, serta kaitannya dengan PB.</li>
                                            <li class="mb-2"><i class="fa fa-check text-success me-2"></i><strong>Studi PL dalam PB:</strong> Memahami teks dan metode tafsir yang digunakan para penulis PB tatkala mengutip PL.</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="bg-white p-3 rounded border">
                                            <h6 class="text-dark mb-2"><i class="fa fa-pen-nib me-2"></i>Luaran Disertasi</h6>
                                            <p class="mb-0 small text-secondary">
                                                Mata kuliah ini dirancang khusus untuk membantu mahasiswa Biblika dalam penyusunan disertasi yang berkualitas, baik yang berkaitan dengan Perjanjian Lama maupun Perjanjian Baru.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 2. Leadership & Christian Education --}}
                        <div class="tab-pane fade" id="v-pills-leadership" role="tabpanel" aria-labelledby="v-pills-leadership-tab">
                            <div class="bg-light p-4 rounded shadow-sm border-top border-5 border-primary">
                                <h3 class="mb-3 text-dark">Konsentrasi Leadership & Christian Education</h3>
                                <p class="mb-4 text-muted">Bertujuan mempersiapkan mahasiswa menjadi pemimpin yang handal baik di gereja maupun dunia akademis (Perguruan Tinggi, STT, atau Sekolah).</p>

                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-users-cog me-2"></i>Kompetensi Utama</h5>
                                        <ul class="list-unstyled">
                                            <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Membangun organisasi pelayanan & Teknik komunikasi.</li>
                                            <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Perekrutan dosen/staf dan pelatihan (Staff Training).</li>
                                            <li class="mb-2"><i class="fa fa-check text-success me-2"></i>Manajemen transisi kepemimpinan yang Alkitabiah.</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-book me-2"></i>Fokus Pendidikan</h5>
                                        <p class="mb-2"><strong>Curriculum Theory and Design:</strong></p>
                                        <p class="small text-secondary">Membantu mahasiswa mendesain kurikulum di perguruan tinggi yang relevan dan selaras dengan peraturan pemerintah.</p>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="bg-white p-3 rounded border">
                                            <h6 class="text-dark mb-2"><i class="fa fa-pen-nib me-2"></i>Luaran Disertasi</h6>
                                            <p class="mb-0 small text-secondary">
                                                Diharapkan dapat membantu mahasiswa dalam penyusunan disertasi yang berkaitan dengan kepemimpinan, baik di konteks gerejawi maupun institusi pendidikan.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 3. Biblical Counseling --}}
                        <div class="tab-pane fade" id="v-pills-counseling" role="tabpanel" aria-labelledby="v-pills-counseling-tab">
                            <div class="bg-light p-4 rounded shadow-sm border-top border-5 border-primary">
                                <h3 class="mb-3 text-dark">Konsentrasi Biblical Counseling</h3>
                                <p class="mb-4 text-muted">Program spesialisasi yang diperlengkapi untuk melakukan pelayanan konseling yang Alkitabiah secara mendalam dan praktis.</p>

                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <h5 class="text-primary"><i class="fa fa-user-check me-2"></i>Target Peserta</h5>
                                        <p>Konsentrasi ini diperuntukkan khusus bagi:</p>
                                        <div class="d-flex gap-2 flex-wrap mb-3">
                                            <span class="badge bg-white text-primary border border-primary p-2">Gembala Sidang</span>
                                            <span class="badge bg-white text-primary border border-primary p-2">Dosen/Guru Konseling</span>
                                            <span class="badge bg-white text-primary border border-primary p-2">Konselor Profesional</span>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <h5 class="text-primary"><i class="fa fa-hands-helping me-2"></i>Ruang Lingkup Pelayanan</h5>
                                        <ul class="list-group list-group-flush bg-transparent">
                                            <li class="list-group-item bg-transparent px-0"><i class="fa fa-arrow-right text-primary me-2"></i>Pertumbuhan pribadi (jemaat, klien, atau siswa).</li>
                                            <li class="list-group-item bg-transparent px-0"><i class="fa fa-arrow-right text-primary me-2"></i>Penanganan konflik dalam keluarga.</li>
                                            <li class="list-group-item bg-transparent px-0"><i class="fa fa-arrow-right text-primary me-2"></i>Resolusi konflik di dalam gereja.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Tombol Daftar --}}
            <div class="row mt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary py-3 px-5 rounded-pill">Pendaftaran S3</a>
                </div>
            </div>

        </div>
    </div>

    {{-- Styling CSS (Sama seperti S2 agar konsisten) --}}
    <style>
        .nav-pills .nav-link {
            background-color: #fff;
            color: #555;
            margin-bottom: 8px;
            border-radius: 8px;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
            color: var(--bs-primary);
        }

        .nav-pills .nav-link.active {
            background-color: var(--bs-primary);
            color: #fff;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
    </style>

@endsection
