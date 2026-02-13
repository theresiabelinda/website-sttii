@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Daftar Bimbingan Disertasi</h1>

            <!-- Button trigger modal tambah -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalBimbingan">
                Tambah Bimbingan
            </button>
        </div>

        @if(session()->has('pesan'))
            <div class="alert alert-{{session()->get('pesan')[0]}} shadow-sm border-0">
                {{session()->get('pesan')[1]}}
            </div>
        @endif

        <div class="card shadow mb-4 border-0">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="dataTable" width="100%" cellspacing="0">
                        <thead class="bg-light text-dark text-center">
                        <tr>
                            <th class="py-3" width="50">No</th>
                            <th>Mahasiswa (NIM)</th>
                            <th width="300">Judul Disertasi</th>
                            <th>Smt / TA</th>
                            <th>Pembimbing</th>
                            <th width="100">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($bimbingan as $row)
                            <tr>
                                <td class="text-center align-middle font-weight-bold text-muted">{{ $loop->iteration }}</td>
                                <td class="align-middle">
                                    <div class="font-weight-bold text-primary">{{ $row->nama_mahasiswa }}</div>
                                    <small class="text-muted font-weight-bold">{{ $row->nim }}</small>
                                </td>
                                <td class="align-middle">
                                    <p class="small mb-0 text-justify" style="line-height: 1.4;">{{ $row->judul_disertasi }}</p>
                                </td>
                                <td class="text-center align-middle">
                                    <span class="badge badge-outline-primary text-primary px-3 py-2" style="border: 1px solid #4e73df;">
                                        {{ $row->semester }}
                                    </span>
                                    <small class="text-dark">{{ $row->tahun_akademik }}</small>
                                </td>
                                <td class="align-middle small">
                                    <div class="mb-1"><strong>P1:</strong> {{ $row->pembimbing1->nama_lengkap ?? '-' }}</div>
                                    <div><strong>P2:</strong> {{ $row->pembimbing2->nama_lengkap ?? '-' }}</div>
                                </td>
                                <td class="text-center align-middle">
                                    <div class="btn-group shadow-sm">
                                        <a href="{{ route('bimbingan.ubah', $row->id) }}" class="btn btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                        <a href="{{ route('bimbingan.hapus', $row->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Hapus data ini?')"><i class="fa fa-trash"></i></a>
                                    </div>
                                </td>
                                <td class="text-center align-middle font-weight-bold text-muted">
                                    {{ ($bimbingan->currentPage() - 1) * $bimbingan->perPage() + $loop->iteration }}
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>


                    <!-- Awal Modal Tambah -->
                    <div class="modal fade" id="modalBimbingan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Form Bimbingan Disertasi</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('bimbingan.prosesTambah') }}">
                                    @csrf
                                    <div class="modal-body">
                                            <div class="mb-3">
                                                <label class="font-weight-bold">Nama Mahasiswa *</label>
                                                <input type="text" name="nama_mahasiswa" class="form-control shadow-sm" required placeholder="Masukkan nama mahasiswa">
                                            </div>
                                            <div class="mb-3">
                                                <label class="font-weight-bold">NIM *</label>
                                                <input type="text" name="nim" class="form-control shadow-sm" required placeholder="Masukkan nomor induk mahasiswa">
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Semester *</label>
                                                        <select name="semester" class="form-control shadow-sm" required>
                                                            <option value="Ganjil">Ganjil</option>
                                                            <option value="Genap">Genap</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label class="font-weight-bold">Tahun Akademik *</label>
                                                        <select name="tahun_akademik" class="form-control shadow-sm" required>
                                                            @for($i=2020; $i<=2030; $i++)
                                                                <option value="{{ $i }}/{{ $i+1 }}">{{ $i }}/{{ $i+1 }}</option>
                                                          @endfor
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mt-3">
                                                <div class="col-md-6 pr-md-2">
                                                    <div class="mb-3">
                                                        <label class="font-weight-bold text-primary">Dosen Pembimbing 1 *</label>
                                                        <select name="pembimbing_1_id" class="form-control shadow-sm" required>
                                                            <option value="" disabled selected>-- Pilih Dosen --</option>
                                                            @foreach($dosen as $d)
                                                                <option value="{{ $d->id }}">{{ $d->nama_lengkap }}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 pl-md-2">
                                                    <div class="mb-3">
                                                        <label class="font-weight-bold text-info">Dosen Pembimbing 2 *</label>
                                                        <select name="pembimbing_2_id" class="form-control shadow-sm" required>
                                                            <option value="" disabled selected>-- Pilih Dosen --</option>
                                                            @foreach($dosen as $d)
                                                                <option value="{{ $d->id }}">{{ $d->nama_lengkap }}</option>
                                                          @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="mb-3">
                                                <label class="font-weight-bold">Judul Disertasi *</label>
                                                <textarea name="judul_disertasi" class="form-control shadow-sm" rows="3" required placeholder="Ketikkan judul disertasi lengkap..."></textarea>
                                            </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Tambah -->

                </div>
            </div>
        </div>
    </div>
@endsection
