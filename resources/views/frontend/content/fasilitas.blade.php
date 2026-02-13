@extends('frontend.layout.main')

@section('content')

    {{-- 1. HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Fasilitas Kampus</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Fasilitas</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- 2. GALERI FASILITAS --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Sarana & Prasarana</h6>
                <h1 class="display-6 mb-4">Lingkungan Kampus Kami</h1>
                <p class="text-secondary">Kami menyediakan berbagai fasilitas pendukung untuk kenyamanan belajar dan pembentukan karakter mahasiswa.</p>
            </div>

            <div class="row g-4">
                @php
                    $daftar_fasilitas = [
                        ['nama' => 'Kapel Ibadah', 'gambar' => 'kapel.jpeg'],
                        ['nama' => 'Ruang Kelas', 'gambar' => 'kelas.jpeg'],
                        ['nama' => 'Asrama Mahasiswa', 'gambar' => 'asrama-putra4.jpeg'],
                        ['nama' => 'Sarana Olahraga', 'gambar' => 'lapangan.jpeg'],
                        ['nama' => 'Perpustakaan', 'gambar' => 'perpus.jpeg'],
                        ['nama' => 'Kantin Kampus', 'gambar' => 'kantin.jpeg'],
                        ['nama' => 'Ruang Multimedia', 'gambar' => 'mulmed.jpeg'],
                        ['nama' => 'Three O Cafe', 'gambar' => 'cafe.jpeg'],
                    ];
                @endphp

                @foreach($daftar_fasilitas as $item)
                    {{-- Diubah ke col-lg-4 supaya lebih lebar (3 gambar per baris) --}}
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="facility-card rounded overflow-hidden shadow-sm bg-white h-100">
                            <div class="position-relative overflow-hidden">
                                {{-- FOTO UTAMA - Height ditingkatkan ke 300px --}}
                                <img class="img-fluid w-100" src="{{ asset('assets-fe/img/' . $item['gambar']) }}"
                                     alt="{{ $item['nama'] }}" style="height: 300px; object-fit: cover;">

                                {{-- Hover Effect Overlay --}}
                                <div class="facility-overlay">
                                    <a class="btn btn-lg-square btn-light rounded-circle m-1" href="{{ asset('assets-fe/img/' . $item['gambar']) }}" data-lightbox="facility">
                                        <i class="fa fa-eye text-primary"></i>
                                    </a>
                                </div>
                            </div>
                            <div class="p-4 text-center">
                                <h4 class="mb-3 text-primary">{{ $item['nama'] }}</h4>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- CSS CUSTOM --}}
    <style>
        .facility-card {
            transition: .5s;
            border: 1px solid #eee;
        }

        .facility-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.15) !important;
        }

        .facility-overlay {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            background: rgba(0, 107, 107, .7); /* Sedikit lebih gelap agar kontras */
            opacity: 0;
            transition: .5s;
        }

        .facility-card:hover .facility-overlay {
            opacity: 1;
        }

        .facility-card img {
            transition: .5s;
        }

        .facility-card:hover img {
            transform: scale(1.1);
        }
    </style>

@endsection
