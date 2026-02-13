@extends('frontend.layout.main')

@section('content')

    {{-- HEADER SECTION --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Fasilitas Asrama</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pendaftaran</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Asrama</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- INTRODUCTION & DYNAMIC GALLERY --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 3px;">Living at STTII</h6>
                    <h1 class="display-6 mb-4">Pembentukan Karakter Melalui Kehidupan Berasrama</h1>
                    <p class="mb-4">Kehidupan berasrama di STTII Yogyakarta bukan sekadar penyediaan tempat tinggal, melainkan bagian integral dari proses pendidikan teologi. Mahasiswa dibentuk melalui kehidupan komunitas yang sehat, disiplin rohani, dan tanggung jawab pelayanan bersama.</p>

                    <div class="row g-4 mt-2">
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3 intro-check">
                                <div class="icon-sm-box bg-primary text-white rounded me-3">
                                    <i class="fa fa-pray"></i>
                                </div>
                                <span class="fw-medium">Ibadah & Doa Pagi</span>
                            </div>
                            <div class="d-flex align-items-center mb-3 intro-check">
                                <div class="icon-sm-box bg-primary text-white rounded me-3">
                                    <i class="fa fa-user-friends"></i>
                                </div>
                                <span class="fw-medium">Mentoring Pembina</span>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="d-flex align-items-center mb-3 intro-check">
                                <div class="icon-sm-box bg-primary text-white rounded me-3">
                                    <i class="fa fa-utensils"></i>
                                </div>
                                <span class="fw-medium">Makan 3x Sehari</span>
                            </div>
                            <div class="d-flex align-items-center mb-3 intro-check">
                                <div class="icon-sm-box bg-primary text-white rounded me-3">
                                    <i class="fa fa-shield-alt"></i>
                                </div>
                                <span class="fw-medium">Lingkungan Aman</span>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Side Gallery Masonry Style --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="row g-3">
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg mb-3 wow zoomIn"
                                 data-wow-delay="0.1s"
                                 src="{{ asset('assets-fe/img/asrama-putri2.jpeg') }}"
                                 style="width: 100%; height: 250px; object-fit: cover;">
                            <img class="img-fluid rounded shadow-lg wow zoomIn"
                                 data-wow-delay="0.3s"
                                 src="{{ asset('assets-fe/img/asrama-putra.jpeg') }}"
                                 style="width: 100%; height: 250px; object-fit: cover;">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid rounded shadow-lg mb-3 wow zoomIn"
                                 data-wow-delay="0.5s"
                                 src="{{ asset('assets-fe/img/asrama-putri3.jpeg') }}"
                                 style="width: 100%; height: 250px; object-fit: cover;">
                            <img class="img-fluid rounded shadow-lg wow zoomIn"
                                 data-wow-delay="0.7s"
                                 src="{{ asset('assets-fe/img/asrama-putra2.jpeg') }}"
                                 style="width: 100%; height: 250px; object-fit: cover;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- INTERACTIVE FACILITY CARDS --}}
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 3px;">Fasilitas Utama</h6>
                <h1 class="display-6 mb-4">Detail Lingkungan Asrama</h1>
            </div>
            <div class="row g-4">
                {{-- Card 1 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="interactive-card bg-white h-100 shadow-sm">
                        <div class="card-img-container overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/asrama-putra4.jpeg') }}" alt="Asrama Putra">
                        </div>
                        <div class="p-4 content">
                            <div class="icon-label bg-primary text-white mb-3">
                                <i class="fa fa-male"></i>
                            </div>
                            <h5 class="mb-2">Asrama Putra</h5>
                            <p class="small text-muted mb-0">Kamar nyaman dengan lemari pribadi dan area belajar yang tenang.</p>
                        </div>
                    </div>
                </div>
                {{-- Card 2 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="interactive-card bg-white h-100 shadow-sm">
                        <div class="card-img-container overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/asrama-putri.jpeg') }}" alt="Asrama Putri">
                        </div>
                        <div class="p-4 content">
                            <div class="icon-label bg-primary text-white mb-3">
                                <i class="fa fa-female"></i>
                            </div>
                            <h5 class="mb-2">Asrama Putri</h5>
                            <p class="small text-muted mb-0">Gedung khusus dengan sistem keamanan dan privasi terjaga.</p>
                        </div>
                    </div>
                </div>
                {{-- Card 3 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="interactive-card bg-white h-100 shadow-sm">
                        <div class="card-img-container overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/kantin.jpeg') }}" alt="Ruang Makan">
                        </div>
                        <div class="p-4 content">
                            <div class="icon-label bg-primary text-white mb-3">
                                <i class="fa fa-utensils"></i>
                            </div>
                            <h5 class="mb-2">Ruang Makan</h5>
                            <p class="small text-muted mb-0">Area makan komunal untuk sarapan, makan siang, dan malam bersama.</p>
                        </div>
                    </div>
                </div>
                {{-- Card 4 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="interactive-card bg-white h-100 shadow-sm">
                        <div class="card-img-container overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/wifi.jpeg') }}" alt="Wifi Area">
                        </div>
                        <div class="p-4 content">
                            <div class="icon-label bg-primary text-white mb-3">
                                <i class="fa fa-wifi"></i>
                            </div>
                            <h5 class="mb-2">Koneksi Internet</h5>
                            <p class="small text-muted mb-0">Area Wi-Fi tersedia untuk mendukung kebutuhan akademis mahasiswa.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* Introduction Box Style */
        .icon-sm-box {
            width: 35px;
            height: 35px;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: 0.3s;
        }
        .intro-check:hover .icon-sm-box {
            transform: scale(1.1) rotate(10deg);
        }

        /* Masonry Images Effect */
        .img-masonry img {
            transition: 0.5s;
        }
        .img-masonry img:hover {
            transform: translateY(-5px);
            filter: brightness(1.1);
        }

        /* Interactive Cards */
        .interactive-card {
            border-radius: 15px;
            overflow: hidden;
            transition: 0.4s ease;
            border: 1px solid rgba(0,0,0,0.05);
        }
        .interactive-card:hover {
            transform: translateY(-12px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.1) !important;
        }
        .card-img-container img {
            height: 200px;
            object-fit: cover;
            transition: 0.6s ease;
        }
        .interactive-card:hover .card-img-container img {
            transform: scale(1.15);
        }
        .icon-label {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 22px;
            margin-top: -45px;
            position: relative;
            z-index: 2;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            transition: 0.3s;
        }
        .interactive-card:hover .icon-label {
            transform: translateY(-5px);
            background-color: #333 !important; /* Contoh ganti warna saat hover */
        }
        .interactive-card .content {
            padding-top: 10px !important;
        }
    </style>

@endsection
