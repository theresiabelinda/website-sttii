@extends('frontend.layout.main')

@section('content')

    {{-- HEADER --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Dosen & Staf Pengajar</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">About Us</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Dosen</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN PIMPINAN (KETUA & WAKET) --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Struktur Pimpinan</h6>
                <h1 class="display-6 mb-4">Pimpinan STTII Yogyakarta</h1>
            </div>

            <div class="row g-4 justify-content-center">

                {{-- KETUA --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            {{-- Ganti src dengan foto ketua --}}
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/sumbut.jpg') }}" alt="Ketua" style="height: 300px; object-fit: cover;">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2 mb-1">Pdt. Dr. Sumbut Yermianto, M.Th</h5>
                            <span class="text-primary small text-uppercase">Ketua STTII</span>
                        </div>
                    </div>
                </div>

                {{-- WAKET 1 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            {{-- Gunakan placeholder atau foto asli --}}
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/jani.jpg') }}" alt="Waket 1" style="height: 300px; object-fit: cover;">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Jani, M.Th</h5>
                            <span class="text-primary small text-uppercase">Waket I (Akademik)</span>
                        </div>
                    </div>
                </div>

                {{-- WAKET 2 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/christina.jpeg') }}" alt="Waket 2" style="height: 300px; object-fit: cover;">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2 mb-1">Dra. Christina Tedjaningtyas</h5>
                            <span class="text-primary small text-uppercase">Waket II (Keuangan)</span>
                        </div>
                    </div>
                </div>

                {{-- WAKET 3 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Noor.jpg') }}" alt="Waket 3" style="height: 300px; object-fit: cover;">
                            <div class="team-social text-center">
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square btn-outline-primary border-2 m-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Noor Anggraito, M.Th</h5>
                            <span class="text-primary small text-uppercase">Waket III (Kemahasiswaan)</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    {{-- BAGIAN DOSEN PRODI (Kaprodi & Dosen Tetap) --}}
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Tenaga Pengajar</h6>
                <h1 class="display-6 mb-4">Kaprodi & Dosen Tetap</h1>
            </div>

            <div class="row g-4">

                {{-- KAPRODI S1 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/anon.jpeg') }}" alt="Kaprodi" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Anon Dwi Saputro, M.Th</h5>
                            <small class="text-muted d-block mb-2">S.Th.</small>
                            <span class="badge bg-primary">Kaprodi S1 Teologi</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Theophylus.jpg') }}" alt="Kaprodi" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Theophylus Doxa Ziraluo, M.Th</h5>
                            <small class="text-muted d-block mb-2">M.Th.</small>
                            <span class="badge bg-primary">Kaprodi S2 Teologi</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Philip.jpg') }}" alt="Kaprodi" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Philip Suciadi Chia, M.Th., Ph.D</h5>
                            <small class="text-muted d-block mb-2">D.Th.</small>
                            <span class="badge bg-primary">Kaprodi S3 Teologi</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 1 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Riston.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Riston Batuara, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S1 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 2 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Endah Totok.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Endah Totok Budiono, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S1 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 3 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Philipus.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Philipus Pada Sulistya, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S1 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 4 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Ni Putu.jpeg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Ni Putu Sumarmi, M.Pd.K</h5>
                            <small class="text-muted d-block mb-2">Homebase S1 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 5 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Sulastri.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Sulastri, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S1 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 6 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/tulus.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Tulus Raharjo, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S2 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 7 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/farel.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Farel Yosua Sualang, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S2 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 8 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Tri Endah.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Tri Endah Astuti, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S2 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 9 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/lanny.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Lanny Laras, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S2 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 10 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/baskoro.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Paulus Kunto Baskoro, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S3 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 11 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/detty.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Detty Manongko, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S3 (Teologi)</small>
                            <span class="text-secondary small">Dosen Tetap</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 12 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/saparman.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Saparman, S.T.M</h5>
                            <small class="text-muted d-block mb-2">Homebase S3 (Teologi)</small>
                            <span class="text-secondary small">Dosen</span>
                        </div>
                    </div>
                </div>

                {{-- DOSEN 13 --}}
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid w-100" src="{{ asset('assets-fe/img/Librecht.jpg') }}" alt="Dosen" style="height: 250px; object-fit: cover;">
                        </div>
                        <div class="text-center p-4">
                            <h5 class="mt-2 mb-1">Dr. Librecth Anthony, M.Th</h5>
                            <small class="text-muted d-block mb-2">Homebase S3 (Teologi)</small>
                            <span class="text-secondary small">Dosen</span>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
