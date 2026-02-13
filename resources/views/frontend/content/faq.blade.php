@extends('frontend.layout.main')

@section('content')
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-8">
                    <div class="mb-4">
                        <h2 class="display-6 mb-2">Frequently Asked Questions</h2>
                        <div class="bg-primary mb-4" style="width: 60px; height: 3px;"></div>
                    </div>

                    <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                        <li class="nav-item me-2" role="presentation">
                            <button class="nav-link active fw-bold border" id="pills-s1-tab" data-bs-toggle="pill" data-bs-target="#pills-s1" type="button" role="tab">Pendaftaran S1</button>
                        </li>
                        <li class="nav-item me-2" role="presentation">
                            <button class="nav-link fw-bold border" id="pills-s2-tab" data-bs-toggle="pill" data-bs-target="#pills-s2" type="button" role="tab">Pendaftaran S2</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bold border" id="pills-s3-tab" data-bs-toggle="pill" data-bs-target="#pills-s3" type="button" role="tab">Pendaftaran S3</button>
                        </li>
                    </ul>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-s1" role="tabpanel">
                            <div class="accordion" id="accordionS1">
                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS1-1">
                                            <i class="far fa-question-circle me-3 text-primary"></i> Periode Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS1-1" class="accordion-collapse collapse" data-bs-parent="#accordionS1">
                                        <div class="accordion-body">
                                            <strong>Periode PMB S1 Teologi Tahun akademik 2026/2027:</strong><br>
                                            Edisi Khusus: November 2025 - Januari 2026<br>
                                            Gelombang I: Februari – April 2026<br>
                                            Gelombang II: Mei – Juli 2026
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS1-2">
                                            <i class="far fa-image me-3 text-primary"></i> Konsentrasi Sarjana Teologi (S1)
                                        </button>
                                    </h2>
                                    <div id="colS1-2" class="accordion-collapse collapse" data-bs-parent="#accordionS1">
                                        <div class="accordion-body text-center">
                                            <img src="{{ asset('assets-fe/img/konsentrasi-s1.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Konsentrasi S1">
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS1-3">
                                            <i class="fas fa-user-check me-3 text-primary"></i> Persyaratan Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS1-3" class="accordion-collapse collapse" data-bs-parent="#accordionS1">
                                        <div class="accordion-body">
                                            <strong>Dokumen Pendaftaran:</strong><br>
                                            1. Scan Ijazah SD, SMP, SMA(sederajat)<br>
                                            2. Scan KTP, Akta Lahir dan Kartu Keluarga (KK)<br>
                                            3. Scan surat baptis/sidi<br>
                                            4. Scan foto berwarna dengan kemeja putih, berdasi dan berlatar belakang warna biru<br>
                                            5. Scan surat rekomendasi pendeta/gembala sidang<br>
                                            6. Scan surat kesaksian pribadi mengenai pengalaman lahir baru, pertumbuhan rohani & keterlibatan pelayanan<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS1-4">
                                            <i class="fas fa-route me-3 text-primary"></i> Alur Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS1-4" class="accordion-collapse collapse" data-bs-parent="#accordionS1">
                                        <div class="accordion-body">
                                            <strong>Alur Pendaftaran:</strong><br>
                                            1. Menghubungi sekretariat di nomor:<br>
                                            <a href="https://wa.me/6281326882170" target="_blank" class="text-success fw-bold text-decoration-none">
                                                <i class="fab fa-whatsapp"></i> 0813-2688-2170
                                            </a>
                                            atau
                                            <a href="https://wa.me/6285741322565" target="_blank" class="text-success fw-bold text-decoration-none">
                                                <i class="fab fa-whatsapp"></i> 0857-4132-2565
                                            </a><br>
                                            2. Transfer uang pendaftaran ke rekening BNI<br>
                                            <strong>Yayasan Iman Indonesia (STTII) 003-044-7146</strong><br>
                                            3. Mengisi form dan upload dokumen persyaratan ke<br>
                                            <a href="https://s.id/sttiiykpenmaruS1" target="_blank" class="text-primary text-decoration-underline">
                                                https://s.id/sttiiykpenmaruS1
                                            </a><br>
                                            4. Mengikuti tes wawancara dan tertulis sesuai jadwal yang diinformasikan<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS1-5">
                                            <i class="fas fa-receipt me-3 text-primary"></i> Biaya Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS1-5" class="accordion-collapse collapse" data-bs-parent="#accordionS1">
                                        <div class="accordion-body">
                                            <strong>Biaya Pendaftaran:</strong><br>
                                            Edisi Khusus: Rp. 250.000<br>
                                            Gelombang 1: Rp. 300.000 <br>
                                            Gelombang 2: Rp. 350.000<br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

{{--                    Dropdown FAQ untuk S2--}}
                        <div class="tab-pane fade" id="pills-s2" role="tabpanel">
                            <div class="accordion" id="accordionS2">
                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS2-1">
                                            <i class="far fa-question-circle me-3 text-primary"></i> Periode Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS2-1" class="accordion-collapse collapse" data-bs-parent="#accordionS2">
                                        <div class="accordion-body">
                                            <strong>Periode PMB S2 Teologi Tahun akademik 2026/2027:</strong><br>
                                            Edisi Khusus: November 2025 - Januari 2026<br>
                                            Gelombang I: Februari – April 2026<br>
                                            Gelombang II: Mei – Juli 2026
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS2-2">
                                            <i class="far fa-image me-3 text-primary"></i> Konsentrasi Magister Teologi (S2)
                                        </button>
                                    </h2>
                                    <div id="colS2-2" class="accordion-collapse collapse" data-bs-parent="#accordionS2">
                                        <div class="accordion-body text-center">
                                            <img src="{{ asset('assets-fe/img/konsentrasi-s2.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Konsentrasi S2">
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS2-3">
                                            <i class="fas fa-user-check me-3 text-primary"></i> Persyaratan Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS2-3" class="accordion-collapse collapse" data-bs-parent="#accordionS2">
                                        <div class="accordion-body">
                                            <strong>Dokumen Pendaftaran:</strong><br>
                                            1. Scan Ijazah SD, SMP, SMA(sederajat) dan S1<br>
                                            2. Scan Transkrip Nilai S1 (Minimal IPK 3.00)<br>
                                            3. Scan KTP, Akta Lahir dan Kartu Keluarga (KK)<br>
                                            4. Scan surat baptis/sidi<br>
                                            5. Scan surat keterangan sehat dari dokter<br>
                                            6. Scan surat nikah (jika sudah menikah)<br>
                                            7. Scan surat rekomendasi pimpinan gereja/gembala sidang<br>
                                            8. Scan sertifikat TOEFL (minimal skor 450)<br>
                                            9. Scan surat kesaksian pertobatan dan panggilan kuliah<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS2-4">
                                            <i class="fas fa-route me-3 text-primary"></i> Alur Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS2-4" class="accordion-collapse collapse" data-bs-parent="#accordionS2">
                                        <div class="accordion-body">
                                            <strong>Bagaimana alur pendaftaran di prodi Magister Teologi (S2)?</strong><br>
                                            1. Menghubungi sekretariat di nomor:<br>
                                            <a href="https://wa.me/6281333364172" target="_blank" class="text-success fw-bold text-decoration-none">
                                                <i class="fab fa-whatsapp"></i> 0813-3336-4172
                                            </a>
                                            atau
                                            <a href="https://wa.me/6281382833288" target="_blank" class="text-success fw-bold text-decoration-none">
                                                <i class="fab fa-whatsapp"></i> 0813-8283-3288
                                            </a><br>
                                            2. Transfer uang pendaftaran ke rekening BNI<br>
                                            <strong>Yayasan Iman Indonesia (QQ STTII) 1370001050109</strong><br>
                                            3. Mengisi form pendaftaran & mengirim dokumen-dokumen pendaftaran ke sekretariat prodi S2<br>
                                            4. Mengikuti tes wawancara dan tertulis sesuai jadwal yang diinformasikan<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS2-5">
                                            <i class="fas fa-receipt me-3 text-primary"></i> Biaya Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS2-5" class="accordion-collapse collapse" data-bs-parent="#accordionS2">
                                        <div class="accordion-body">
                                            <strong>Biaya Pendaftaran:</strong><br>
                                            Edisi Khusus: Rp. 400.000<br>
                                            Gelombang 1: Rp. 500.000 <br>
                                            Gelombang 2: Rp. 700.000<br>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

{{--                        Dropdown FAQ untuk S3--}}
                        <div class="tab-pane fade" id="pills-s3" role="tabpanel">
                            <div class="accordion" id="accordionS3">
                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS3-1">
                                            <i class="far fa-question-circle me-3 text-primary"></i> Periode Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS3-1" class="accordion-collapse collapse" data-bs-parent="#accordionS3">
                                        <div class="accordion-body">
                                            <strong>Periode PMB S3 Teologi Tahun akademik 2026/2027:</strong><br>
                                            Edisi Khusus: November 2025 - Januari 2026<br>
                                            Gelombang I: Februari – April 2026<br>
                                            Gelombang II: Mei – Juli 2026
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS3-2">
                                            <i class="far fa-image me-3 text-primary"></i> Konsentrasi Doktor Teologi (S3)
                                        </button>
                                    </h2>
                                    <div id="colS3-2" class="accordion-collapse collapse" data-bs-parent="#accordionS3">
                                        <div class="accordion-body text-center">
                                            <img src="{{ asset('assets-fe/img/konsentrasi-s3.jpeg') }}" class="img-fluid rounded shadow-sm" alt="Konsentrasi S3">
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS3-3">
                                            <i class="fas fa-user-check me-3 text-primary"></i> Persyaratan Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS3-3" class="accordion-collapse collapse" data-bs-parent="#accordionS3">
                                        <div class="accordion-body">
                                            <strong>Dokumen Pendaftaran:</strong><br>
                                            1. Scan Ijazah S1 & S2<br>
                                            2. Scan Transkrip Nilai S1 & S2 (Minimal IPK 3.00)<br>
                                            3. Scan KTP, Akta Lahir dan Kartu Keluarga (KK)<br>
                                            4. Scan surat baptis/sidi<br>
                                            5. Scan surat keterangan sehat dari dokter<br>
                                            6. Scan surat nikah (jika sudah menikah)<br>
                                            7. Scan surat rekomendasi dari 3 orang pimpinan gereja/gembala sidang<br>
                                            8. Scan sertifikat TOEFL (minimal skor 450)<br>
                                            9. Scan surat kesaksian priadi mengenai pengalaman lahir baru,
                                                pertumbuhan rohani & keterlibatan pelayanan<br>
                                            10. Scan foto berwarna<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS3-4">
                                            <i class="fas fa-route me-3 text-primary"></i> Alur Pendaftaran
                                        </button>
                                    </h2>
                                    <div id="colS3-4" class="accordion-collapse collapse" data-bs-parent="#accordionS3">
                                        <div class="accordion-body">
                                            <strong>Bagaimana alur pendaftaran di prodi Doktor Teologi (S3)?</strong><br>
                                            1. Menghubungi sekretariat di nomor:<br>
                                            <a href="https://wa.me/6281390320691" target="_blank" class="text-success fw-bold text-decoration-none">
                                                <i class="fab fa-whatsapp"></i> 0813-9032-0691
                                            </a><br>
                                            2. Transfer uang pendaftaran ke rekening Mandiri<br>
                                            <strong>Yayasan Iman Indonesia (QQ Pasca Sarjana) 1370002055867</strong><br>
                                            3. Mengisi form dan upload dokumen persyaratan ke<br>
                                            <a href="https://s.id/sttiiykpenmaruS3" target="_blank" class="text-primary text-decoration-underline">
                                                https://s.id/sttiiykpenmaruS3
                                            </a><br>
                                            4. Mengikuti tes wawancara dan tertulis sesuai jadwal yang diinformasikan<br>
                                        </div>
                                    </div>
                                </div>

                                <div class="accordion-item mb-3 border-0 shadow-sm">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button collapsed fw-bold text-dark" type="button" data-bs-toggle="collapse" data-bs-target="#colS3-5">
                                            <i class="fas fa-receipt me-3 text-primary"></i> Rincian Biaya Studi S3
                                        </button>
                                    </h2>
                                    <div id="colS3-5" class="accordion-collapse collapse" data-bs-parent="#accordionS3">
                                        <div class="accordion-body">
                                            <div class="mb-4 p-3 bg-light rounded border-start border-4 border-primary">
                                                <h6 class="fw-bold mb-2">Biaya Pendaftaran:</h6>
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Edisi Khusus</span>
                                                    <span>Rp 400.000</span>
                                                </div>
                                                <div class="d-flex justify-content-between mb-1">
                                                    <span>Gelombang 1</span>
                                                    <span>Rp 500.000</span>
                                                </div>
                                                <div class="d-flex justify-content-between">
                                                    <span>Gelombang 2</span>
                                                    <span>Rp 700.000</span>
                                                </div>
                                            </div>

                                            <div class="table-responsive">
                                                <table class="table table-borderless align-middle">
                                                    <tbody>
                                                    <tr>
                                                        <td class="fw-bold py-3 text-uppercase">Pendaftaran</td>
                                                        <td class="text-end fw-bold py-3">Rp. 1.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold py-3 text-uppercase">Sarana Fasilitas</td>
                                                        <td class="text-end fw-bold py-3">Rp. 2.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold pt-3 pb-1 text-uppercase text-end pe-5">SPP</td>
                                                        <td class="text-end fw-bold pt-3 pb-1">Rp. 45.000.000</td>
                                                    </tr>
                                                    <tr class="text-muted small">
                                                        <td class="text-end pe-5 py-0">Angsuran 1 : Rp. 11.250.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr class="text-muted small">
                                                        <td class="text-end pe-5 py-0">Angsuran 2 : Rp. 11.250.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr class="text-muted small">
                                                        <td class="text-end pe-5 py-0">Angsuran 3 : Rp. 11.250.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr class="text-muted small border-bottom">
                                                        <td class="text-end pe-5 pt-0 pb-3">Angsuran 4 : Rp. 11.250.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold py-3 text-uppercase">Ujian Komprehensif</td>
                                                        <td class="text-end fw-bold py-3">Rp. 5.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold pt-3 pb-0 text-uppercase">Proposal Disertasi</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold pt-0 pb-1 text-uppercase">Bimbingan Disertasi</td>
                                                        <td class="text-end fw-bold pt-0 pb-1 align-bottom">Rp. 7.000.000</td>
                                                    </tr>
                                                    <tr class="text-muted small">
                                                        <td class="text-end pe-5 py-0">Angsuran 1 : Rp. 3.500.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr class="text-muted small border-bottom">
                                                        <td class="text-end pe-5 pt-0 pb-3">Angsuran 2 : Rp. 3.500.000</td>
                                                        <td></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold py-3 text-uppercase">Ujian Disertasi</td>
                                                        <td class="text-end fw-bold py-3">Rp. 6.000.000</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="fw-bold py-3 text-uppercase">Wisuda & Kelengkapan</td>
                                                        <td class="text-end fw-bold py-3 border-bottom border-dark">Rp. 9.000.000</td>
                                                    </tr>
                                                    <tr class="fs-4">
                                                        <td class="fw-bold pt-4 text-uppercase">TOTAL</td>
                                                        <td class="text-end fw-bold pt-4">Rp. 75.000.000</td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sticky-top" style="top: 100px; z-index: 10;">
                        <div class="bg-light p-4 rounded shadow-sm border-top border-5 border-primary">
                            <h5 class="mb-3">Informasi Tambahan</h5>
                            <p class="small text-muted mb-4">
                                Temukan berbagai jawaban seputar Penerimaan Mahasiswa Baru STTII Yogyakarta. Jika masih bingung, jangan ragu untuk menghubungi kami.
                            </p>

                            <div class="d-flex align-items-center mb-3">
                                <div class="btn-sm-square bg-white text-primary rounded-circle me-3 shadow-sm">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <span class="small">humas@sttii-yogyakarta.ac.id</span>
                            </div>

                            <div class="d-flex align-items-center mb-4">
                                <div class="btn-sm-square bg-white text-primary rounded-circle me-3 shadow-sm">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <span class="small">(0274)496257</span>
                            </div>

                            <h5 class="mb-3 border-bottom pb-2">Jalur Pendaftaran</h5>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action bg-transparent px-0 border-0">
                                    <i class="fa fa-check-circle text-primary me-2"></i> Seleksi Berkas & Wawancara
                                </a>
                                <a href="#" class="list-group-item list-group-item-action bg-transparent px-0 border-0">
                                    <i class="fa fa-check-circle text-primary me-2"></i> Seleksi Tes Potensi Akademik
                                </a>
                                <a href="#" class="list-group-item list-group-item-action bg-transparent px-0 border-0">
                                    <i class="fa fa-check-circle text-primary me-2"></i> Seleksi Beasiswa
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .nav-pills .nav-link { color: #333; background-color: #fff; transition: 0.3s; }
        .nav-pills .nav-link.active { background-color: #0d6efd; color: white; }
        .accordion-button:focus { box-shadow: none; border-color: rgba(0,0,0,.125); }
        .accordion-button:not(.collapsed) { color: #0d6efd; background-color: #f8f9fa; }

        /* Memastikan sticky bekerja dengan baik di mobile jika diperlukan */
        @media (max-width: 991px) {
            .sticky-top { position: relative !important; top: 0 !important; }
        }
    </style>
@endsection
