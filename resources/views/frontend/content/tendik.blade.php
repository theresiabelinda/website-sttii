@extends('frontend.layout.main')

@section('content')
    <section class="py-5 bg-light">
        <div class="container">
            <div class="text-center mb-5">
                <h2 class="fw-bold">Tenaga Kependidikan</h2>
                <p class="text-muted">Mengenal tim profesional di balik layanan administrasi kami.</p>
                <hr class="mx-auto" style="width: 50px; border: 2px solid #0d6efd;">
            </div>

            <div class="row g-4">
                @forelse($tendik as $t)
                    <div class="col-lg-3 col-md-4 col-sm-6">
                        <div class="card h-100 border-0 shadow-sm transition-hover">
                            <div class="position-relative overflow-hidden" style="height: 250px;">
                                    <img src="{{ asset('assets-fe/img/' . $t->foto_url) }}"
                                         class="card-img p-3 shadow-none"
                                         style="object-fit: cover; height: 100%; border-radius: 25px;"
                                         alt="{{ $t->nama }}"
                                         onerror="this.onerror=null; this.src='{{ asset('assets-fe/img/default.jpg') }}'">
                            </div>

                            <div class="card-body text-center pt-0">
                                <h6 class="fw-bold mb-1 text-dark">{{ $t->nama }}</h6>
                                <p class="small text-primary fw-semibold mb-2">
                                    {{ strtoupper($t->divisi) }}
                                </p>

                                <hr class="my-2 opacity-25">

                                <div class="text-start">
                                    <p class="mb-1 small text-muted">
                                        <i class="bi bi-envelope-fill me-2 text-secondary"></i>{{ $t->email }}
                                    </p>
                                    <p class="mb-0 small text-muted">
                                        <i class="bi bi-mortarboard-fill me-2 text-secondary"></i>{{ $t->pendidikan_terakhir }} {{ $t->jurusan ? '(' . $t->jurusan . ')' : '' }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12 text-center py-5">
                        <div class="alert alert-info d-inline-block">
                            <i class="bi bi-info-circle me-2"></i>Data tenaga kependidikan belum tersedia.
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </section>

    <style>
        .transition-hover {
            transition: transform .3s ease, box-shadow .3s ease;
        }
        .transition-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .card-img {
            object-position: top;
        }
        .transition-hover {
            transition: transform .3s ease, shadow .3s ease;
        }
        .transition-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
        }
        .card-img {
            object-position: top;
        }
    </style>
@endsection
