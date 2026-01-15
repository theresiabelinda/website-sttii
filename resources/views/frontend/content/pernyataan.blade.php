@extends('frontend.layout.main')

@section('content')

    {{-- HEADER --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Pernyataan Doktrinal</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">About Us</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Doktrin</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- INTRO --}}
    <div class="container-xxl py-6 pb-0">
        <div class="container text-center wow fadeInUp" data-wow-delay="0.1s" style="max-width: 700px;">
            <h6 class="text-primary text-uppercase mb-2">Dasar Iman Kami</h6>
            <h1 class="display-6 mb-4">Pengakuan Iman STTII Yogyakarta</h1>
            <p class="mb-5">Berikut adalah 13 butir pengakuan iman yang menjadi landasan teologis seluruh civitas akademika dalam melayani dan belajar.</p>
        </div>
    </div>

    {{-- LIST DOKTRIN (GRID CARD) --}}
    <div class="container-xxl py-6 pt-0">
        <div class="container">
            <div class="row g-4">

                {{-- DOKTRIN 1: ALKITAB --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-bible fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">01</span>
                        </div>
                        <h5 class="mb-3">Kitab Suci</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Kitab Suci Perjanjian Lama dan Perjanjian Baru secara kata-kata diilhami Allah, tidak ada kesalahan dalam naskah-naskah aslinya dan merupakan otoritas akhir dan tertinggi dalam seluruh aspek kehidupan dan iman.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 2: ALLAH TRITUNGGAL --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-infinity fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">02</span>
                        </div>
                        <h5 class="mb-3">Allah Tritunggal</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Allah adalah Esa, yang ada secara kekal dalam tiga pribadi yang sederajat, Bapa, Anak, dan Roh Kudus.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 3: YESUS KRISTUS (INKARNASI) --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-star fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">03</span>
                        </div>
                        <h5 class="mb-3">Allah Putera</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Allah Putera berinkarnasi dalam pribadi Yesus Kristus yang diperanakan oleh Roh Kudus dan dilahirkan oleh perawan Maria, dan merupakan Allah dan Manusia sejati.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 4: KARYA PENEBUSAN --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-cross fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">04</span>
                        </div>
                        <h5 class="mb-3">Karya Penebusan</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Tuhan Yesus Kristus mati bagi dosa-dosa kita menurut Alkitab sebagai korban pengganti... Ia bangkit dari kematian dan naik ke Surga, di mana Ia sekarang adalah Imam Besar, Perantara, dan Pembela bagi orang-orang percaya.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 5: KEDATANGAN KEDUA --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-cloud-sun fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">05</span>
                        </div>
                        <h5 class="mb-3">Kedatangan Kedua</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Tuhan Yesus Kristus akan kembali secara tubuh nyata sebelum kerajaan 1000 tahun dalam kemuliaan Bapa-Nya untuk mendirikan Kerajaan di bumi.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 6: ROH KUDUS --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-dove fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">06</span>
                        </div>
                        <h5 class="mb-3">Roh Kudus</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Roh Kudus adalah Pribadi... Dia menginsafkan dunia akan dosa... Di dalam kelahiran baru, Dia membaptiskan orang-orang percaya ke dalam tubuh Kristus dan secara permanen mendiami tubuh orang percaya.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 7: MANUSIA --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-user fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">07</span>
                        </div>
                        <h5 class="mb-3">Manusia & Dosa</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Manusia diciptakan dalam gambar Allah. Ia berdosa dan karena itu dikenakan... kematian fisik dan rohani... Siapa saja yang menerima Tuhan Yesus Kristus sebagai Juruselamat mereka adalah anak-anak Allah.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 8: JAMINAN KESELAMATAN --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-shield-alt fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">08</span>
                        </div>
                        <h5 class="mb-3">Jaminan Keselamatan</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Semua orang yang ditebus secara kekal dijamin keamanannya dengan kuasa Allah melalui kelahiran baru, pendiaman dan meterai Roh Kudus, dan doa perantara Kristus.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 9: GEREJA LOKAL --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-church fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">09</span>
                        </div>
                        <h5 class="mb-3">Gereja Lokal</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Gereja adalah persekutuan orang-orang percaya yang dibaptis menjadi anggota-anggota, diatur untuk tujuan melakukan kehendak Allah...
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 10: GEREJA UNIVERSAL --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-globe fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">10</span>
                        </div>
                        <h5 class="mb-3">Gereja Universal</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Gereja dalam bentuknya yang tidak kelihatan bersifat universal, tubuh sejati dan mempelai wanita Kristus.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 11: KEBANGKITAN & HUKUMAN --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-balance-scale fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">11</span>
                        </div>
                        <h5 class="mb-3">Akhir Zaman</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Akan ada kebangkitan tubuh... Kepada orang yang benar diberikan kebahagiaan yang tiada berakhir dan kepada yang tidak benar diberikan hukuman yang tiada berakhir.
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 12: AMANAT AGUNG --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-map-marked-alt fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">12</span>
                        </div>
                        <h5 class="mb-3">Amanat Agung</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Amanat Agung Tuhan Yesus adalah pergi ke seluruh dunia untuk memberitakan Injil kepada semua makhluk, menjadikan semua bangsa murid...
                        </p>
                    </div>
                </div>

                {{-- DOKTRIN 13: SETAN --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="bg-white shadow-sm rounded p-4 h-100 border-start border-5 border-primary position-relative">
                        <div class="d-flex justify-content-between align-items-start mb-3">
                            <div class="btn-square bg-light rounded-circle text-primary">
                                <i class="fa fa-exclamation-triangle fa-lg"></i>
                            </div>
                            <span class="fs-1 fw-bold text-light text-black-50 opacity-25">13</span>
                        </div>
                        <h5 class="mb-3">Realita Setan</h5>
                        <p class="small text-muted mb-0" style="text-align: justify;">
                            Setan merupakan satu realita dan pribadi.
                        </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
