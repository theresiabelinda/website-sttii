@extends('frontend.layout.main')

@section('content')

    {{-- HEADER DENGAN BACKGROUND GAMBAR --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Sejarah Kami</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">About Us</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Sejarah</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">

                {{-- KOLOM KIRI: NARASI SEJARAH --}}
                <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
                    <h6 class="text-primary text-uppercase mb-2">Perjalanan Iman</h6>
                    <h1 class="display-6 mb-4">Sejarah STTII Yogyakarta</h1>

                    {{-- Paragraf Pembuka --}}
                    <p class="fs-5 mb-4" style="text-align: justify; line-height: 1.8;">
                        STTII lahir di Indonesia berkat Visi Ilahi yang dikaruniakan kepada <strong>Pdt. Chris Marantika, Th.D., D.D.</strong> Visi tersebut didoakan dan direalisasikan pada saat beliau menempuh pendidikan di Dallas Theological Seminary, Dallas, Texas, USA.
                    </p>

                    {{-- Highlight Box untuk Visi 1.1.1 --}}
                    <div class="bg-light p-4 mb-4 rounded border-start border-5 border-primary">
                        <h4 class="mb-2"><i class="fa fa-lightbulb text-primary me-2"></i>Visi Awal: INDONESIA 1.1.1</h4>
                        <p class="fst-italic mb-0 text-dark">
                            "Satu Gereja di setiap Satu Desa dalam Satu Generasi."
                        </p>
                    </div>

                    <p style="text-align: justify; line-height: 1.8;">
                        Untuk mewujudkan visi besar tersebut, Dr. Chris Marantika mendirikan <strong>Yayasan Iman Indonesia (YII)</strong> pada tanggal 30 Juni 1976. Yayasan ini menjadi wadah awal pelayanan pendidikan teologi injili yang terarah dan terstruktur. Dari Yayasan Iman Indonesia inilah kemudian lahir Seminari Theologi Injili Indonesia (STII) pada tanggal 01 Agustus 1979.
                    </p>

                    <p style="text-align: justify; line-height: 1.8;">
                        STII menjadi lembaga pendidikan tinggi teologi yang mempersiapkan tenaga hamba Tuhan yang berilmu, berkarakter, dan memiliki visi misi penginjilan yang kuat. Seiring waktu, lembaga ini berkembang menjadi <strong>Sekolah Tinggi Teologi Injili Indonesia (STTII)</strong>, yang kini dikenal luas sebagai salah satu institusi teologi Injili terkemuka di Indonesia.
                    </p>

                    <h5 class="mt-5 mb-3">Ekspansi dan Pelayanan Luas</h5>
                    <p style="text-align: justify; line-height: 1.8;">
                        Tidak hanya berhenti di sana, dalam upaya mempercepat terwujudnya visi INDONESIA 1.1.1., Yayasan Iman Indonesia juga mendirikan <strong>Universitas Kristen Immanuel (UKRIM)</strong> pada tanggal 21 Juni 1982 di Yogyakarta. UKRIM membuka peluang pendidikan yang lebih luas bagi generasi muda Kristen Indonesia.
                    </p>

                    <p style="text-align: justify; line-height: 1.8;">
                        Hingga saat ini, STTII Yogyakarta telah mewisuda lulusan-lulusan di berbagai jenjang pendidikan, mulai dari strata satu (S1), strata dua (S2), hingga strata tiga (S3). Para alumninya kini tersebar di berbagai bidang pelayanan, baik sebagai pemimpin rohani di gereja-gereja, dosen teologi, pemimpin struktural di berbagai STT, ketua sinode gereja, maupun profesional di berbagai bidang.
                    </p>

                    <p class="mb-0" style="text-align: justify; line-height: 1.8;">
                        Tidak sedikit lulusan STTII yang kini mengabdi sebagai pegawai negeri, anggota legislatif, serta menduduki jabatan penting di instansi pemerintah. Keberhasilan mereka menjadi bukti nyata bahwa STTII Yogyakarta tidak hanya menghasilkan lulusan yang cerdas secara akademik, tetapi juga pribadi yang memiliki integritas, visi pelayanan, dan pengaruh positif bagi bangsa dan negara.
                    </p>
                </div>

                {{-- KOLOM KANAN: TIMELINE & FAKTA SINGKAT --}}
                <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">

                    {{-- Widget Timeline --}}
                    <div class="bg-light p-4 mb-5 rounded shadow-sm">
                        <h4 class="mb-4 text-primary">Tonggak Sejarah</h4>
                        <div class="position-relative border-start border-2 border-primary ps-4">

                            <div class="mb-4 position-relative">
                                <span class="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle" style="width: 12px; height: 12px; left: -18px !important;"></span>
                                <h6 class="fw-bold mb-1">30 Juni 1976</h6>
                                <small class="text-muted">Pendirian Yayasan Iman Indonesia (YII)</small>
                            </div>

                            <div class="mb-4 position-relative">
                                <span class="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle" style="width: 12px; height: 12px; left: -18px !important;"></span>
                                <h6 class="fw-bold mb-1">01 Agustus 1979</h6>
                                <small class="text-muted">Lahirnya Seminari Theologi Injili Indonesia (STII)</small>
                            </div>

                            <div class="mb-4 position-relative">
                                <span class="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle" style="width: 12px; height: 12px; left: -18px !important;"></span>
                                <h6 class="fw-bold mb-1">21 Juni 1982</h6>
                                <small class="text-muted">Pendirian UKRIM Yogyakarta</small>
                            </div>

                            <div class="position-relative">
                                <span class="position-absolute top-0 start-0 translate-middle bg-primary rounded-circle" style="width: 12px; height: 12px; left: -18px !important;"></span>
                                <h6 class="fw-bold mb-1">Masa Kini</h6>
                                <small class="text-muted">Meluluskan S1, S2, dan S3 yang berdampak bagi bangsa.</small>
                            </div>

                        </div>
                    </div>

                    {{-- Widget Jaringan Cabang --}}
                    <div class="bg-white p-4 rounded shadow-sm border">
                        <h5 class="mb-3">Jaringan STTII Nusantara</h5>
                        <p class="small text-muted mb-3">YII mendirikan berbagai cabang STTII yang tersebar di kota-kota besar:</p>
                        <div class="d-flex flex-wrap gap-2">
                            <span class="badge bg-primary">Jakarta</span>
                            <span class="badge bg-secondary">Surabaya</span>
                            <span class="badge bg-dark">Medan</span>
                            <span class="badge bg-primary">Palu</span>
                            <span class="badge bg-secondary">Purwokerto</span>
                            <span class="badge bg-dark">Samarinda</span>
                            <span class="badge bg-primary">Lombok</span>
                            <span class="badge bg-secondary">Ambon</span>
                            <span class="badge bg-dark">Batam</span>
                            <span class="badge bg-primary">Pontianak</span>
                            <span class="badge bg-secondary">Kupang</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
