@extends('frontend.layout.main')

@section('content')

    {{--
      HEADER PAGE
      Menggunakan style yang sama dengan halaman lain agar konsisten.
    --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">> >

        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Konsentrasi Studi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Konsentrasi S1</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- CONTENT SECTION --}}
    <div class="container-xxl py-6">
        <div class="container">

            {{-- Judul Seksi --}}
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Spesialisasi Akademik</h6>
                <h1 class="display-6 mb-4">5 Konsentrasi Prodi Sarjana Teologi</h1>
                <p class="fs-6 text-secondary">Kami menawarkan lima fokus studi mendalam untuk mempersiapkan mahasiswa melayani sesuai dengan panggilan Tuhan secara spesifik.</p>
            </div>

            {{-- Grid Konsentrasi --}}
            <div class="row g-4 justify-content-center">

                {{-- 1. Biblical Studies --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white rounded h-100 p-4 shadow-sm border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-book-open text-primary fs-4"></i>
                        </div>
                        <h5 class="mb-3">Biblical Studies<br><span class="text-muted fs-6 fst-italic">(Studi Biblika)</span></h5>
                        <p class="mb-4">Fokus pada pendalaman Alkitab, termasuk studi teks asli (Ibrani, Yunani), hermeneutika, dan aplikasi firman Tuhan dalam konteks modern. Tujuannya adalah memahami dan menginterpretasikan Alkitab secara akurat dan relevan.</p>
                    </div>
                </div>

                {{-- 2. Missiology --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white rounded h-100 p-4 shadow-sm border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-globe-asia text-primary fs-4"></i>
                        </div>
                        <h5 class="mb-3">Missiology<br><span class="text-muted fs-6 fst-italic">(Misiologi)</span></h5>
                        <p class="mb-4">Mempelajari strategi penginjilan, konteks budaya global, dan metode misi untuk membawa kabar baik ke seluruh dunia. Fokus pada pelayanan lintas budaya dan pengembangan gereja di berbagai konteks masyarakat.</p>
                    </div>
                </div>

                {{-- 3. Christian Education --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item bg-white rounded h-100 p-4 shadow-sm border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-graduation-cap text-primary fs-4"></i>
                        </div>
                        <h5 class="mb-3">Christian Education<br><span class="text-muted fs-6 fst-italic">(Pendidikan Agama Kristen)</span></h5>
                        <p class="mb-4">Menyiapkan pendidik yang mampu mengajar dan membentuk karakter berdasarkan nilai-nilai Kristen. Fokus pada pengembangan kurikulum, metode pengajaran kreatif, dan pembinaan generasi muda.</p>
                    </div>
                </div>

                {{-- 4. Pastoral Ministry --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item bg-white rounded h-100 p-4 shadow-sm border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-hands-helping text-primary fs-4"></i>
                        </div>
                        <h5 class="mb-3">Pastoral Ministry<br><span class="text-muted fs-6 fst-italic">(Pastoral Penggembalaan)</span></h5>
                        <p class="mb-4">Mempersiapkan calon pemimpin rohani untuk menggembalakan jemaat dengan kasih, hikmat, dan integritas. Fokus pada pelayanan pastoral, konseling, dan manajemen gereja.</p>
                    </div>
                </div>

                {{-- 5. Expository Preaching --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item bg-white rounded h-100 p-4 shadow-sm border-bottom border-5 border-primary position-relative overflow-hidden">
                        <div class="d-inline-flex align-items-center justify-content-center bg-light rounded-circle mb-4" style="width: 65px; height: 65px;">
                            <i class="fa fa-microphone-alt text-primary fs-4"></i>
                        </div>
                        <h5 class="mb-3">Expository Preaching<br><span class="text-muted fs-6 fst-italic">(Khotbah Ekspositori)</span></h5>
                        <p class="mb-4">Mengembangkan kemampuan berkhotbah yang berdampak, sistematis, dan berbasis teks Alkitab. Fokus pada penyampaian firman Tuhan yang jelas, akurat, dan transformatif bagi pendengar.</p>
                    </div>
                </div>

            </div>

            {{-- Call to Action Button --}}
            <div class="row mt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary py-3 px-5">Daftar S1 Sekarang</a>
                </div>
            </div>

        </div>
    </div>

    {{-- Sedikit CSS Tambahan agar kartu lebih interaktif (Hover effect) --}}
    <style>
        .service-item {
            transition: .5s;
        }
        .service-item:hover {
            margin-top: -10px; /* Efek naik saat di-hover */
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15)!important;
        }
    </style>

@endsection
