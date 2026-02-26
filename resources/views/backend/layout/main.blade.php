<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Dashboard Admin | STTII Yogyakarta</title>

    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="{{asset('assets/css/styles.css')}}" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f8f9fa;
        }

        /* 1. NAVBAR TOP: Putih Bersih */
        .sb-topnav.navbar {
            background-color: #ffffff !important;
            padding-top: 15px !important;
            padding-bottom: 12px !important;
            height: auto;
            border-bottom: 1px solid #ebedef;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
        }

        .brand-text-main span.fw-bold {
            color: #2c3e50 !important; /* Teks gelap di bg putih */
            font-size: 1.6rem !important;
        }

        .brand-text-main span.text-uppercase {
            color: #95a5a6 !important;
            font-size: 0.75rem !important;
        }

        /* 2. SIDEBAR: Putih dengan Border Halus */
        #layoutSidenav_nav .sb-sidenav {
            background-color: #ffffff !important;
            border-right: 1px solid #ebedef;
            box-shadow: 2px 0 10px rgba(0,0,0,0.02);
        }

        /* Menu Sidebar Default */
        .sb-sidenav-dark .sb-sidenav-menu .nav-link {
            color: #5d6778; /* Warna teks abu-abu gelap */
            padding: 12px 20px;
            margin: 5px 15px;
            border-radius: 12px;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            font-weight: 500;
        }

        /* EFEK HOVER & AKTIF: Gradasi Ungu Biru */
        .sb-sidenav-dark .sb-sidenav-menu .nav-link:hover,
        .sb-sidenav-dark .sb-sidenav-menu .nav-link.active {
            color: #ffffff !important;
            /* Gradasi Ungu ke Biru */
            background: linear-gradient(45deg, #6a11cb 0%, #2575fc 100%) !important;
            transform: translateX(8px);
            box-shadow: 0 4px 15px rgba(37, 117, 252, 0.3);
        }

        .sb-nav-link-icon {
            color: #a0aec0 !important;
            margin-right: 12px;
            transition: all 0.3s ease;
        }

        .nav-link:hover .sb-nav-link-icon,
        .nav-link.active .sb-nav-link-icon {
            color: #ffffff !important;
            transform: scale(1.1);
        }

        /* User Profile di Kanan */
        #navbarDropdown {
            color: #2c3e50 !important;
            background: #f8f9fa;
            border-radius: 50px;
            padding: 6px 18px;
            border: 1px solid #ebedef;
        }

        #sidebarToggle {
            color: #2c3e50 !important;
        }

        .sb-sidenav-menu-heading {
            padding: 25px 25px 10px !important;
            font-size: 0.7rem !important;
            color: #cbd5e0 !important;
            text-transform: uppercase;
            letter-spacing: 2px;
        }

        .sb-sidenav-footer {
            background-color: #f8f9fa !important;
            color: #718096;
            font-size: 0.75rem;
            border-top: 1px solid #ebedef;
        }

        /* Panah Collapse */
        .sb-sidenav-collapse-arrow {
            color: #a0aec0;
        }
        .nav-link:hover .sb-sidenav-collapse-arrow,
        .nav-link.active .sb-sidenav-collapse-arrow {
            color: #ffffff;
        }
    </style>
</head>
<body class="sb-nav-fixed">
<nav class="sb-topnav navbar navbar-expand">
    <a class="navbar-brand ps-4 d-flex align-items-center" href="{{route('dashboard.index')}}">
        <img src="{{ asset('assets/assets/img/logo.png') }}" alt="Logo STTII" height="55" class="me-3">

        <div class="d-flex flex-column lh-1 brand-text-main">
            <span class="fw-bold">STTII</span>
            <span class="text-uppercase" style="font-weight: 500; letter-spacing: 2px;">
                Yogyakarta
            </span>
        </div>
    </a>

    <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 ms-3" id="sidebarToggle" href="#!"><i class="fas fa-bars fa-lg"></i></button>

    <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0"></form>

    <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle shadow-sm" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fas fa-user-circle me-1"></i> Admin
            </a>
            <ul class="dropdown-menu dropdown-menu-end border-0 shadow-lg mt-3" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item py-2" href="#"><i class="fas fa-list fa-sm me-2 text-muted"></i> Activity Log</a></li>
                <li><hr class="dropdown-divider" /></li>
                <li><a class="dropdown-item py-2 text-danger" href="{{route('auth.logout')}}"><i class="fas fa-sign-out-alt fa-sm me-2"></i> Logout</a></li>
            </ul>
        </li>
    </ul>
</nav>

<div id="layoutSidenav">
    <div id="layoutSidenav_nav">
        <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
            <div class="sb-sidenav-menu">
                <div class="nav">
                    <div class="sb-sidenav-menu-heading">Utama</div>
                    <a class="nav-link {{ request()->is('admin/dashboard*') ? 'active' : '' }}" href="{{route('dashboard.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                        Dashboard
                    </a>

                    <div class="sb-sidenav-menu-heading">Konten Web</div>
                    <a class="nav-link {{ request()->is('admin/kategori*') ? 'active' : '' }}" href="{{route('kategori_kegiatan.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                        Kategori Kegiatan
                    </a>
                    <a class="nav-link {{ request()->is('admin/berita*') ? 'active' : '' }}" href="{{route('berita.index')}}">
                        <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                        Tampilan Berita
                    </a>
                    <a class="nav-link {{ request()->is('admin/cerita*') ? 'active' : '' }}" href="{{route('cerita.index')}}">
                        <div class="sb-nav-link-icon"><i class="far fa-comment-dots"></i></div>
                        Cerita Alumni
                    </a>

                    <div class="sb-sidenav-menu-heading">Manajemen Data</div>
                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseDosen">
                        <div class="sb-nav-link-icon"><i class="fas fa-id-card"></i></div>
                        Operasional
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseDosen" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav" style="background-color: #fbfbfb;">
                            <a class="nav-link" href="{{route('dosen.index')}}" style="color: #5d6778;">Data Dosen</a>
                            <a class="nav-link" href="{{route('buku_jurnal.index')}}" style="color: #5d6778;">Buku & Jurnal</a>
                            <a class="nav-link" href="{{route('bimbingan.index')}}" style="color: #5d6778;">Bimbingan Disertasi</a>
                            <a class="nav-link" href="{{route('tendik.index')}}" style="color: #5d6778;">Data Tendik</a>
                        </nav>
                    </div>

                    <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseAnggaran">
                        <div class="sb-nav-link-icon"><i class="fas fa-folder-open"></i></div>
                        Dokumen Prodi
                        <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="collapseAnggaran" data-bs-parent="#sidenavAccordion">
                        <nav class="sb-sidenav-menu-nested nav" style="background-color: #fbfbfb;">
                            <a class="nav-link" href="{{route('dokumen_sarjana.index')}}" style="color: #5d6778;">Dokumen S1</a>
                            <a class="nav-link" href="{{route('dokumen_magister.index')}}" style="color: #5d6778;">Dokumen S2</a>
                            <a class="nav-link" href="{{route('dokumen_doktor.index')}}" style="color: #5d6778;">Dokumen S3</a>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="sb-sidenav-footer">
                <div class="small">Logged in as Admin</div>
                STTII Yogyakarta
            </div>
        </nav>
    </div>

    <div id="layoutSidenav_content">
        <main class="p-4">
            @yield('content')
        </main>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="{{asset('assets/js/scripts.js')}}"></script>
@section('content')
@endsection

<script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ), {
            // Konfigurasi tambahan jika diperlukan
            toolbar: [ 'heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote' ]
        } )
        .catch( error => {
            console.error( error );
        } );
</script>
</body>
</html>
