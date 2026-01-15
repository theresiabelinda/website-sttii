@extends('backend/layout/main')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Ringkasan Sistem</li>
            </ol>

            <div class="card border-0 shadow-sm mb-4" style="background: linear-gradient(45deg, #0d6efd, #0dcaf0); border-radius: 15px;">
                <div class="card-body p-4">
                    <div class="row align-items-center">
                        <div class="col-md-8 text-white">
                            <h2 class="display-6 fw-bold">Selamat Datang, Admin!</h2>
                            <p class="lead mb-0">Kelola konten dan pantau perkembangan STTII Yogyakarta dengan mudah.</p>
                        </div>
                        <div class="col-md-4 text-center d-none d-md-block">
                            <i class="fas fa-user-check fa-7x text-white-50"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted small text-uppercase fw-bold">Total Pengunjung</h6>

                                    {{-- Angka Total --}}
                                    <h2 class="fw-bold mb-0">{{ number_format($total_pengunjung) }}</h2>

                                    {{-- Persentase/Info Hari Ini --}}
                                    <span class="text-success small fw-bold">
                        <i class="fas fa-arrow-up"></i> {{ $pengunjung_hari_ini }} hari ini
                    </span>
                                </div>
                                <div class="bg-primary bg-opacity-10 p-3 rounded-circle">
                                    <i class="fas fa-users fa-2x text-primary"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-md-6">
                    <div class="card border-0 shadow-sm mb-4">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <h6 class="text-muted small text-uppercase fw-bold">Total Berita</h6>
                                    <h2 class="fw-bold mb-0">{{ $total_berita }}</h2>
                                    <p class="text-muted small mb-0">Aktif di website</p>
                                </div>
                                <div class="bg-success bg-opacity-10 p-3 rounded-circle">
                                    <i class="fas fa-newspaper fa-2x text-success"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
