@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Visi & Misi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Visi Misi S3</li>
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
                        <h1 class="display-6 mb-4">Visi Prodi Doktor Teologi</h1>
                        <div class="bg-primary mx-auto" style="width: 80px; height: 3px; border-radius: 2px;"></div>
                    </div>

                    {{-- Visi Card --}}
                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden position-relative">
                        <div class="card-body p-5 text-center position-relative z-index-1">
                            <i class="fa fa-quote-left text-primary display-3 mb-4 opacity-25"></i>
                            <h2 class="fst-italic mb-4 text-dark" style="line-height: 1.6; font-weight: 300;">
                                "Menjadi Program Doktor Teologi yang menekankan penelitian cermat teks-teks Alkitab sebagai landasan perumusan Teologi Biblika untuk menjawab kebutuhan dan pergumulan gereja di Indonesia."
                            </h2>
                            <i class="fa fa-quote-right text-primary display-3 mt-2 opacity-25"></i>
                        </div>
                        {{-- Hiasan aksen --}}
                        <div class="position-absolute top-0 start-0 bg-primary" style="width: 5px; height: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MISI SECTION (Background Light) --}}
    <div class="container-fluid bg-light py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 2px;">Langkah Strategis</h6>
                <h1 class="display-6 mb-4">Misi Prodi</h1>
                <p class="text-secondary">Lima pilar utama dalam penyelenggaraan pendidikan Doktoral kami:</p>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- Misi 1 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="misi-card bg-white p-5 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">01</span>
                        <div class="icon-box mb-4">
                            <i class="fa fa-scroll fs-2"></i>
                        </div>
                        <h4 class="mb-3">Penelitian Teks & Teologi</h4>
                        <p class="mb-0">Fokus pada penggalian cermat teks Alkitab, bahasa asli, dan warisan Teologi Injili dalam penelitian Kitab Suci dan Teologi Biblika.</p>
                    </div>
                </div>

                {{-- Misi 2 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="misi-card bg-white p-5 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">02</span>
                        <div class="icon-box mb-4">
                            <i class="fa fa-globe-asia fs-2"></i>
                        </div>
                        <h4 class="mb-3">Kepekaan Kontekstual</h4>
                        <p class="mb-0">Penyelenggaraan pendidikan yang peka terhadap perkembangan sosial, ekonomi, politik, dan teologi yang dihadapi umat dan gereja di Indonesia.</p>
                    </div>
                </div>

                {{-- Misi 3 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="misi-card bg-white p-5 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">03</span>
                        <div class="icon-box mb-4">
                            <i class="fa fa-hands-helping fs-2"></i>
                        </div>
                        <h4 class="mb-3">Aplikasi & Solusi</h4>
                        <p class="mb-0">Memanfaatkan hasil penelitian untuk menjawab kebutuhan nyata umat dan pergumulan gereja-gereja di Indonesia.</p>
                    </div>
                </div>

                {{-- Misi 4 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="misi-card bg-white p-5 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">04</span>
                        <div class="icon-box mb-4">
                            <i class="fa fa-university fs-2"></i>
                        </div>
                        <h4 class="mb-3">Standar Sarana</h4>
                        <p class="mb-0">Menyediakan sarana dan prasarana yang memenuhi standar pengelolaan program studi yang berkualitas tinggi.</p>
                    </div>
                </div>

                {{-- Misi 5 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="misi-card bg-white p-5 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">05</span>
                        <div class="icon-box mb-4">
                            <i class="fa fa-user-tie fs-2"></i>
                        </div>
                        <h4 class="mb-3">Mutu Pengelola</h4>
                        <p class="mb-0">Menyediakan dan meningkatkan mutu tenaga pengelola program secara berkelanjutan demi keunggulan akademik.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- CSS Custom --}}
    <style>
        /* Styling Kartu Misi */
        .misi-card {
            transition: all 0.4s ease;
            border-bottom: 3px solid transparent;
            z-index: 1;
        }

        .misi-card .icon-box i {
            color: #FDB10C;
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
            transform: translateY(-10px);
            background-color: #FDB10C !important;
            border-bottom: 3px solid #dba632;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }

        .misi-card:hover h4,
        .misi-card:hover p {
            color: #fff !important;
        }

        .misi-card:hover .icon-box i {
            color: #fff !important;
            transform: scale(1.2);
        }

        .misi-card:hover .misi-number {
            color: rgba(255, 255, 255, 0.2);
        }
    </style>

@endsection
