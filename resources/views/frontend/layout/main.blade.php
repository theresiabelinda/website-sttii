<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>STTII Yogyakarta</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{asset('assets/assets/img/logo.png')}}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('assets-fe/lib/animate/animate.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets-fe/lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('assets-fe/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{asset('assets-fe/css/style.css')}}" rel="stylesheet">

    <style>
        .dropdown-item.dropdown-submenu {
            position: relative;
        }

        .dropdown-item.dropdown-submenu .submenu {
            display: none;
            position: absolute;
            right: 100%;
            top: 0;
            margin-top: -5px;

            margin-right: -1px;

            padding-right: 10px;

            border-radius: 5px;
            background: #fff;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            min-width: 200px;
            z-index: 1000;        /* Pastikan di atas elemen lain */
        }
        .dropdown-item.dropdown-submenu:hover > .submenu {
            display: block;
        }
    </style>

</head>

<body>
<!-- Spinner Start -->
<div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
    <div class="spinner-grow text-primary" role="status"></div>
</div>
<!-- Spinner End -->


<!-- Topbar Start -->
<div class="container-fluid bg-dark text-light p-0">
    <div class="row gx-0 d-none d-lg-flex">
        <div class="col-lg-7 px-5 text-start">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-map-marker-alt text-primary me-2"></small>
                <small>Jl. Sala KM 11.5 Yogyakarta</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center">
                <small class="far fa-envelope text-primary me-2"></small>
                <small>humas@sttii-yogyakarta.ac.id</small>
            </div>
        </div>
        <div class="col-lg-5 px-5 text-end">
            <div class="h-100 d-inline-flex align-items-center me-4">
                <small class="fa fa-phone-alt text-primary me-2"></small>
                <small>(0274) 496257</small>
            </div>
            <div class="h-100 d-inline-flex align-items-center mx-n2">
                <a class="btn btn-square btn-link rounded-0 border-0 border-end border-secondary" href="https://www.youtube.com/@STTII"><i class="fab fa-youtube"></i></a>
                <a class="btn btn-square btn-link rounded-0" href=""><i class="fab fa-instagram"></i></a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0">
    <a href="{{route('home.index')}}" class="navbar-brand d-flex align-items-center border-end px-4 px-lg-5">
        <img src="{{ asset('assets/assets/img/logo.png') }}" alt="Logo STTII" class="me-3" style="height: 50px; width: auto;">

        <div class="d-flex flex-column lh-1">
            <h2 class="m-0 text-dark fw-bold" style="letter-spacing: 1px;">STTII</h2>

            <small class="text-secondary text-uppercase fw-medium" style="font-size: 0.75rem; letter-spacing: 3px;">
                Yogyakarta
            </small>
        </div>
    </a>
    <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <img src="{{ asset('assets/assets/img/logo.png') }}" alt="Logo" style="width: 30px; height: 30px; object-fit: contain;">
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto p-4 p-lg-0">
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">About Us</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('home.sambutan')}}" class="dropdown-item">Sambutan Ketua</a>
                    <a href="{{route('home.sejarah')}}" class="dropdown-item">Sejarah</a>
                    <a href="{{route('home.visimisi')}}" class="dropdown-item">Visi, Misi, Tujuan, Sasaran</a>
                    <a href="{{route('home.kriteria')}}" class="dropdown-item">Kriteria Pendidikan</a>
                    <a href="{{route('home.pernyataan')}}" class="dropdown-item">Pernyataan Doktrinal</a>
                    <a href="https://yayasanimanindonesia.or.id/" class="dropdown-item">Yayasan Iman Indonesia</a>
                    <a href="{{route('home.dosen')}}" class="dropdown-item">Dosen</a>
                    <a href="{{route('home.tendik')}}" class="dropdown-item">Tendik</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Akademik</a>

                <div class="dropdown-menu bg-light m-0">

                    <div class="dropdown-item dropdown-submenu">
                        <a href="#" class="text-dark text-decoration-none d-block">Prodi Sarjana Teologi</a>

                        <ul class="dropdown-menu submenu">
                            <li><a href="{{route('home.profils1')}}" class="dropdown-item">Profil</a></li>
                            <li><a href="{{route('home.visis1')}}" class="dropdown-item">Visi Misi</a></li>
                            <li><a href="{{route('home.tujuan')}}" class="dropdown-item">Tujuan Sasaran</a></li>
                            <li><a href="{{route('home.konsentrasi')}}" class="dropdown-item">Konsentrasi</a></li>
                            <li><a href="{{route('home.unduhS1')}}" class="dropdown-item">Unduh</a></li>
                        </ul>
                    </div>

                    <div class="dropdown-item dropdown-submenu">
                        <a href="#" class="text-dark text-decoration-none d-block">Prodi Magister Teologi</a>
                        <ul class="dropdown-menu submenu">
                            <li><a href="{{route('home.profils2')}}" class="dropdown-item">Profil</a></li>
                            <li><a href="{{route('home.visis2')}}" class="dropdown-item">Visi Misi</a></li>
                            <li><a href="{{route('home.tujuans2')}}" class="dropdown-item">Tujuan Sasaran</a></li>
                            <li><a href="{{route('home.konsentrasis2')}}" class="dropdown-item">Konsentrasi</a></li>
                            <li><a href="{{route('home.unduhS2')}}" class="dropdown-item">Unduh</a></li>
                        </ul>
                    </div>

                    <div class="dropdown-item dropdown-submenu">
                        <a href="#" class="text-dark text-decoration-none d-block">Prodi Doktor Teologi</a>
                        <ul class="dropdown-menu submenu">
                            <li><a href="{{route('home.profils3')}}" class="dropdown-item">Profil</a></li>
                            <li><a href="{{route('home.visis3')}}" class="dropdown-item">Visi Misi</a></li>
                            <li><a href="{{route('home.tujuans3')}}" class="dropdown-item">Tujuan Sasaran</a></li>
                            <li><a href="{{route('home.konsentrasis3')}}" class="dropdown-item">Konsentrasi</a></li>
                            <li><a href="{{route('home.unduhS3')}}" class="dropdown-item">Unduh</a></li>
                        </ul>
                    </div>

                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Penelitian</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="https://pistis.sttii-yogyakarta.ac.id/" class="dropdown-item">Jurnal Pistis: Teologi dan Praktika</a>
                    <a href="https://www.ejournal.sttii-yogyakarta.ac.id/" class="dropdown-item">Jurnal Predica Verbum: Jurnal Teologi & Misi</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">SPMI</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('home.laporan')}}" class="dropdown-item">Laporan</a>
                    <a href="{{route('home.kebijakan')}}" class="dropdown-item">Dokumen Kebijakan</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kehidupan Kampus</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('home.beasiswa')}}" class="dropdown-item">Beasiswa</a>
                    <a href="{{route('home.fasilitas')}}" class="dropdown-item">Fasilitas</a>
                    <a href="https://semasttiijogja.site/" class="dropdown-item">Senat Mahasiswa</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alumni</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="https://tracerstudy.kemdiktisaintek.go.id/" class="dropdown-item">Tracer Study</a>
                    <a href="appointment.html" class="dropdown-item">Ikatan Alumni</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Quick Access</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="https://student.sttii-yogyakarta.ac.id/" class="dropdown-item">SIAKAD Mahasiswa</a>
                    <a href="https://lecturer.sttii-yogyakarta.ac.id/" class="dropdown-item">SIAKAD Dosen</a>
                    <a href="https://sttii-jogjakarta.jamitu.id" class="dropdown-item">LPMI</a>
                    <a href="https://lppm.sttii-yogyakarta.ac.id/" class="dropdown-item">LPPM</a>
                    <a href="https://elearning.sttii-yogyakarta.ac.id/" class="dropdown-item">E-Learning</a>
                    <a href="https://epustaka.sttii-yogyakarta.ac.id/" class="dropdown-item">E-Pustaka</a>
                </div>
            </div>
                <a href="{{route('auth.index')}}" class="btn btn-primary py-4 px-lg-4 d-none d-lg-block">Login<i class="fa fa-arrow-right ms-3"></i></a>

            </div>
       </div>
</nav>
<!-- Navbar End -->

<main class="main" style="{{ !Route::is('home.index') ? 'margin-top: 100px;' : '' }}">
    @yield('content')
</main>


<!-- Footer Start -->
{{-- Mengubah py-6 menjadi py-3 agar kotak footer lebih pendek --}}
<div class="container-fluid bg-dark text-light footer mt-5 py-4 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        {{-- Mengubah g-5 menjadi g-4 agar jarak antar kolom lebih rapat --}}
        <div class="row g-4">

            {{-- KOLOM 1: CONTACT US --}}
            <div class="col-lg-4 col-md-6">
                {{-- Mengubah h4 jadi h5 dan mb-4 jadi mb-3 agar lebih ringkas --}}
                <h5 class="text-white mb-3">Contact Us</h5>
                <p class="mb-2 text-white-50 small">
                    <i class="fa fa-map-marker-alt me-3"></i>Jl. Solo Km. 11,1 PO.BOX 4/YKAP, Kalasan Yogyakarta - Indonesia
                </p>
                <p class="mb-2 text-white-50 small">
                    <i class="fa fa-phone-alt me-3"></i><strong>Call Now:</strong> (0274) 496257
                </p>
                <p class="mb-2 text-white-50 small">
                    <i class="fa fa-envelope me-3"></i>
                    <a href="mailto:humas@sttii-yogyakarta.ac.id" class="text-white-50 text-decoration-none">humas@sttii-yogyakarta.ac.id</a>
                </p>
            </div>

            {{-- KOLOM 2: MOU & LOGO (Posisi Tengah) --}}
            <div class="col-lg-4 col-md-6 text-center">
                <h5 class="text-white mb-3">Memorandum of Understanding with</h5>

                {{-- Area Logo: gap dikurangi jadi gap-3, mb dikurangi jadi mb-2 --}}
                <div class="d-flex align-items-center justify-content-center gap-3 mb-2">
                    {{-- Logo 1 (Dikecilkan max-width nya) --}}
                    <img src="{{ asset('assets-fe/img/dalas.png') }}" alt="Dalas" style="max-width: 70px; height: auto;">

                    {{-- Logo 2 --}}
                    <img src="{{ asset('assets-fe/img/biola.png') }}" alt="Biola Univ" style="max-width: 100px; height: auto;">

                    {{-- Logo 3 --}}
                    <img src="{{ asset('assets-fe/img/tmai.jpeg') }}" alt="TMAI" style="max-width: 70px; height: auto;">
                </div>
            </div>

            {{-- KOLOM 3: AKSES CEPAT (Posisi Kanan) --}}
            <div class="col-lg-4 col-md-6 text-lg-end">
                <h5 class="text-white mb-3">Pelayanan</h5>
                <div class="d-flex flex-column justify-content-lg-end align-items-lg-end">
                    {{-- Menambahkan class small agar font lebih kecil --}}
                    <a class="btn btn-link text-white-50 text-decoration-none mb-1 small p-0" href="">Biro Adak</a>
                    <a class="btn btn-link text-white-50 text-decoration-none mb-1 small p-0" href="">P3S</a>
                    <a class="btn btn-link text-white-50 text-decoration-none small p-0" href="">Pusdatin</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Footer End -->


<!-- Copyright Start -->
<div class="container-fluid copyright text-light py-2 wow fadeIn" data-wow-delay="0.1s">
    <div class="container">
        <div class="row">
            {{-- Tambahkan class 'small' agar huruf lebih kecil --}}
            <div class="col-md-6 text-center text-md-start mb-1 mb-md-0 small">
                &copy; <a href="#">STTII Yogyakarta</a>, All Right Reserved.
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->


<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('assets-fe/lib/wow/wow.min.js')}}"></script>
<script src="{{asset('assets-fe/lib/easing/easing.min.js')}}"></script>
<script src="{{asset('assets-fe/lib/waypoints/waypoints.min.js')}}"></script>
<script src="{{asset('assets-fe/lib/owlcarousel/owl.carousel.min.js')}}"></script>

<!-- Template Javascript -->
<script src="{{asset('assets-fe/js/main.js')}}"></script>
</body>

</html>
