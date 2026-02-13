@extends('frontend.layout.main')

@section('content')

    {{-- 1. HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Dokumen Laporan SPMI</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Laporan</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- 2. DAFTAR KEBIJAKAN --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                {{-- Bagian Teks Intro --}}
                <div class="col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="text-center mx-auto mb-5" style="max-width: 700px;">
                        <h6 class="text-primary text-uppercase mb-2">Pusat Informasi</h6>
                        <h1 class="display-6 mb-0">Laporan SPMI</h1>
                        <hr class="w-25 mx-auto border-primary mb-4" style="opacity: 1;">
                        <p class="text-secondary fs-5">Dokumen Standar Penjaminan Mutu Internal STTII Yogyakarta</p>
                    </div>
                </div>

                {{-- Tabel / List Dokumen --}}
                <div class="col-lg-10 mx-auto wow fadeInUp" data-wow-delay="0.3s">
                    <div class="bg-light rounded p-4 p-md-5 shadow-sm">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-dark">
                                <tr>
                                    <th class="py-3 px-4" style="border-top-left-radius: 10px;">No</th>
                                    <th class="py-3 px-4">Nama Dokumen Laporan</th>
                                    <th class="py-3 px-4 text-center">Tahun</th>
                                    <th class="py-3 px-4 text-center" style="border-top-right-radius: 10px;">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($laporan as $key => $item)
                                    <tr>
                                        <td class="px-4 fw-bold text-muted">{{ $loop->iteration }}</td>
                                        <td class="px-4">
                                            <div class="d-flex align-items-center">
                                                <i class="far fa-file-pdf fa-2x text-danger me-3"></i>
                                                <span class="fw-bold text-dark">{{ $item->nama_file }}</span>
                                            </div>
                                        </td>
                                        <td class="px-4 text-center">
                                            <span class="badge bg-primary px-3 py-2">{{ $item->tahun }}</span>
                                        </td>
                                        <td class="px-4 text-center">
                                            <a href="{{ route('laporan.unduh_publik', $item->id) }}" class="btn btn-info btn-sm" target="_blank">
                                                <i class="fa fa-eye"></i> Unduh
                                            </a>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center py-5 text-muted">Belum ada dokumen kebijakan yang tersedia.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex justify-content-center mt-4">
                            {{ $laporan->links('pagination::bootstrap-5') }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- CSS TAMBAHAN --}}
    <style>
        .table thead {
            background-color: #002147; /* Warna biru gelap khas STTII */
        }
        .table-hover tbody tr:hover {
            background-color: rgba(0, 33, 71, 0.03);
            transition: 0.3s;
        }
        .btn-outline-primary:hover {
            color: #fff;
            background-color: #FDB10C; /* Warna emas saat di-hover */
            border-color: #FDB10C;
        }
    </style>

@endsection
