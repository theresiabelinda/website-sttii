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

        /* Tampilan Default untuk Mobile (Turun ke bawah) */
        .dropdown-item.dropdown-submenu .submenu {
            display: none;
            position: static; /* Berubah jadi statis agar turun ke bawah */
            float: none;
            width: 100%;
            padding-left: 20px; /* Indentasi agar terlihat seperti anak menu */
            background-color: #f8f9fa;
            border: none;
            box-shadow: none;
        }

        /* Tampilan Khusus Desktop (Layar Lebar) */
        @media (min-width: 992px) {
            .dropdown-item.dropdown-submenu .submenu {
                display: none;
                position: absolute;
                left: 100%; /* Muncul di kanan */
                top: 0;
                margin-top: -5px;
                margin-right: -1px;
                min-width: 200px;
                background: #fff;
                box-shadow: 0 0 15px rgba(0,0,0,0.1);
                z-index: 1000;
            }
        }
        .dropdown-item.dropdown-submenu:hover > .submenu {
            display: block;
        }

        /*WA*/
        .floating-wa {
            position: fixed;
            bottom: 20px;
            right: 20px; /* Posisi kanan bawah */
            background-color: #25d366;
            color: #fff;
            padding: 10px 20px;
            border-radius: 50px;
            display: flex;
            align-items: center;
            text-decoration: none;
            box-shadow: 2px 2px 10px rgba(0,0,0,0.2);
            z-index: 1000;
        }

        .floating-wa img {
            width: 25px;
            margin-right: 10px;
        }

        .floating-wa:hover {
            background-color: #128c7e;
        }

        .wa-widget-container {
            position: fixed;
            bottom: 20px;
            right: 20px;
            z-index: 9999;
        }

        .wa-widget-container .card {
            transition: all 0.3s ease;
        }

        /* Menghilangkan outline biru saat tombol diklik */
        .wa-widget-container .btn:focus {
            box-shadow: 0 5px 15px rgba(0,0,0,0.3) !important;
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
                <a class="btn btn-square btn-link rounded-0" href="https://www.instagram.com/sttii.jogja/"><i class="fab fa-instagram"></i></a>
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
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tentang</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('home.sambutan')}}" class="dropdown-item">Sambutan Ketua</a>
                    <a href="{{route('home.sejarah')}}" class="dropdown-item">Sejarah</a>
                    <a href="{{route('home.visimisi')}}" class="dropdown-item">Visi, Misi, Tujuan, Strategi</a>
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
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Kehidupan Kampus</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="{{route('berita.kumpulan')}}" class="dropdown-item">Kegiatan Kampus</a>
                    <a href="{{route('home.fasilitas')}}" class="dropdown-item">Fasilitas</a>
                    <a href="https://semasttiijogja.site/" class="dropdown-item">Senat Mahasiswa</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pendaftaran</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="#" class="dropdown-item">Pendaftaran Mahasiswa Baru</a>
                    <a href="{{route('home.beasiswa')}}" class="dropdown-item">Beasiswa</a>
                    <a href="{{route('home.asrama')}}" class="dropdown-item">Asrama</a>
                    <a href="{{route('home.faq')}}" class="dropdown-item">Frequently Asked Questions (FAQ)</a>
                </div>
            </div>

            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Alumni</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="https://tracerstudy.kemdiktisaintek.go.id/" class="dropdown-item">Tracer Study</a>
                    <a href="appointment.html" class="dropdown-item">Ikatan Alumni</a>
                    <a href="#" class="dropdown-item">Cerita Alumni</a>
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
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Akses Cepat</a>
                <div class="dropdown-menu bg-light m-0">
                    <a href="https://student.sttii-yogyakarta.ac.id/" class="dropdown-item">SIAKAD Mahasiswa</a>
                    <a href="https://lecturer.sttii-yogyakarta.ac.id/" class="dropdown-item">SIAKAD Dosen</a>
                    <a href="https://sttii-jogjakarta.jamitu.id" class="dropdown-item">LPMI</a>
                    <a href="https://lppm.sttii-yogyakarta.ac.id/" class="dropdown-item">LPPM</a>
                    <a href="https://spada.kemdiktisaintek.go.id/" class="dropdown-item">SPADA</a>
                    <a href="https://elearning.sttii-yogyakarta.ac.id/" class="dropdown-item">E-Learning</a>
                    <a href="https://epustaka.sttii-yogyakarta.ac.id/" class="dropdown-item">E-Pustaka</a>
                </div>
       </div>
</nav>
<!-- Navbar End -->

<main class="main" style="{{ !Route::is('home.index') ? 'margin-top: 100px;' : '' }}">
    @yield('content')
</main>


<!-- Footer Start -->
<div class="container-fluid bg-light text-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s" style="border-top: 3px solid #dee2e6;">
    <div class="container py-5">
        <div class="row g-5">
            {{-- KOLOM 1: LOGO & ABOUT --}}
            <div class="col-lg-4 col-md-6 text-center text-md-start">
                <img src="{{ asset('assets/assets/img/logo.png') }}" alt="Logo STTII" class="mb-3" style="height: 80px;">
                <h5 class="fw-bold text-uppercase mb-3">STTII Yogyakarta</h5>
                <p class="small text-muted mb-4" style="text-align: justify; line-height: 1.6;">
                    Sekolah Tinggi Teologi Injili Indonesia (STTII) Yogyakarta berkomitmen untuk melahirkan hamba Tuhan yang setia, suci, dan sarjana bagi kemuliaan nama Tuhan di gereja dan masyarakat.
                </p>
                <div class="d-flex justify-content-center justify-content-md-start">
                    <a class="btn btn-outline-dark btn-sm me-2" href="https://www.youtube.com/@STTII"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-outline-dark btn-sm me-2" href="https://www.instagram.com/sttii.jogja/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-dark btn-sm" href=""><i class="fab fa-facebook-f"></i></a>
                </div>
            </div>

            {{-- KOLOM 2: QUICK LINKS & MOU --}}
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-3 border-bottom pb-2">Link Cepat</h5>
                {{-- Jarak antar link diperpendek dengan g-2 dan padding kecil --}}
                <div class="row g-2">
                    <div class="col-6">
                        <a class="btn btn-link text-dark small p-0 mb-1 d-block" href="{{route('home.kebijakan')}}">Kebijakan SPMI</a>
                        <a class="btn btn-link text-dark small p-0 mb-1 d-block" href="{{route('home.laporan')}}">Laporan SPMI</a>
                        <a class="btn btn-link text-dark small p-0 mb-1 d-block" href="{{route('berita.kumpulan')}}">Berita</a>
                    </div>
                    <div class="col-6">
                        <a class="btn btn-link text-dark small p-0 mb-1 d-block" href="">Biro Adak</a>
                        <a class="btn btn-link text-dark small p-0 mb-1 d-block" href="">P3S</a>
                        <a class="btn btn-link text-dark small p-0 mb-1 d-block" href="">Pusdatin</a>
                    </div>
                </div>

                {{-- Bagian MOU dibuat lebih besar --}}
                <h5 class="fw-bold mt-4 mb-3 border-bottom pb-2 small text-uppercase">Memorandum of Understanding with</h5>
                <div class="d-flex align-items-center flex-wrap gap-4">
                    <img src="{{ asset('assets-fe/img/dalas.png') }}" alt="Dalas" style="height: 50px; width: auto;">
                    <img src="{{ asset('assets-fe/img/biola.png') }}" alt="Biola" style="height: 55px; width: auto;">
                    <img src="{{ asset('assets-fe/img/tmai.jpeg') }}" alt="TMAI" style="height: 50px; width: auto;">
                </div>
            </div>

            {{-- KOLOM 3: CONTACT INFO --}}
            <div class="col-lg-4 col-md-6">
                <h5 class="fw-bold mb-3 border-bottom pb-2">Contact</h5>
                <div class="d-flex mb-2">
                    <i class="fa fa-map-marker-alt text-primary me-3 mt-1"></i>
                    <p class="small mb-0 text-muted">
                        Jl. Sala KM 11.5, PO.BOX 4/YKAP, Kalasan,<br>
                        Sleman, DIY - Indonesia 55571
                    </p>
                </div>
                <div class="d-flex mb-2">
                    <i class="fa fa-phone-alt text-primary me-3"></i>
                    <p class="small mb-0 text-muted">(0274) 496257</p>
                </div>
                <div class="d-flex mb-3">
                    <i class="fa fa-envelope text-primary me-3"></i>
                    <p class="small mb-0 text-muted">humas@sttii-yogyakarta.ac.id</p>
                </div>
                <a href="{{route('auth.index')}}" class="btn btn-warning fw-bold btn-sm mt-2 px-4 shadow-sm">Portal Login</a>
            </div>
        </div>
    </div>

    {{-- COPYRIGHT --}}
    <div class="container-fluid py-4" style="background: #f1f1f1; border-top: 1px solid #e0e0e0;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 text-center text-md-start small text-muted">
                    &copy; 2026 <strong>STTII Yogyakarta</strong>. All Rights Reserved.
                </div>
                <div class="col-md-6 text-center text-md-end mt-2 mt-md-0">
                    <small class="text-uppercase fw-bold" style="letter-spacing: 1px; color: #003366;">@STTIIYogyakarta</small>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Copyright End -->

{{--    WhatsApp--}}
<div class="wa-widget-container">
    <div class="collapse mb-3" id="waMenu">
        <div class="card shadow-lg border-0" style="width: 300px; border-radius: 15px; overflow: hidden;">
            <div class="card-header bg-success text-white p-3">
                <h6 class="mb-1">Our support team is here!</h6>
                <small>Ask us anything!</small>
            </div>
            <div class="list-group list-group-flush">
                <a href="https://wa.me/6285741322565" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                    <img src="{{ asset('assets/assets/img/logo.png') }}" width="30" class="me-3">
                    <div>
                        <div class="fw-bold">Pendaftaran S1</div>
                        <small class="text-success">Online</small>
                    </div>
                </a>
                <a href="https://wa.me/6281382833288" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                    <img src="{{ asset('assets/assets/img/logo.png') }}" width="30" class="me-3">
                    <div>
                        <div class="fw-bold">Pendaftaran S2</div>
                        <small class="text-success">Online</small>
                    </div>
                </a>
                <a href="https://wa.me/6281390320691" target="_blank" class="list-group-item list-group-item-action d-flex align-items-center p-3">
                    <img src="{{ asset('assets/assets/img/logo.png') }}" width="30" class="me-3">
                    <div>
                        <div class="fw-bold">Pendaftaran S3</div>
                        <small class="text-success">Online</small>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <button class="btn btn-success rounded-pill shadow-lg d-flex align-items-center px-4 py-2 float-end"
            type="button" data-bs-toggle="collapse" data-bs-target="#waMenu" aria-expanded="false">
        <img src="https://upload.wikimedia.org/wikipedia/commons/6/6b/WhatsApp.svg" width="25" class="me-2">
        Hi, how can I help?
    </button>
</div>


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
