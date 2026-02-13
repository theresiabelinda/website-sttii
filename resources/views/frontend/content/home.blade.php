@extends('frontend/layout/main')
@section('content')

    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div class="position-relative" style="height: 100vh; overflow: hidden;">

            <video autoplay muted loop playsinline class="w-100 h-100" style="object-fit: cover;">
                <source src="{{ asset('assets-fe/video/video.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>

            <div class="position-absolute top-0 start-0 w-100 h-100" style="background: rgba(0,0,0,0.4);"></div>

            <div class="position-absolute top-50 start-50 translate-middle text-center w-100">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7">
                            <img src="{{asset('assets/assets/img/logo.png')}}"
                                 alt="Logo STTII"
                                 class="img-fluid mb-4 animated slideInDown"
                                 style="max-height: 120px; width: auto;">

                            <h1 class="display-3 fw-bold text-white mb-4 animated slideInDown" style="text-shadow: 2px 2px 8px rgba(0,0,0,0.6);">
                                Sekolah Tinggi Teologi <br>
                                Injili Indonesia <span class="text-primary">Yogyakarta</span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                {{-- BAGIAN FOTO (Kiri) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative overflow-hidden ps-5 pt-5 h-100" style="min-height: 400px;">
                        {{-- GANTI GAMBAR 1: Foto Ketua STTII (Besar) --}}
                        <img class="position-absolute w-100 h-100" src="{{asset('assets-fe/img/dosenstaf.jpeg')}}" alt="Kampus STTII" style="object-fit: cover;">

                        {{-- GANTI GAMBAR 2: Foto Logo / Kegiatan / Close up Ketua (Kecil) --}}
                        <img class="position-absolute top-0 start-0 bg-white pe-3 pb-3" src="{{asset('assets-fe/img/sumbut.jpg')}}" alt="" style="width: 200px; height: 200px; object-fit: cover;">
                    </div>
                </div>

                {{-- BAGIAN TEKS SAMBUTAN (Kanan) --}}
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100">
                        <h6 class="text-primary text-uppercase mb-2">Sambutan Ketua</h6>
                        <h1 class="display-6 mb-4">Selamat Datang di STTII Yogyakarta</h1>

                        <p>Salam sejahtera dalam kasih Kristus. Kami menyambut Anda di website resmi Sekolah Tinggi Teologi Injili Indonesia (STTII) Yogyakarta. Sejak berdiri pada tahun 1979, kami berkomitmen untuk melahirkan hamba Tuhan yang setia, suci, dan sarjana.</p>

                        <p class="mb-4">Kami percaya bahwa pendidikan teologi bukan hanya soal akademis, tetapi pembentukan karakter rohani yang mendalam. Mari bergabung bersama kami untuk diperlengkapi bagi kemuliaan nama Tuhan di gereja dan masyarakat.</p>

                        <div class="row g-2 mb-4 pb-2">
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Teologi Injili & Alkitabiah
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Dosen Berkompeten & Praktisi
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Pembentukan Karakter Rohani
                            </div>
                            <div class="col-sm-6">
                                <i class="fa fa-check text-primary me-2"></i>Komunitas yang Mendukung
                            </div>
                        </div>

                        <div class="row g-4">
                            <div class="col-sm-6">
                                {{-- Link ke halaman Sambutan Lengkap / Profil --}}
                                <a class="btn btn-primary py-3 px-5" href="{{ route('home.sambutan') }}">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

{{--    Program Studi--}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h1 class="display-5 mb-4">Program Studi</h1>
                <p class="fs-5 text-dark">
                    Sekolah Tinggi Teologi Injili Indonesia (STTII) Yogyakarta menyelenggarakan pendidikan teologi yang berkualitas dan terakreditasi, guna menghasilkan hamba Tuhan yang kompeten dan berkarakter untuk melayani di berbagai bidang pelayanan.
                </p>
            </div>

            <div class="row g-4 justify-content-center text-center">
                {{-- Prodi S1 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="prodi-item p-5 shadow-sm rounded-3 bg-light">
                        <div class="icon-box mb-4">
                            <i class="fas fa-book-open fa-4x text-primary"></i>
                        </div>
                        <h4 class="fw-bold">Prodi S1 Teologi</h4>
                        <p class="text-muted">Membentuk sarjana teologi yang memiliki dasar biblika yang kuat dan siap terjun dalam pelayanan gerejawi.</p>
                        <hr class="w-25 mx-auto">
                        <small class="text-uppercase fw-bold text-primary">Sarjana Teologi (S.Th.)</small>
                    </div>
                </div>

                {{-- Prodi S2 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="prodi-item p-5 shadow-sm rounded-3 bg-light">
                        <div class="icon-box mb-4">
                            <i class="fas fa-scroll fa-4x text-primary"></i>
                        </div>
                        <h4 class="fw-bold">Prodi S2 Teologi</h4>
                        <p class="text-muted">Memperdalam wawasan teologis dan kepemimpinan strategis bagi para pelayan Tuhan tingkat lanjut.</p>
                        <hr class="w-25 mx-auto">
                        <small class="text-uppercase fw-bold text-primary">Magister Teologi (M.Th.)</small>
                    </div>
                </div>

                {{-- Prodi S3 --}}
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="prodi-item p-5 shadow-sm rounded-3 bg-light">
                        <div class="icon-box mb-4">
                            <i class="fas fa-user-graduate fa-4x text-primary"></i>
                        </div>
                        <h4 class="fw-bold">Prodi S3 Teologi</h4>
                        <p class="text-muted">Menghasilkan doktor teologi yang mampu melakukan riset orisinal untuk pengembangan ilmu teologi di Indonesia.</p>
                        <hr class="w-25 mx-auto">
                        <small class="text-uppercase fw-bold text-primary">Doktor Teologi (D.Th)</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .prodi-item {
            border: 1px solid #eee;
            transition: all 0.4s ease;
            height: 100%;
        }
        .prodi-item:hover {
            background-color: #ffffff !important;
            transform: translateY(-15px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.1) !important;
            border-color: var(--bs-primary);
        }
        .prodi-item i {
            transition: transform 0.4s ease;
        }
        .prodi-item:hover i {
            transform: scale(1.1);
        }
    </style>

{{--    foto-foto kegiatan--}}
    <div class="container-fluid bg-light p-0 wow fadeIn" data-wow-delay="0.1s">
        {{-- row g-0 menghapus jarak antar foto --}}
        <div class="row g-0">
            {{-- Foto 1 --}}
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('assets-fe/img/moment3.jpeg') }}" alt="Kegiatan 1" style="height: 400px; object-fit: cover;">
                </div>
            </div>
            {{-- Foto 2 --}}
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('assets-fe/img/moment2.jpeg') }}" alt="Kegiatan 2" style="height: 400px; object-fit: cover;">
                </div>
            </div>
            {{-- Foto 3 --}}
            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                <div class="overflow-hidden">
                    <img class="img-fluid w-100" src="{{ asset('assets-fe/img/moment1.jpeg') }}" alt="Kegiatan 3" style="height: 400px; object-fit: cover;">
                </div>
            </div>
        </div>
    </div>

{{--    Call to Action--}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <h2 class="fw-bold text-dark mb-4" style="line-height: 1.4;">
                    STTII Yogyakarta bekerja keras mempersiapkan setiap mahasiswa untuk kehidupan pelayanan dan profesional mereka
                </h2>

                <div class="d-flex flex-column flex-sm-row justify-content-center gap-3 mt-5">
                    {{-- Tombol Pendaftaran Online --}}
                    <a href="#" class="btn btn-cta-yellow py-3 px-5 d-flex align-items-center justify-content-center">
                        <i class="fa fa-phone-alt me-3"></i>
                        <span class="fw-bold">PENDAFTARAN ONLINE</span>
                    </a>

                    {{-- Tombol Pembelian Formulir --}}
                    <a href="#" class="btn btn-cta-red py-3 px-5 d-flex align-items-center justify-content-center">
                        <i class="fa fa-edit me-3"></i>
                        <span class="fw-bold">PEMBELIAN FORMULIR</span>
                    </a>
                </div>
            </div>

{{--        Mengatur Footer--}}
            <div class="row wow fadeInUp" data-wow-delay="0.2s" style="margin-left: calc(-50vw + 50%); margin-right: calc(-50vw + 50%); width: 100vw; position: relative; left: 0;">
                <div class="col-12 p-0">
                    <div class="position-relative w-100">
                        @if($footer_terbaru && $footer_terbaru->foto)
                            <img class="img-fluid w-100"
                                 src="{{ asset('uploads/footer/' . $footer_terbaru->foto) }}"
                                 alt="PMB STTII Jogja"
                                 style="display: block; width: 100vw; object-fit: cover; height: auto;">
                        @else
                            <div class="d-flex align-items-center justify-content-center bg-light" style="width: 100vw; height: 300px;">
                                <h3 class="text-muted fw-bold">
                                    <i class="fas fa-info-circle me-2"></i> Belum ada kegiatan terbaru
                                </h3>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        /* Tombol Kuning */
        .btn-cta-yellow {
            background-color: #FFC107;
            color: #000;
            border: none;
            border-radius: 0; /* Kotak sesuai gambar */
            min-width: 300px;
            transition: 0.3s;
        }
        .btn-cta-yellow:hover {
            background-color: #e6af06;
            color: #000;
        }

        /* Tombol Merah */
        .btn-cta-red {
            background-color: #C63D24;
            color: #fff;
            border: none;
            border-radius: 0; /* Kotak sesuai gambar */
            min-width: 300px;
            transition: 0.3s;
        }
        .btn-cta-red:hover {
            background-color: #a5321d;
            color: #fff;
        }

        /* Penyesuaian Responsif untuk Ikon */
        .btn-cta-yellow i, .btn-cta-red i {
            font-size: 1.2rem;
        }

        /* Efek hover agar foto terasa interaktif saat kursor lewat */
        .row.g-0 .overflow-hidden img {
            transition: transform 0.5s ease;
        }
        .row.g-0 .overflow-hidden:hover img {
            transform: scale(1.1);
        }
    </style>

    <!-- Courses Start -->
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 800px;">
                <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 3px;">Berita Terbaru</h6>
                <h1 class="display-6 mb-4">Update Kegiatan & Berita <br><span class="text-primary">STTII Yogyakarta</span></h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach($berita as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="news-card h-100 bg-white shadow-sm overflow-hidden border-0">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100"
                                     src="{{ route('storage', ['filename' => $item->gambar_berita]) }}"
                                     alt="{{ $item->judul_berita }}"
                                     style="height: 200px; object-fit: cover;"> <div class="news-badge bg-primary text-white px-3 py-1 position-absolute">
                                    {{ $item->tahun }}
                                </div>
                            </div>

                            <div class="p-4">
                                <h6 class="mb-3 news-title fw-bold">
                                    <a href="{{ route('berita.baca', $item->id_berita) }}" class="text-dark text-decoration-none">
                                        {{ $item->judul_berita }}
                                    </a>
                                </h6>
                                <p class="text-muted small mb-4">
                                    {{ Str::limit(strip_tags($item->isi_berita), 80) }} </p>
                                <a class="fw-bold text-primary text-uppercase small text-decoration-none learn-more"
                                   href="{{ route('berita.baca', $item->id_berita) }}">
                                    Detail <i class="fa fa-arrow-right ms-2"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <style>
        /* Styling Kartu Berita */
        .news-card {
            border-radius: 15px;
            transition: all 0.4s ease;
        }

        .news-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.15) !important;
        }

        /* Badge Tahun di Atas Gambar */
        .news-badge {
            top: 20px;
            left: 0;
            border-radius: 0 20px 20px 0;
            font-size: 14px;
            font-weight: 600;
            z-index: 1;
        }

        /* Zoom Effect pada Gambar saat Hover */
        .news-card img {
            transition: transform 0.6s ease;
        }

        .news-card:hover img {
            transform: scale(1.1);
        }

        /* Batasan Baris untuk Judul agar Rapi */
        .news-title {
            display: -webkit-box;
            -webkit-line-clamp: 2;
            -webkit-box-orient: vertical;
            overflow: hidden;
            line-height: 1.4;
            min-height: 2.8em;
        }

        /* Animasi Panah "Baca Selengkapnya" */
        .learn-more i {
            transition: transform 0.3s ease;
        }

        .news-card:hover .learn-more i {
            transform: translateX(5px);
        }
    </style>
    <!-- Courses End -->

    <style>
        /* Mengatur agar gambar di dalamnya menyesuaikan lebar baru */
        .modal-content img {
            max-height: 500px !important; /* Menaikkan batas tinggi gambar */
            width: 100%;
            object-fit: contain; /* Agar gambar tidak terpotong (crop) */
        }

        .modal-overlay {
            position: fixed;
            top: 0; left: 0; width: 100%; height: 100%;
            background-color: rgba(0, 0, 0, 0.7);
            display: flex; justify-content: center; align-items: center;
            z-index: 9999;
            transition: opacity 0.4s ease;
        }
        .modal-content {
            background: white; padding: 30px; border-radius: 15px;
            position: relative; text-align: center;
            max-width: 450px; width: 90%;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            animation: slideDown 0.5s ease-out;
        }
        @keyframes slideDown {
            from { transform: translateY(-100px); opacity: 0; }
            to { transform: translateY(0); opacity: 1; }
        }
        .close-x {
            position: absolute; top: 10px; right: 20px;
            font-size: 28px; font-weight: bold; color: #999; cursor: pointer;
        }
        .hidden { opacity: 0; pointer-events: none; }

        /* Pastikan tombol navigasi di atas caption */
        .carousel-control-prev,
        .carousel-control-next {
            z-index: 20 !important;
        }
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('welcomeModal');
            const closeBtn = document.getElementById('closeBtn');
            const closeX = document.getElementById('closeX');

            function tutupModal() {
                if(modal) {
                    modal.style.display = 'none';
                }
            }

            // Jalankan fungsi jika elemen ditemukan
            if(closeBtn) closeBtn.onclick = tutupModal;
            if(closeX) closeX.onclick = tutupModal;

            // Tutup jika klik area hitam di luar kotak
            window.onclick = function(event) {
                if (event.target == modal) {
                    tutupModal();
                }
            };
        });
    </script>

@endsection

