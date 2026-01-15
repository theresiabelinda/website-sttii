@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    {{-- Saya pertahankan kode header Anda yang sudah bagus dengan background image --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Visi & Misi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Visi Misi S1</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- VISI SECTION --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.1s">
                    {{-- Judul Seksi --}}
                    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                        <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 2px;">Landasan Kami</h6>
                        <h1 class="display-6 mb-4">Visi Prodi Sarjana Teologi</h1>
                        <div class="bg-primary mx-auto" style="width: 80px; height: 3px; border-radius: 2px;"></div>
                    </div>

                    {{-- Visi Card (Clean Style) --}}
                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden position-relative">
                        <div class="card-body p-5 text-center position-relative z-index-1">
                            <i class="fa fa-quote-left text-primary display-3 mb-4 opacity-25"></i>
                            <h2 class="fst-italic mb-4 text-dark" style="line-height: 1.6; font-weight: 300;">
                                "Menjadi program studi teologi unggul dalam pendidikan teologi berbasis Alkitab."
                            </h2>
                            <i class="fa fa-quote-right text-primary display-3 mt-2 opacity-25"></i>
                        </div>

                        {{-- Hiasan aksen di pojok --}}
                        <div class="position-absolute top-0 start-0 bg-primary" style="width: 5px; height: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MISI SECTION (Background Light untuk pemisah visual) --}}
    <div class="container-fluid bg-light py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 2px;">Langkah Nyata</h6>
                <h1 class="display-6 mb-4">Misi Prodi</h1>
                <p class="text-secondary">Tiga pilar utama yang menjadi fokus pergerakan kami:</p>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- Misi 1 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="misi-card bg-white p-5 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">01</span>
                        <div class="icon-box mb-4">
                            <i class="fa fa-bible fs-2"></i>
                        </div>
                        <h4 class="mb-3">Pendidikan Alkitabiah</h4>
                        <p class="mb-0">Menyelenggarakan pendidikan teologi Alkitabiah yang mendalam dan relevan dengan konteks zaman.</p>
                    </div>
                </div>

                {{-- Misi 2 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="misi-card bg-white p-5 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">02</span>
                        <div class="icon-box mb-4">
                            <i class="fa fa-user-graduate fs-2"></i>
                        </div>
                        <h4 class="mb-3">Integritas Rohani</h4>
                        <p class="mb-0">Menghasilkan lulusan berintegritas rohani yang memiliki karakter Kristiani yang kuat dan teruji.</p>
                    </div>
                </div>

                {{-- Misi 3 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="misi-card bg-white p-5 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">03</span>
                        <div class="icon-box mb-4">
                            <i class="fa fa-church fs-2"></i>
                        </div>
                        <h4 class="mb-3">Pelayanan Aktif</h4>
                        <p class="mb-0">Berperan aktif dalam pelayanan gereja dan masyarakat sebagai wujud pengabdian nyata.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- CSS Custom untuk Efek Elegan --}}
    <style>
        /* Styling Kartu Misi */
        .misi-card {
            transition: all 0.4s ease;
            border-bottom: 3px solid transparent;
            z-index: 1;
        }

        .misi-card .icon-box i {
            color: #FDB10C; /* Warna Primary/Emas - Sesuaikan dengan tema Anda */
            transition: all 0.4s ease;
        }

        .misi-card h4, .misi-card p {
            transition: all 0.4s ease;
            color: #555;
        }

        /* Nomor Besar di Belakang (Watermark) */
        .misi-number {
            position: absolute;
            top: -10px;
            right: 10px;
            font-size: 5rem;
            font-weight: 900;
            color: #f0f0f0;
            z-index: -1;
            transition: all 0.4s ease;
            font-family: sans-serif;
        }

        /* Efek Saat Hover (Mouse Masuk) */
        .misi-card:hover {
            transform: translateY(-10px); /* Naik ke atas */
            background-color: #FDB10C !important; /* Ganti warna background jadi Primary */
            border-bottom: 3px solid #dba632;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }

        /* Ubah warna teks jadi putih saat hover */
        .misi-card:hover h4,
        .misi-card:hover p {
            color: #fff !important;
        }

        .misi-card:hover .icon-box i {
            color: #fff !important;
            transform: scale(1.2);
        }

        /* Ubah warna nomor watermark saat hover */
        .misi-card:hover .misi-number {
            color: rgba(255, 255, 255, 0.2);
        }
    </style>

@endsection
