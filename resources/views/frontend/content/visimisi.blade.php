@extends('frontend.layout.main')

@section('content')

    {{-- HEADER --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Visi, Misi & Strategi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Tentang Kami</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Visi Misi</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- BAGIAN VISI --}}
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
                <div class="d-inline-block btn-square bg-primary text-white rounded-circle mb-4" style="width: 80px; height: 80px;">
                    <i class="fa fa-eye fa-2x"></i>
                </div>
                <h6 class="text-primary text-uppercase mb-2" style="letter-spacing: 3px;">Visi STTII Yogyakarta:</h6>
                <h2 class="display-6 mb-4 px-3" style="font-style: italic; font-weight: 600;">
                    "Menjadi lembaga pendidikan teologi injili yang unggul dalam pelaksanaan Amanat Agung, serta penelitian teologi di Indonesia."
                </h2>
            </div>
        </div>
    </div>

    {{-- BAGIAN MISI --}}
    <div class="container-xxl py-5 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s">
                <h2 class="display-6 mb-5">Misi STTII Yogyakarta:</h2>
            </div>
            <div class="row g-4">
                @php
                    $misi = [
                        ['a', 'Menyelenggarakan pendidikan teologi Injili yang unggul dalam aspek akademis, transformatis, dan praktis guna melahirkan pemimpin rohani yang berkarakter Kristus, berintegritas, dan memiliki kapasitas kepemimpinan global.'],
                        ['b', 'Meningkatkan penelitian teologi yang bermutu internasional, berbasis Injili dan relevan dengan konteks Indonesia, untuk memperkaya wawasan ilmu teologi, serta menjawab tantangan gereja dan masyarakat.'],
                        ['c', 'Memobilisasi gereja dalam pelaksanaan Amanat Agung melalui misi perintisan jemaat, penguatan gereja lokal, dan pelayanan lintas budaya, sehingga Injil Kristus berdampak nyata bagi bangsa-bangsa.'],
                        ['d', 'Menjalin kolaborasi strategis dengan gereja-gereja, lembaga pendidikan dan misi serta masyarakat luas dalam mengemban mandat kultural dan spiritual.']
                    ];
                @endphp
                @foreach($misi as $index => $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="{{ 0.1 * ($index + 1) }}s">
                        <div class="h-100 bg-white shadow-sm p-4 rounded border-bottom border-primary border-4 transition-hover">
                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-sm-square bg-primary text-white rounded-circle me-3">
                                    <span class="fw-bold">{{ strtoupper($item[0]) }}</span>
                                </div>
                            </div>
                            <p class="mb-0 text-dark" style="text-align: justify; font-size: 0.95rem;">{{ $item[1] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    {{-- TUJUAN & STRATEGI --}}
    <div class="container-xxl py-6">
        <div class="container">
            <div class="row g-5">
                {{-- TUJUAN --}}
                <div class="col-lg-5 wow fadeInLeft" data-wow-delay="0.1s">
                    <h2 class="display-6 mb-4">Tujuan:</h2>
                    <div class="p-4 bg-primary rounded-3 text-white">
                        <ul class="list-unstyled mb-0">
                            @php
                                $tujuan = [
                                    ['a', 'Menghasilkan lulusan yang unggul dengan wawasan teologi Injili, berkarakter Kristus dan siap menjadi pemimpin yang berskala global.'],
                                    ['b', 'Menghasilkan penelitian bertaraf internasional yang berkontribusi bagi pengembangan keilmuwan teologi Injili, serta menjadi rujukan terhadap pemecahan masalah-masalah aktual yang dihadapi oleh gereja dan masyarakat di Indonesia.'],
                                    ['c', 'Meningkatkan kesadaran dan keterlibatan gereja-gereja serta lembaga pendidikan dan misi dalam pelaksanaan Amanat Agung, sehingga menghasilkan kuantitas perintisan jemaat-jemaat baru yang signifikan.']
                                ];
                            @endphp
                            @foreach($tujuan as $t)
                                <li class="mb-4 d-flex align-items-start border-bottom border-light pb-3 last-child-no-border">
                                    <span class="fw-bold me-3">{{ $t[0] }}.</span>
                                    <span>{{ $t[1] }}</span>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>

                {{-- STRATEGI --}}
                <div class="col-lg-7 wow fadeInRight" data-wow-delay="0.3s">
                    <h2 class="display-6 mb-4">Strategi:</h2>
                    <div class="row g-3">
                        @php
                            $strategi = [
                                ['a', 'Mendesain kurikulum berbasis masyarakat era 5.0 yang mengintegrasikan antara aspek teologi injili, pembentukan karakter dan skill kepemimpinan (servant leadership) dalam penggenapan Amanat Agung.'],
                                ['b', 'Menciptakan ekosistem riset teologi injili yang kolaboratif, berstandar internasional melalui penguatan metodologi mutakhir, pendanaan yang optimal serta publikasi ilmiah yang mendukung perumusan strategi dan perintisan gereja.'],
                                ['c', 'Meningkatkan kualitas dan kapasitas dosen yang berintegritas dalam melakukan riset dan publikasi.'],
                                ['d', 'Menyediakan insfrastruktur riset yang mendukung tercapaianya penelitian yang bertaraf internasional.'],
                                ['e', 'Mengupgrade wawasan mengenai strategi dan metode perintisan jemaat termutakhir melalui seminar, workshop, lokakarya misi yang berfokus pada multiplikasi jemaat-jemaat baru lintas budaya di masyarakat era 5.0.'],
                                ['f', 'Melakukan kerjasama dengan berbagai mitra (Sinode, Lembaga Misi, Lembaga Pendidikan Tinggi, Gereja Lokal) baik dalam dan luar negeri untuk menghasilkan kuantitas perintisan jemaat-jemaat baru yang signifikan.']
                            ];
                        @endphp
                        @foreach($strategi as $s)
                            <div class="col-12">
                                <div class="d-flex align-items-center bg-light p-3 rounded shadow-sm border-start border-primary border-4 h-100">
                                    <div class="flex-shrink-0 btn-sm-square bg-white text-primary rounded-circle shadow-sm me-3 font-weight-bold">
                                        {{ $s[0] }}
                                    </div>
                                    <span class="text-dark small">{{ $s[1] }}</span>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .transition-hover {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .transition-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 1rem 3rem rgba(0,0,0,.1) !important;
        }
        .last-child-no-border:last-child {
            border-bottom: none !important;
            padding-bottom: 0 !important;
            margin-bottom: 0 !important;
        }
    </style>

@endsection
