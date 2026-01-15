@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"

         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">

        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Unduh Dokumen Akademik</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Unduh Dokumen S3</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- CONTENT SECTION --}}
    <div class="container-xxl py-6">
        <div class="container">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Pusat Unduhan</h6>
                <h1 class="display-6 mb-4">Dokumen Prodi Doktor Teologi</h1>
                <p class="fs-6 text-secondary">Silakan unduh dokumen-dokumen akademik (Pedoman, Formulir, Kurikulum, dll) yang dibutuhkan di bawah ini.</p>
            </div>

            <div class="row justify-content-center">
                <div class="col-lg-10 wow fadeInUp" data-wow-delay="0.3s">

                    <div class="card border-0 shadow rounded overflow-hidden">
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-hover align-middle mb-0">
                                    <thead class="bg-light">
                                    <tr>
                                        <th class="py-4 ps-4 text-primary" style="width: 5%;">No</th>
                                        <th class="py-4 text-primary" style="width: 55%;">Nama Dokumen</th>
                                        <th class="py-4 text-primary" style="width: 20%;">Tanggal Upload</th>
                                        <th class="py-4 text-center text-primary" style="width: 20%;">Aksi</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($dokumen as $key => $item)
                                        <tr>
                                            <td class="ps-4 fw-bold text-secondary">{{ $key + 1 }}</td>
                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <div class="btn-square bg-light rounded-circle me-3" style="width: 40px; height: 40px;">
                                                        <i class="fa fa-file-pdf text-danger"></i>
                                                    </div>
                                                    <span class="fw-bold text-dark">{{ $item->nama_file }}</span>
                                                </div>
                                            </td>
                                            <td class="text-muted">
                                                <i class="far fa-calendar-alt me-2"></i>{{ $item->created_at->format('d M Y') }}
                                            </td>
                                            <td class="text-center">
                                                <a href="{{ route('storage.doktor_view', ['path' => $item->path_file]) }}" target="_blank" class="btn btn-sm btn-info">
                                                    <i class="fa fa-eye"></i> Unduh
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center py-5">
                                                <div class="d-flex flex-column align-items-center justify-content-center">
                                                    <i class="fa fa-folder-open fa-3x text-light mb-3"></i>
                                                    <h5 class="text-muted">Belum ada dokumen yang tersedia saat ini.</h5>
                                                </div>
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>

                            <div class="d-flex justify-content-center mt-4">
                                {{ $dokumen->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
