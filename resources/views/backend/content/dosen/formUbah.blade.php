@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Ubah Data Dosen</h1>
                <p class="text-muted small">Perbarui informasi dosen: <strong>{{ $dosen->nama_lengkap }}</strong></p>
            </div>
            <a href="{{ route('dosen.index') }}" class="btn btn-sm btn-light btn-icon-split shadow-sm border">
                <span class="icon text-gray-600"><i class="fa fa-arrow-left"></i></span>
                <span class="text">Kembali</span>
            </a>
        </div>

        <form action="{{ route('dosen.prosesUbah') }}" method="POST">
            @csrf
            <input type="hidden" name="id" value="{{ $dosen->id }}">

            <div class="row">
                <div class="col-lg-8">
                    <div class="card shadow-sm mb-4 border-left-warning">
                        <div class="card-header py-3 bg-white">
                            <h6 class="m-0 font-weight-bold text-warning">
                                <i class="fa fa-edit mr-2"></i>Informasi Identitas
                            </h6>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label class="font-weight-bold text-dark">Nama Lengkap & Gelar <span class="text-danger">*</span></label>
                                <input type="text" name="nama_lengkap" class="form-control" value="{{ $dosen->nama_lengkap }}" required>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold text-dark small">NIDN <span class="text-danger">*</span></label>
                                        <input type="text" name="nidn" class="form-control" value="{{ $dosen->nidn }}" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold text-dark small text-muted">NUPTK (Opsional)</label>
                                        <input type="text" name="nuptk" class="form-control" value="{{ $dosen->nuptk }}">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="font-weight-bold text-dark small">Email Institusi <span class="text-danger">*</span></label>
                                <input type="email" name="email" class="form-control" value="{{ $dosen->email }}" required>
                            </div>

                            <div class="mt-4 pt-3 border-top">
                                <h6 class="font-weight-bold text-primary mb-3 small">Link Publikasi Digital</h6>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small">Google Scholar Link</label>
                                            <input type="url" name="link_scholar" class="form-control bg-light" value="{{ $dosen->link_scholar }}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="small">SINTA ID Link</label>
                                            <input type="url" name="link_sinta" class="form-control bg-light" value="{{ $dosen->link_sinta }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card shadow-sm mb-4 border-left-info">
                        <div class="card-header py-3 bg-info text-white">
                            <h6 class="m-0 font-weight-bold"><i class="fa fa-graduation-cap mr-2"></i>Riwayat Pendidikan</h6>
                        </div>
                        <div class="card-body bg-light">
                            <div class="form-group">
                                <label class="small font-weight-bold">Jenjang S1 <span class="text-danger">*</span></label>
                                <input type="text" name="pendidikan_s1" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 bg-transparent" value="{{ $dosen->pendidikan_s1 }}" required>
                            </div>
                            <div class="form-group">
                                <label class="small font-weight-bold">Jenjang S2 <span class="text-danger">*</span></label>
                                <input type="text" name="pendidikan_s2" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 bg-transparent" value="{{ $dosen->pendidikan_s2 }}" required>
                            </div>
                            <div class="form-group">
                                <label class="small font-weight-bold text-muted">Jenjang S3 (Opsional)</label>
                                <input type="text" name="pendidikan_s3" class="form-control border-top-0 border-right-0 border-left-0 rounded-0 bg-transparent" value="{{ $dosen->pendidikan_s3 }}">
                            </div>
                        </div>
                    </div>

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <button type="submit" class="btn btn-warning btn-block font-weight-bold">
                                <i class="fa fa-sync-alt mr-2"></i> PERBARUI DATA
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
