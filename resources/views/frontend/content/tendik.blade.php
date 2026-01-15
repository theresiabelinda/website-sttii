@extends('frontend.layout.main')

@section('content')
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">Tenaga Kependidikan</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ url('/') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Tendik</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Garda Pelayanan</h6>
                <h1 class="display-6 mb-4">Mengenal Tim Administrasi & Layanan STTII Yogyakarta</h1>
                <p class="text-muted">Komitmen kami adalah memberikan pelayanan administratif terbaik untuk mendukung kelancaran akademik dan kenyamanan seluruh civitas akademika.</p>
            </div>

            <div class="row g-4">
                {{-- Contoh Card Tendik 1 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/ENDANG.png') }}" alt="endang" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Endang Widuri, M.Th</h5>
                            <small class="text-primary fw-bold text-uppercase">Sekretaris</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/RUTI.png') }}" alt="ruti" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Ruti Ariyani, A.md</h5>
                            <small class="text-primary fw-bold text-uppercase">Staf Keuangan</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/kornelius.jpg') }}" alt="riki" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Kornelius Riki, A.md</h5>
                            <small class="text-primary fw-bold text-uppercase">Staf Keuangan</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/SUYONO.jpg') }}" alt="yono" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Yehezkiel Suyono</h5>
                            <small class="text-primary fw-bold text-uppercase">Staf Sarana & Prasarana</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/TESA.png') }}" alt="tesa" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Theresia Belinda Cahyono</h5>
                            <small class="text-primary fw-bold text-uppercase">Admin PT PDDikti</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>pddikti.pusdatin111@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/MELA.png') }}" alt="mela" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Ni Komang Melaty Christine Dian Ristiani, S.M</h5>
                            <small class="text-primary fw-bold text-uppercase">Staf SPMI</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/RIKI MARIADI.png') }}" alt="rikimariadi" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Riki Mariadi, S.Th</h5>
                            <small class="text-primary fw-bold text-uppercase">Staf Operator Ruang Hybrid & Kepala Caffe Three O</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/JOEL.png') }}" alt="joel" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Joel Amadeus Brilian, S.Th</h5>
                            <small class="text-primary fw-bold text-uppercase">Staf Admin Tracer Study dan Multimedia</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/YOKIBET.png') }}" alt="joel" style="object-fit: cover; height: 300px;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mb-1">Yokibet Henny Kawangung, S.Th</h5>
                            <small class="text-primary fw-bold text-uppercase">Staf Perpustakaan</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="height: 300px;">
                            <i class="fa fa-user-circle fa-8x text-secondary"></i>
                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-1">Merlin Manggala, S.Th</h5>
                            <small class="text-primary fw-bold text-uppercase">Sekretaris Prodi Sarjana</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative shadow-sm rounded overflow-hidden bg-white h-100">
                        <div class="d-flex align-items-center justify-content-center bg-light" style="height: 300px;">
                            <i class="fa fa-user-circle fa-8x text-secondary"></i>
                        </div>

                        <div class="text-center p-4">
                            <h5 class="mb-1">Timotius Sulentasi, M.Ag</h5>
                            <small class="text-primary fw-bold text-uppercase">Staf P3S</small>
                        </div>
                        <div class="team-social text-center border-top py-3">
                            <p class="mb-0 small text-muted"><i class="fa fa-envelope text-primary me-2"></i>humas.sttii-yogyakarta.ac.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .team-item {
            transition: .5s;
            border: 1px solid #f1f1f1;
        }
        .team-item:hover {
            transform: translateY(-10px);
            border-color: var(--bs-primary);
        }
        .team-item img {
            transition: .5s;
        }
        .team-item:hover img {
            transform: scale(1.1);
        }
        .page-header {
            margin-top: 0;
        }
    </style>
@endsection
