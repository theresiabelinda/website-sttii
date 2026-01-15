@extends('frontend.layout.main')

@section('content')

    {{-- HEADER PAGE --}}
    <div class="container-fluid page-header py-6 my-6 mt-0 wow fadeIn" data-wow-delay="0.1s"
         style="background: linear-gradient(rgba(0, 0, 0, .75), rgba(0, 0, 0, .75)), url('{{ asset('assets/assets/img/foto-sttii.jpg') }}') center center no-repeat; background-size: cover;">
        <div class="container text-center">
            <h1 class="display-4 text-white animated slideInDown mb-4">Konsentrasi Studi</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{ route('home.index') }}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Akademik</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Konsentrasi S2</li>
                </ol>
            </nav>
        </div>
    </div>

    {{-- CONTENT SECTION --}}
    <div class="container-xxl py-6">
        <div class="container">

            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h6 class="text-primary text-uppercase mb-2">Spesialisasi Akademik</h6>
                <h1 class="display-6 mb-4">4 Konsentrasi Magister Teologi</h1>
                <p class="text-secondary">Program Magister kami menawarkan pendalaman khusus untuk menjawab kebutuhan pelayanan spesifik di gereja dan masyarakat.</p>
            </div>

            <div class="row g-5">
                {{-- TAB NAVIGATION (Kiri di Desktop, Atas di Mobile) --}}
                <div class="col-lg-3 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">

                        <button class="nav-link active text-start py-3 mb-2" id="v-pills-biblical-tab" data-bs-toggle="pill" data-bs-target="#v-pills-biblical" type="button" role="tab" aria-controls="v-pills-biblical" aria-selected="true">
                            <i class="fa fa-book-open me-2"></i> Biblical Studies
                        </button>

                        <button class="nav-link text-start py-3 mb-2" id="v-pills-pastoral-tab" data-bs-toggle="pill" data-bs-target="#v-pills-pastoral" type="button" role="tab" aria-controls="v-pills-pastoral" aria-selected="false">
                            <i class="fa fa-hands-helping me-2"></i> Pastoral Counseling
                        </button>

                        <button class="nav-link text-start py-3 mb-2" id="v-pills-mission-tab" data-bs-toggle="pill" data-bs-target="#v-pills-mission" type="button" role="tab" aria-controls="v-pills-mission" aria-selected="false">
                            <i class="fa fa-globe-asia me-2"></i> Mission & Dev.
                        </button>

                        <button class="nav-link text-start py-3" id="v-pills-expository-tab" data-bs-toggle="pill" data-bs-target="#v-pills-expository" type="button" role="tab" aria-controls="v-pills-expository" aria-selected="false">
                            <i class="fa fa-microphone-alt me-2"></i> Expository Preaching
                        </button>

                    </div>
                </div>

                {{-- TAB CONTENT (Kanan) --}}
                <div class="col-lg-9 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="tab-content" id="v-pills-tabContent">

                        {{-- 1. Biblical Studies --}}
                        <div class="tab-pane fade show active" id="v-pills-biblical" role="tabpanel" aria-labelledby="v-pills-biblical-tab">
                            <div class="bg-light p-4 rounded shadow-sm border-top border-5 border-primary">
                                <h3 class="mb-3 text-dark">Konsentrasi Biblical Studies</h3>
                                <p class="mb-4 text-muted">Program akademik yang dirancang untuk mempelajari, menganalisis, dan memahami Alkitab secara mendalam, menggabungkan pendekatan akademik dan teologis.</p>

                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <h5 class="text-primary"><i class="fa fa-info-circle me-2"></i>Fokus Studi</h5>
                                        <p>Mahasiswa akan terlibat dalam studi intensif tentang bahasa asli (Ibrani & Yunani), sejarah, budaya, serta metode kritis dan hermeneutika untuk menafsirkan teks Alkitab dengan cermat.</p>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-list-alt me-2"></i>Mata Kuliah Inti</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-check text-success me-2"></i>Themes in Old/New Testament Theology</li>
                                            <li><i class="fa fa-check text-success me-2"></i>OT & NT Exegetical Studies</li>
                                            <li><i class="fa fa-check text-success me-2"></i>Biblical Genre & Hermeneutics</li>
                                            <li><i class="fa fa-check text-success me-2"></i>Pengantar Bahasa Ibrani & Yunani</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-user-graduate me-2"></i>Profil Lulusan</h5>
                                        <p class="small bg-white p-3 rounded border">
                                            Lulusan siap menjadi pendeta, pengajar teologi, peneliti, atau penulis dengan pemahaman mendalam tentang teks Alkitab untuk diterapkan dalam konteks pelayanan.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 2. Pastoral Counseling --}}
                        <div class="tab-pane fade" id="v-pills-pastoral" role="tabpanel" aria-labelledby="v-pills-pastoral-tab">
                            <div class="bg-light p-4 rounded shadow-sm border-top border-5 border-primary">
                                <h3 class="mb-3 text-dark">Konsentrasi Pastoral Counseling</h3>
                                <p class="mb-4 text-muted">Melatih individu memadukan prinsip teologi Kristen dengan praktik konseling profesional untuk pelayanan gerejawi.</p>

                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <h5 class="text-primary"><i class="fa fa-info-circle me-2"></i>Fokus Studi</h5>
                                        <p>Mempelajari teori konseling berlandaskan Alkitab, psikologi, etika konseling, serta dinamika hubungan konselor-klien. Termasuk praktik konseling terpandu dan supervisi.</p>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-list-alt me-2"></i>Mata Kuliah Inti</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-check text-success me-2"></i>Biblical Counseling</li>
                                            <li><i class="fa fa-check text-success me-2"></i>General & Abnormal Psychology</li>
                                            <li><i class="fa fa-check text-success me-2"></i>Family Counseling & Parenting</li>
                                            <li><i class="fa fa-check text-success me-2"></i>Crisis & Clinical Pastoral Counseling</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-user-graduate me-2"></i>Profil Lulusan</h5>
                                        <p class="small bg-white p-3 rounded border">
                                            Lulusan memiliki keterampilan memberikan dukungan emosional dan bimbingan spiritual. Siap bekerja sebagai konselor pastoral, pengajar, atau pemimpin pelayanan gereja.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 3. Mission & Church Development --}}
                        <div class="tab-pane fade" id="v-pills-mission" role="tabpanel" aria-labelledby="v-pills-mission-tab">
                            <div class="bg-light p-4 rounded shadow-sm border-top border-5 border-primary">
                                <h3 class="mb-3 text-dark">Konsentrasi Mission & Church Development</h3>
                                <p class="mb-4 text-muted">Mempersiapkan pemimpin untuk pelayanan misi dan pengembangan gereja di dunia yang terus berubah dengan strategi yang relevan.</p>

                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <h5 class="text-primary"><i class="fa fa-info-circle me-2"></i>Fokus Studi</h5>
                                        <p>Mencakup teologi misi, strategi pengembangan gereja, analisis konteks sosial budaya, kepemimpinan, serta pemberdayaan komunitas.</p>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-list-alt me-2"></i>Mata Kuliah Inti</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-check text-success me-2"></i>History and Philosophy of Mission</li>
                                            <li><i class="fa fa-check text-success me-2"></i>Leadership and Church Multiplication</li>
                                            <li><i class="fa fa-check text-success me-2"></i>Islamology & Mission Strategy</li>
                                            <li><i class="fa fa-check text-success me-2"></i>Cross Culture Anthropology</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-user-graduate me-2"></i>Profil Lulusan</h5>
                                        <p class="small bg-white p-3 rounded border">
                                            Lulusan mampu merancang strategi misi dan memimpin proyek pengembangan gereja. Siap menjadi pemimpin misi, konsultan gereja, atau pengajar teologi misi.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- 4. Expository Preaching --}}
                        <div class="tab-pane fade" id="v-pills-expository" role="tabpanel" aria-labelledby="v-pills-expository-tab">
                            <div class="bg-light p-4 rounded shadow-sm border-top border-5 border-primary">
                                <h3 class="mb-3 text-dark">Konsentrasi Expository Preaching</h3>
                                <p class="mb-4 text-muted">Bekerja sama dengan lembaga internasional <strong>TMAI (The Master's Academy International)</strong> di bawah naungan John MacArthur.</p>

                                <div class="row g-4">
                                    <div class="col-md-12">
                                        <h5 class="text-primary"><i class="fa fa-info-circle me-2"></i>Fokus Studi</h5>
                                        <p>Pengembangan keterampilan menyusun dan menyampaikan khotbah ekspositori yang bertanggung jawab secara eksegetis dan relevan untuk konteks jemaat masa kini.</p>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-list-alt me-2"></i>Mata Kuliah Inti</h5>
                                        <ul class="list-unstyled">
                                            <li><i class="fa fa-check text-success me-2"></i>Expository Preaching Methods & Technique</li>
                                            <li><i class="fa fa-check text-success me-2"></i>The Art of Public Communication</li>
                                            <li><i class="fa fa-check text-success me-2"></i>Creative Preaching in the Digital Age</li>
                                        </ul>
                                    </div>

                                    <div class="col-md-6">
                                        <h5 class="text-primary"><i class="fa fa-user-graduate me-2"></i>Profil Lulusan</h5>
                                        <p class="small bg-white p-3 rounded border">
                                            Lulusan memiliki kemampuan menyusun khotbah yang mendalam dan Alkitabiah. Siap melayani sebagai pengkhotbah, gembala sidang, atau pengajar homiletika.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            {{-- Tombol Daftar --}}
            <div class="row mt-5 wow fadeInUp" data-wow-delay="0.5s">
                <div class="col-12 text-center">
                    <a href="#" class="btn btn-primary py-3 px-5 rounded-pill">Daftar Program Magister</a>
                </div>
            </div>

        </div>
    </div>

    {{-- Styling Tambahan untuk Tab Navigasi --}}
    <style>
        .nav-pills .nav-link {
            background-color: #fff;
            color: #555;
            margin-bottom: 8px;
            border-radius: 8px;
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075);
            transition: all 0.3s ease;
        }

        .nav-pills .nav-link:hover {
            background-color: #f8f9fa;
            transform: translateX(5px);
            color: var(--bs-primary);
        }

        .nav-pills .nav-link.active {
            background-color: var(--bs-primary); /* Warna Primary/Emas/Biru */
            color: #fff;
            box-shadow: 0 .5rem 1rem rgba(0,0,0,.15);
        }
    </style>

@endsection
