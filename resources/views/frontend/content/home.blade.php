@extends('frontend/layout/main')
@section('content')

    <div class="container-fluid p-0 wow fadeIn" data-wow-delay="0.1s">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                {{-- Slide 1: Statis (Tetap Tidak Berubah) --}}
                <div class="carousel-item active">
                    <img class="w-100" src="{{asset('assets/assets/img/foto-sttii2.jpeg')}}" alt="Image" style="height: 100vh; object-fit: cover;">
                    <div class="carousel-caption">
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

                {{-- Slide Berikutnya: Dinamis dari Berita --}}
                @foreach($berita_carousel as $item)
                    <div class="carousel-item" style="background: none;">
                        {{-- Gambar dibuat 100% terang tanpa overlay --}}
                        <img class="w-100" src="{{ route('storage', ['filename' => $item->gambar_berita]) }}"
                             alt="{{ $item->judul_berita }}"
                             style="height: 100vh; object-fit: cover; filter: brightness(100%) contrast(100%);">

                        {{-- Overlay hitam transparan yang biasanya ada di template kita hilangkan --}}
                        <div class="carousel-caption d-flex align-items-end justify-content-center" style="background: none; bottom: 10%; z-index: 10;">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-8">
                                        <div class="animated slideInUp">
                                            {{-- Tombol dibuat lonjong (rounded-pill) dan ukurannya lebih kecil (px-4 py-2) --}}
                                            <a href="{{ route('berita.baca', $item->id_berita) }}"
                                               class="btn btn-primary rounded-pill px-4 py-2 shadow-lg"
                                               style="font-size: 14px; border: 2px solid white;">
                                                Baca Selengkapnya
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            {{-- Navigasi Panah --}}
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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


    <!-- Courses Start -->
    <div class="container-xxl courses my-6 py-6 pb-0" style="background: linear-gradient(rgba(255, 255, 255, .8), rgba(255, 255, 255, .8)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Berita Terbaru</h6>
                <h1 class="display-6 mb-4">Update Kegiatan & Berita STTII Yogyakarta</h1>
            </div>
            <div class="row g-4 justify-content-center">

                @foreach($berita as $item)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="courses-item d-flex flex-column bg-white overflow-hidden h-100 shadow-sm">
                            <div class="text-center p-4 pt-0">
                                <div class="d-inline-block bg-primary text-white fs-6 py-1 px-4 mb-4">
                                    {{ $item->tahun }}
                                </div>

                                <h5 class="mb-3">{{ $item->judul_berita }}</h5>

                                <p>{{ Str::limit(strip_tags($item->isi_berita), 100) }}</p>

                            </div>
                            <div class="position-relative mt-auto">
                                <img class="img-fluid"
                                     src="{{ route('storage', ['filename' => $item->gambar_berita]) }}"
                                     alt="{{ $item->judul_berita }}"
                                     style="height: 250px; width: 100%; object-fit: cover;">
                                <div class="courses-overlay">
                                    <a class="btn btn-outline-primary border-2" href="{{ route('berita.baca', $item->id_berita) }}">Baca Selengkapnya</a>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach
            </div>
        </div>

        <div class="text-center wow fadeInUp mt-5" data-wow-delay="0.1s">
            <a href="{{ route('berita.kumpulan') }}" class="btn btn-primary rounded-pill py-3 px-5 shadow">
                Kegiatan Kampus Lainnya <i class="fa fa-arrow-right ms-2"></i>
            </a>
        </div>

    </div>
    <!-- Courses End -->

    <div id="welcomeModal" class="modal-overlay">
        <div class="modal-content">
            <span id="closeX" class="close-x">&times;</span>

            @if($popup_pmb)
                <h5 class="text-primary mb-3">Informasi PMB</h5>
                <img src="{{ route('storage', ['filename' => $popup_pmb->gambar_berita]) }}"
                     class="img-fluid rounded mb-3"
                     style="max-height: 300px; width: 100%; object-fit: cover;">

                <p><strong>{{ $popup_pmb->judul_berita }}</strong></p>

                <div class="d-flex justify-content-center gap-2">
                    <button id="closeBtn" class="btn btn-secondary btn-sm px-4">Tutup</button>
                </div>
            @else
                {{-- Tampilan jika tidak ada berita kategori PMB --}}
                <h2 class="text-primary">Shalom!</h2>
                <p>Selamat Datang di STTII Yogyakarta</p>
                <button id="closeBtn" class="btn btn-primary px-4">Tutup</button>
            @endif
        </div>
    </div>

    <style>
        .modal-content {
            background-color: white;
            padding: 30px; /* Menambah ruang di dalam pop-up */
            border-radius: 15px;
            width: 90%; /* Lebar di layar kecil */
            max-width: 700px; /* Lebar maksimal di layar besar (bisa diubah sesuai keinginan) */
            position: relative;
            box-shadow: 0 4px 15px rgba(0,0,0,0.3);
            animation: fadeIn 0.3s ease-out;
        }

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
    </style>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const modal = document.getElementById('welcomeModal');
            const closeBtn = document.getElementById('closeBtn');
            const closeX = document.getElementById('closeX');

            function tutupModal() {
                if(modal) {
                    modal.classList.add('hidden');
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

