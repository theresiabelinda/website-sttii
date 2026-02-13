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

    {{-- BAGIAN DOSEN PRODI --}}
    <div class="container-xxl py-6 bg-light">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
                <h6 class="text-primary text-uppercase mb-2">Tenaga Pengajar</h6>
                <h1 class="display-6 mb-4">Dosen STTII Yogyakarta</h1>
            </div>

            <div class="row g-4">
                @foreach($dosen as $item)
                    <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="team-item position-relative bg-white shadow-sm rounded overflow-hidden custom-card"
                             style="cursor: pointer;"
                             onclick="showDosenDetail({{ $item->toJson() }})">


                            <div class="position-relative overflow-hidden img-container bg-light d-flex align-items-center justify-content-center" style="height: 300px;">
                                @if(!empty($item->foto))
                                    <img class="img-fluid w-100 h-100"
                                         src="{{ asset('assets-fe/img/' . $item->foto) }}"
                                         alt="{{ $item->nama_lengkap }}"
                                         style="object-fit: cover;">
                                @else
                                    <div class="text-secondary text-center">
                                        <i class="fas fa-user fa-5x"></i>
                                        <p class="small mt-2">No Photo</p>
                                    </div>
                                @endif
                            </div>
                            <div class="text-center p-4">
                                <h5 class="mt-2 mb-1">{{ $item->nama_lengkap }}</h5>
                                <span class="badge bg-primary">Dosen</span>
                            </div>

                            <div class="mt-3 pt-2 border-top">
                                <small class="text-primary fw-bold" style="letter-spacing: 1px;">
                                    LIHAT PROFIL
                                </small>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            {{-- MODAL DETAIL --}}
            <div class="modal fade" id="dosenModal" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-lg modal-dialog-centered modal-dialog-scrollable">
                    <div class="modal-content">
                        <div class="modal-header border-0">
                            <h5 class="modal-title">Profil Lengkap Dosen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body p-4">
                            <div class="row">
                                <div class="col-md-4 text-center">
                                    <img id="modal-foto" src="" class="img-fluid rounded shadow-sm mb-3" alt="">
                                    <div class="d-flex justify-content-center gap-2">
                                        <a id="modal-scholar" href="#" target="_blank" class="btn btn-sm btn-outline-primary">Scholar</a>
                                        <a id="modal-sinta" href="#" target="_blank" class="btn btn-sm btn-outline-danger">Sinta</a>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <h3 id="modal-nama" class="text-primary mb-1"></h3>
                                    <p id="modal-ids" class="small text-muted mb-3"></p>

                                    <div class="row mb-3">
                                        <div class="col-sm-4 fw-bold">Email</div>
                                        <div id="modal-email" class="col-sm-8"></div>
                                        <div class="col-sm-4 fw-bold">Pendidikan</div>
                                        <div id="modal-pendidikan" class="col-sm-8 small"></div>
                                    </div>

                                    <hr>
                                    <h6 class="text-uppercase text-primary mb-3">Daftar Bimbingan Disertasi</h6>
                                    <div class="table-responsive">
                                        <table class="table table-sm table-hover">
                                            <thead>
                                            <tr class="small">
                                                <th>Mahasiswa</th>
                                                <th>Judul Disertasi</th>
                                                <th>Tahun Akademik</th>
                                                <th>Posisi</th>
                                            </tr>
                                            </thead>
                                            <tbody id="modal-bimbingan-list" class="small">
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
    </div>

@endsection

<script>
    function showDosenDetail(data) {
        // 1. Data Dasar
        document.getElementById('modal-nama').innerText = data.nama_lengkap;
        document.getElementById('modal-ids').innerText = `NIDN: ${data.nidn || '-'} | NUPTK: ${data.nuptk || '-'}`;
        document.getElementById('modal-email').innerText = data.email || '-';

        // 2. Pendidikan
        let edu = `S1: ${data.pendidikan_s1 || '-'}<br>S2: ${data.pendidikan_s2 || '-'}`;
        if(data.pendidikan_s3) edu += `<br>S3: ${data.pendidikan_s3}`;
        document.getElementById('modal-pendidikan').innerHTML = edu;

        // 3. Link Eksternal
        document.getElementById('modal-scholar').href = data.link_scholar || '#';
        document.getElementById('modal-sinta').href = data.link_sinta || '#';

        // 4. Foto
        document.getElementById('modal-foto').src = `/assets-fe/img/${data.foto}`;

        // 5. Data Bimbingan (Menggabungkan relasi bimbingan1 dan bimbingan2)
        const listBody = document.getElementById('modal-bimbingan-list');
        listBody.innerHTML = ''; // Reset list

        let allBimbingan = [];
        if(data.bimbingan1) data.bimbingan1.forEach(b => allBimbingan.push({...b, posisi: 'Pembimbing 1'}));
        if(data.bimbingan2) data.bimbingan2.forEach(b => allBimbingan.push({...b, posisi: 'Pembimbing 2'}));

        if(allBimbingan.length > 0) {
            allBimbingan.forEach(item => {
                listBody.innerHTML += `
                    <tr>
                        <td>${item.nama_mahasiswa}<br><span class="text-muted">${item.nim}</span></td>
                        <td>${item.judul_disertasi}</td>
                        <td>${item.tahun_akademik}<br><span class="text-muted">${item.semester}</span></td>
                        <td><span class="badge bg-light text-dark border">${item.posisi}</span></td>
                    </tr>
                `;
            });
        } else {
            listBody.innerHTML = '<tr><td colspan="3" class="text-center text-muted">Belum ada data bimbingan.</td></tr>';
        }

        var myModal = new bootstrap.Modal(document.getElementById('dosenModal'));
        myModal.show();
    }
</script>

<style>
    .custom-card {
        transition: all 0.3s ease;
    }
    .custom-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0,0,0,0.1) !important;
    }
    .custom-card:hover .text-primary {
        color: #0056b3 !important;
    }
</style>
