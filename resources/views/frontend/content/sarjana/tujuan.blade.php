@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">> >
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Tujuan, Sasaran & Strategi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Tujuan & Sasaran</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN 1: TUJUAN (3 PILAR/TRIDHARMA) --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Tridharma Perguruan Tinggi</h6>
                <h1 class="display-6 mb-4">Tujuan Prodi Sarjana Teologi</h1>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-graduation-cap fs-4"></i>
                        </div>
                        <h4 class="mb-3">1. Tujuan Pendidikan</h4>
                        <p class="mb-0">Menghasilkan sarjana bermutu tinggi yang memiliki kompetensi dalam penguasaan teologi biblika.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-search fs-4"></i>
                        </div>
                        <h4 class="mb-3">2. Tujuan Penelitian</h4>
                        <p class="mb-0">Menghasilkan sarjana yang mampu melakukan riset teologi yang handal sehingga bermanfaat bagi gereja dan masyarakat.</p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white p-4 h-100 shadow-sm rounded border-bottom border-5 border-primary">
                        <div class="d-inline-flex align-items-center justify-content-center bg-primary text-white rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-hand-holding-heart fs-4"></i>
                        </div>
                        <h4 class="mb-3">3. Tujuan Pengabdian</h4>
                        <p class="mb-0">Menghasilkan sarjana yang mampu mengabdi sebagai tenaga profesional dengan memiliki jiwa misional, kedewasaan spiritual, dan kecakapan ministerial.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- BAGIAN 2: SASARAN (LIST CHECK) --}}
    <div class="container-fluid bg-light overflow-hidden my-5 px-lg-0">
        <div class="container feature px-lg-0">
            <div class="row g-0 mx-lg-0">
                <div class="col-lg-6 feature-text py-5 wow fadeIn" data-wow-delay="0.1s">
                    <div class="p-lg-5 ps-lg-0">
                        <h6 class="text-primary text-uppercase mb-3">Target Capaian</h6>
                        <h1 class="display-6 mb-4">Sasaran Program Studi</h1>
                        <p class="mb-4 pb-2">Prodi Sarjana Teologi menetapkan sasaran berikut dalam penyelenggaraan pendidikannya:</p>

                        <div class="row g-4">
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Keyakinan Alkitabiah</h5>
                                        <p class="mb-0 text-muted">Terjadinya penyelidikan yang menimbulkan keyakinan terhadap seluruh isi Alkitab.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Penyelidikan Cermat</h5>
                                        <p class="mb-0 text-muted">Mendalami karya teologi biblika, sistematik, historika, dan praktika dari penulis internasional.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Karya Ilmiah</h5>
                                        <p class="mb-0 text-muted">Terselenggaranya penelitian teologi dan studi biblika yang dituangkan dalam karya ilmiah.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Pengabdian Berkesinambungan</h5>
                                        <p class="mb-0 text-muted">Terciptanya kegiatan pengabdian masyarakat yang berpotensi ditingkatkan di masa depan.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex align-items-start">
                                    <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary rounded-circle" style="width: 45px; height: 45px;">
                                        <i class="fa fa-check text-white"></i>
                                    </div>
                                    <div class="ms-4">
                                        <h5 class="mb-0">Kerjasama & Kemitraan</h5>
                                        <p class="mb-0 text-muted">Terjalinnya kerjasama dengan instansi pemerintah, alumni, dan lembaga terkait.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- OPSI 2: Area Tetap Besar, Gambar "Contain" --}}
                <div class="col-lg-6 pe-lg-0 wow fadeIn" data-wow-delay="0.5s" style="min-height: 400px;">
                    {{-- Tambahkan bg-white atau bg-light agar area kosong terlihat rapi --}}
                    <div class="position-relative h-100 bg-white d-flex align-items-center justify-content-center">
                        {{-- Ganti 'cover' menjadi 'contain'. Hapus absolute dan w/h-100 --}}
                        <img class="img-fluid" style="max-height: 100%; object-fit: contain;" src="{{ asset('assets-fe/img/profil2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- BAGIAN 3: STRATEGI (TABS) --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Langkah Strategis</h6>
                <h1 class="display-6 mb-4">Strategi Pencapaian</h1>
            </div>

            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-12">

                    {{-- Navigasi Tabs --}}
                    <ul class="nav nav-pills justify-content-center mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-pendidikan-tab" data-bs-toggle="pill" data-bs-target="#pills-pendidikan" type="button" role="tab" aria-controls="pills-pendidikan" aria-selected="true">
                                <i class="fa fa-book me-2"></i>Strategi Pendidikan
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-penelitian-tab" data-bs-toggle="pill" data-bs-target="#pills-penelitian" type="button" role="tab" aria-controls="pills-penelitian" aria-selected="false">
                                <i class="fa fa-microscope me-2"></i>Strategi Penelitian
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-pengabdian-tab" data-bs-toggle="pill" data-bs-target="#pills-pengabdian" type="button" role="tab" aria-controls="pills-pengabdian" aria-selected="false">
                                <i class="fa fa-hands-helping me-2"></i>Strategi Pengabdian
                            </button>
                        </li>
                    </ul>

                    {{-- Isi Tabs --}}
                    <div class="tab-content" id="pills-tabContent">

                        {{-- Tab 1: Pendidikan --}}
                        <div class="tab-pane fade show active" id="pills-pendidikan" role="tabpanel" aria-labelledby="pills-pendidikan-tab">
                            <div class="bg-light p-4 rounded shadow-sm">
                                <h4 class="mb-4 text-primary">A. Strategi Pendidikan</h4>
                                <ul class="list-group list-group-flush bg-transparent">
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Meningkatkan kompetensi dosen di bidang teologi, misiologi, dan pastoral melalui studi lanjut S3.</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Peningkatan jenjang kepangkatan dosen dan sertifikasi pendidik.</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Menambah koleksi buku berbobot karya pakar dalam dan luar negeri.</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Model pendidikan <strong>Wajib Belajar</strong> bagi mahasiswa selama 2 tahun (Senin-Rabu, 19.00-21.00 WIB).</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Perpustakaan buka malam hari (19.00-21.00 WIB) untuk optimalisasi belajar.</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>
                                        Sistem keseimbangan ilmu dan praktik:
                                        <br><small class="ms-4 text-muted">● Perkuliahan: Selasa - Jumat</small>
                                        <br><small class="ms-4 text-muted">● Praktik Pelayanan: Sabtu - Senin</small>
                                    </li>
                                </ul>
                            </div>
                        </div>

                        {{-- Tab 2: Penelitian --}}
                        <div class="tab-pane fade" id="pills-penelitian" role="tabpanel" aria-labelledby="pills-penelitian-tab">
                            <div class="bg-light p-4 rounded shadow-sm">
                                <h4 class="mb-4 text-primary">B. Strategi Penelitian</h4>
                                <ul class="list-group list-group-flush bg-transparent">
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Publikasi karya dosen di <strong>Jurnal Pistis</strong> (3x setahun) yang didistribusikan nasional.</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Publikasi penelitian melalui seminar-seminar dalam kalender akademik.</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Pengembangan penerbitan internal <strong>(STII Press & Iman Press)</strong> untuk buku teks ber-ISBN.</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Mata kuliah Metode Penelitian khusus dan pelibatan mahasiswa dalam riset.</li>
                                    <li class="list-group-item bg-transparent"><i class="fa fa-arrow-right text-primary me-2"></i>Publikasi hasil penelitian secara online melalui Website STTII.</li>
                                </ul>
                            </div>
                        </div>

                        {{-- Tab 3: Pengabdian --}}
                        <div class="tab-pane fade" id="pills-pengabdian" role="tabpanel" aria-labelledby="pills-pengabdian-tab">
                            <div class="bg-light p-4 rounded shadow-sm">
                                <h4 class="mb-4 text-primary">C. Strategi Pengabdian</h4>
                                <div class="d-flex align-items-center">
                                    <i class="fa fa-hands text-primary display-4 me-4"></i>
                                    <p class="fs-5 mb-0">Menjalin kemitraan dengan berbagai gereja dan lembaga untuk mencapai optimalisasi pendidikan dan pelayanan (gereja mitra, lembaga misi, dan instansi terkait).</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
