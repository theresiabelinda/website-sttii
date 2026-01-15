@extends('frontend.layout.main')

@section('content')

    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">>
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Profil Prodi Doktor (S3)</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Profil S3</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-5 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="position-relative h-auto mb-4">
                        <img class="img-fluid rounded w-100 shadow-sm" src="{{ asset('assets-fe/img/profils1.jpeg') }}" alt="Kegiatan Mahasiswa S1" style="object-fit: cover; min-height: 350px;">

                        <div class="position-absolute top-0 start-0 bg-white pe-3 pb-3" style="width: 100px; height: 100px; border-bottom-right-radius: 20px;"></div>

                        <div class="position-absolute bottom-0 end-0 bg-primary text-white px-4 py-2 rounded-top-start" style="border-top-left-radius: 20px;">
                            <h5 class="m-0 text-white">Sejak 1979</h5>
                        </div>
                    </div>

                    <div class="card border-0 shadow-sm bg-light">
                        <div class="card-body p-4">
                            <h5 class="mb-3 text-dark border-bottom pb-2"><i class="fa fa-info-circle text-primary me-2"></i>Informasi Prodi</h5>

                            <ul class="list-unstyled mb-0">
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fa fa-graduation-cap text-primary mt-1 me-3" style="width: 20px;"></i>
                                    <div>
                                        <small class="text-uppercase text-muted fw-bold" style="font-size: 0.75rem;">Gelar Akademik</small>
                                        <div class="fw-bold text-dark">Doktor Teologi (D.Th.)</div>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fa fa-certificate text-primary mt-1 me-3" style="width: 20px;"></i>
                                    <div>
                                        <small class="text-uppercase text-muted fw-bold" style="font-size: 0.75rem;">No. SK Akreditasi</small>
                                        <div class="text-dark">563/SK/BAN-PT/Akred/D/I/2022</div>
                                    </div>
                                </li>
                                <li class="mb-3 d-flex align-items-start">
                                    <i class="fa fa-map-marker-alt text-primary mt-1 me-3" style="width: 20px;"></i>
                                    <div>
                                        <small class="text-uppercase text-muted fw-bold" style="font-size: 0.75rem;">Lokasi Kampus</small>
                                        <div class="text-dark">Jl. Solo Km 11,1 Yogyakarta</div>
                                    </div>
                                </li>
                                <li class="d-flex align-items-start">
                                    <i class="fa fa-envelope text-primary mt-1 me-3" style="width: 20px;"></i>
                                    <div>
                                        <small class="text-uppercase text-muted fw-bold" style="font-size: 0.75rem;">Kontak</small>
                                        <div>
                                            <a href="mailto:dth.sttii111@gmail.com" class="text-dark d-block">dth.sttii111@gmail.com</a>
                                            <a href="https://wa.me/6281390320691" target="_blank" class="text-primary fw-bold"> 0813-9032-0691 (WA)</a>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-7 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="h-100 ps-lg-3">
                        <h6 class="text-primary text-uppercase mb-2">Profil Akademik</h6>
                        <h1 class="display-6 mb-4">Program Studi Sarjana Teologi</h1>

                        <p class="fs-5 mb-4 text-dark">
                            Program ini dirancang bagi mereka yang terpanggil untuk memasuki <strong>pelayanan penuh waktu</strong>.
                        </p>

                        <p class="mb-4">
                            Kuliah diadakan selama delapan semester, diselenggarakan setiap hari
                            <span class="bg-light text-primary fw-bold px-2 py-1 rounded border">Selasa - Jumat</span>
                            pukul <span class="fw-bold">07.30 - 15.00 WIB</span>.
                        </p>

                        <div class="row g-3 mb-4">
                            <div class="col-12">
                                <div class="bg-primary bg-opacity-10 p-4 rounded border-start border-5 border-primary">
                                    <h5 class="text-dark mb-3">Keunggulan Lulusan (3S)</h5>
                                    <div class="row text-center">
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="bg-white p-3 rounded shadow-sm h-100">
                                                <i class="fa fa-book-open text-primary mb-2 fa-2x"></i>
                                                <h6 class="fw-bold mb-1">Sarjana</h6>
                                                <small class="text-muted">Pengetahuan Teologi Tinggi</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-3 mb-md-0">
                                            <div class="bg-white p-3 rounded shadow-sm h-100">
                                                <i class="fa fa-heart text-primary mb-2 fa-2x"></i>
                                                <h6 class="fw-bold mb-1">Suci</h6>
                                                <small class="text-muted">Kualitas Rohani Mantap</small>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="bg-white p-3 rounded shadow-sm h-100">
                                                <i class="fa fa-hands-helping text-primary mb-2 fa-2x"></i>
                                                <h6 class="fw-bold mb-1">Setia</h6>
                                                <small class="text-muted">Cakap Pelayanan Praktis</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <p class="mb-4 text-muted">
                            Program ini bertujuan mempersiapkan hamba Tuhan yang memiliki integritas, penguasaan Alkitab yang baik, serta keahlian dalam pelayanan gereja dan masyarakat sebagai <strong>Pengkhotbah, Pendidik, dan Penginjil</strong>.
                        </p>

                        <div class="d-flex align-items-center gap-3">
                            <a class="btn btn-primary py-3 px-5 shadow-sm" href="#">
                                <i class="fa fa-edit me-2"></i> Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
