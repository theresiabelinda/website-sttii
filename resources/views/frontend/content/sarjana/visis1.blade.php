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
                    <div class="text-center mx-auto mb-5" style="max-width: 600px;">
                        <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 2px;">Landasan Kami</h6>
                        <h1 class="display-6 mb-4">Visi Prodi Sarjana Teologi</h1>
                        <div class="bg-primary mx-auto" style="width: 80px; height: 3px; border-radius: 2px;"></div>
                    </div>

                    <div class="card border-0 shadow-lg rounded-3 overflow-hidden position-relative">
                        <div class="card-body p-5 text-center position-relative z-index-1">
                            <i class="fa fa-quote-left text-primary display-3 mb-4 opacity-25"></i>
                            <h2 class="mb-4 text-dark" style="line-height: 1.6; font-weight: 400;">
                                "Menjadi prodi teologi yang unggul dalam menghasilkan sarjana berwawasan Injili, berkarakter ilahi, dan berkemampuan tinggi dalam pemenuhan Amanat Agung dan pengembangan masyarakat"
                            </h2>
                            <i class="fa fa-quote-right text-primary display-3 mt-2 opacity-25"></i>
                        </div>
                        <div class="position-absolute top-0 start-0 bg-primary" style="width: 5px; height: 100%;"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- MISI SECTION --}}
    <div class="container-fluid bg-light py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 2px;">Langkah Nyata</h6>
                <h1 class="display-6 mb-4">Misi Prodi</h1>
                <p class="text-secondary">Empat pilar utama dalam menjalankan mandat pendidikan:</p>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- Misi A --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="misi-card bg-white p-4 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">A</span>
                        <div class="icon-box mb-3">
                            <i class="fa fa-graduation-cap fs-3"></i>
                        </div>
                        <h5 class="mb-3">Pendidikan Unggul</h5>
                        <p class="mb-0 small">Menyelenggarakan program pendidikan tinggi teologi injili yang bermutu dan unggul dalam hal spiritual, ministerial, dan misional.</p>
                    </div>
                </div>

                {{-- Misi B --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="misi-card bg-white p-4 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">B</span>
                        <div class="icon-box mb-3">
                            <i class="fa fa-search fs-3"></i>
                        </div>
                        <h5 class="mb-3">Penelitian Relevan</h5>
                        <p class="mb-0 small">Melakukan penelitian teologi yang relevan sesuai perkembangan zaman sehingga bermanfaat bagi kepentingan gereja dan masyarakat.</p>
                    </div>
                </div>

                {{-- Misi C --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="misi-card bg-white p-4 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">C</span>
                        <div class="icon-box mb-3">
                            <i class="fa fa-user-check fs-3"></i>
                        </div>
                        <h5 class="mb-3">SDM Berkualitas</h5>
                        <p class="mb-0 small">Mempersiapkan Sumber Daya Manusia yang berkemampuan tinggi dalam melakukan tugas penginjilan, pelayanan gereja dan masyarakat.</p>
                    </div>
                </div>

                {{-- Misi D --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="misi-card bg-white p-4 rounded-3 shadow-sm h-100 position-relative overflow-hidden">
                        <span class="misi-number">D</span>
                        <div class="icon-box mb-3">
                            <i class="fa fa-handshake fs-3"></i>
                        </div>
                        <h5 class="mb-3">Sinergi Eksternal</h5>
                        <p class="mb-0 small">Menjalin sinergi dengan pihak eksternal demi tercapainya visi prodi.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- CSS Custom --}}
    <style>
        .misi-card {
            transition: all 0.4s ease;
            border-bottom: 3px solid transparent;
            z-index: 1;
        }

        .misi-card .icon-box i {
            color: #FDB10C;
            transition: all 0.4s ease;
        }

        .misi-number {
            position: absolute;
            top: -10px;
            right: 10px;
            font-size: 4rem;
            font-weight: 900;
            color: #f8f9fa;
            z-index: -1;
            transition: all 0.4s ease;
        }

        .misi-card:hover {
            transform: translateY(-10px);
            background-color: #FDB10C !important;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }

        .misi-card:hover h5,
        .misi-card:hover p,
        .misi-card:hover .icon-box i {
            color: #fff !important;
        }

        .misi-card:hover .misi-number {
            color: rgba(255, 255, 255, 0.1);
        }
    </style>

@endsection
