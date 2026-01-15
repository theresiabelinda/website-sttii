@extends('frontend.layout.main')

@section('content')

    {{--
        PERUBAHAN DI HEADER:
        Saya mengganti style background color menjadi url gambar.
        - linear-gradient(...): Memberikan efek gelap transparan di atas gambar agar tulisan terbaca.
        - url('...'): Mengarah ke file gambar. Saya pakai carousel-1.jpg sebagai contoh.
    --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Sambutan Ketua</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Sambutan</li>
                </ol>
            </nav>
        </div>
    </div>

    <div class="container-xxl py-6">
        <div class="container">
            <div class="row">
                <div class="col-12 wow fadeInUp" data-wow-delay="0.1s">

                    {{-- Judul --}}
                    <h6 class="text-primary text-uppercase mb-2">Sambutan Ketua STTII Yogyakarta</h6>
                    <h1 class="display-6 mb-4">Pdt. Dr. Sumbut Yermianto, M.Th.</h1>

                    <div class="clearfix">

                        {{-- WRAPPER FOTO --}}
                        <div class="float-start me-4 mb-3 rounded shadow-sm overflow-hidden"
                             style="width: 40%; max-width: 450px; min-width: 300px;">

                            {{-- FOTO (ZOOMED) --}}
                            <img src="{{ asset('assets-fe/img/sumbut.jpg') }}"
                                 alt="Ketua STTII"
                                 class="w-100 h-auto"
                                 style="object-fit: cover; transform: scale(1.25); transform-origin: center 20%;">
                        </div>

                        {{-- TEKS SAMBUTAN (Justified & Font Lebih Besar) --}}

                        <p class="fs-5 mb-4" style="text-align: justify; line-height: 1.8;">
                            <i class="fa fa-quote-left text-primary me-3"></i>Selamat datang di website resmi Sekolah Tinggi Teologi Injili Indonesia (STTII) Yogyakarta!
                        </p>

                        <p class="fs-5" style="text-align: justify; line-height: 1.8;">
                            Sebagai Ketua STTII Yogyakarta, saya dengan bangga memperkenalkan keunggulan akademik, pelayanan, dan komitmen kami dalam melahirkan pemimpin rohani di Indonesia.
                        </p>

                        <p class="fs-5" style="text-align: justify; line-height: 1.8;">
                            <strong>Pertama-tama</strong>, STTII Yogyakarta memiliki keunggulan akademik yang kuat. Kurikulum kami didesain dengan hati-hati untuk memberikan pendidikan teologi yang komprehensif dan relevan. Kami menawarkan program-program studi yang mencakup berbagai aspek teologi, mulai dari teologi sistematis, teologi praktis, hermeneutika, etika, hingga bidang-bidang kajian khusus lainnya. Dosen-dosen kami adalah para ahli di bidangnya, yang memiliki pengalaman luas dan komitmen yang tinggi terhadap pendidikan teologi yang berkualitas.
                        </p>

                        <p class="fs-5" style="text-align: justify; line-height: 1.8;">
                            <strong>Kedua</strong>, pelayanan merupakan inti dari identitas STTII Yogyakarta. Kami percaya bahwa teologi harus diterjemahkan menjadi tindakan nyata di dalam masyarakat. Oleh karena itu, kami mendorong para mahasiswa kami untuk terlibat dalam pelayanan sosial, misi, dan gereja, baik di dalam maupun di luar kampus.
                        </p>

                        <p class="fs-5" style="text-align: justify; line-height: 1.8;">
                            <strong>Ketiga</strong>, STTII Yogyakarta memiliki komitmen yang kuat dalam melahirkan pemimpin rohani di Indonesia. Kami percaya bahwa gereja dan masyarakat membutuhkan pemimpin yang berakar pada nilai-nilai kristiani yang kokoh, memiliki pemahaman yang mendalam tentang teologi, serta keterampilan kepemimpinan yang efektif.
                        </p>

                        <p class="fs-5 mb-4" style="text-align: justify; line-height: 1.8;">
                            Terima kasih atas kunjungan Anda di website STTII Yogyakarta. Jika Anda memiliki pertanyaan lebih lanjut atau ingin mempelajari lebih lanjut tentang kami, jangan ragu untuk menghubungi kami melalui informasi kontak yang tersedia.
                        </p>

                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
