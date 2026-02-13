@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Ubah Data Bimbingan</h1>
            <a href="{{ route('bimbingan.index') }}" class="btn btn-sm btn-secondary shadow-sm">
                <i class="fas fa-arrow-left fa-sm mr-1"></i> Kembali
            </a>
        </div>

        <div class="card shadow border-0">
            <div class="card-header py-3 bg-white">
                <h6 class="m-0 font-weight-bold text-primary">Formulir Perubahan Data</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('bimbingan.prosesUbah') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $bimbingan->id }}">

                    <div class="row">
                        <div class="col-md-6 border-right pr-md-4">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">Nama Mahasiswa *</label>
                                <input type="text" name="nama_mahasiswa" class="form-control shadow-sm"
                                       value="{{ old('nama_mahasiswa', $bimbingan->nama_mahasiswa) }}" required>
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold">NIM *</label>
                                <input type="text" name="nim" class="form-control shadow-sm"
                                       value="{{ old('nim', $bimbingan->nim) }}" required>
                            </div>
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Semester *</label>
                                        <select name="semester" class="form-control shadow-sm" required>
                                            <option value="Ganjil" {{ $bimbingan->semester == 'Ganjil' ? 'selected' : '' }}>Ganjil</option>
                                            <option value="Genap" {{ $bimbingan->semester == 'Genap' ? 'selected' : '' }}>Genap</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="font-weight-bold">Tahun Akademik *</label>
                                        <select name="tahun_akademik" class="form-control shadow-sm" required>
                                            @for($i=2024; $i<=2027; $i++)
                                                @php $ta = "$i/".($i+1); @endphp
                                                <option value="{{ $ta }}" {{ $bimbingan->tahun_akademik == $ta ? 'selected' : '' }}>{{ $ta }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 pl-md-4">
                            <div class="form-group mb-3">
                                <label class="font-weight-bold text-primary">Dosen Pembimbing 1 (Ketua) *</label>
                                <select name="pembimbing_1_id" class="form-control shadow-sm" required>
                                    @foreach($dosen as $d)
                                        <option value="{{ $d->id }}" {{ $bimbingan->pembimbing_1_id == $d->id ? 'selected' : '' }}>
                                            {{ $d->nama_lengkap }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-3">
                                <label class="font-weight-bold text-info">Dosen Pembimbing 2 (Anggota) *</label>
                                <select name="pembimbing_2_id" class="form-control shadow-sm" required>
                                    @foreach($dosen as $d)
                                        <option value="{{ $d->id }}" {{ $bimbingan->pembimbing_2_id == $d->id ? 'selected' : '' }}>
                                            {{ $d->nama_lengkap }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mb-0">
                                <label class="font-weight-bold">Judul Disertasi *</label>
                                <textarea name="judul_disertasi" class="form-control shadow-sm" rows="3" required>{{ old('judul_disertasi', $bimbingan->judul_disertasi) }}</textarea>
                            </div>
                        </div>
                    </div>

                    <hr class="my-4">

                    <div class="text-right">
                        <button type="submit" class="btn btn-warning px-5 shadow font-weight-bold">
                            <i class="fas fa-save mr-2"></i> Update Data
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
