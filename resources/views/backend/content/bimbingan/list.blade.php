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

        <div class="card shadow border-0 overflow-hidden" style="border-radius: 15px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead style="background: linear-gradient(90deg, #5a67d8 0%, #4c51bf 100%); color: white;">
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
                                        <button type="button"
                                                class="btn btn-sm btn-warning shadow-sm edit-button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEditBimbingan"
                                                data-id="{{ $row->id }}"
                                                data-nama="{{ $row->nama_mahasiswa }}"
                                                data-nim="{{ $row->nim }}"
                                                data-semester="{{ $row->semester }}"
                                                data-tahun="{{ $row->tahun_akademik }}"
                                                data-p1="{{ $row->pembimbing_1_id }}"
                                                data-p2="{{ $row->pembimbing_2_id }}"
                                                data-judul="{{ $row->judul_disertasi }}"
                                                title="Ubah">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <a href="{{ route('bimbingan.hapus', $row->id) }}"
                                           class="btn btn-sm btn-danger btn-delete" title="Hapus">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="card-footer bg-white border-top py-3">
                        <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                            <div class="small text-muted mb-2 mb-md-0">
                                Menampilkan <strong>{{ $bimbingan->firstItem() ?? 0 }}</strong> dari <strong>{{ $bimbingan->total() }}</strong> data
                            </div>
                            <div class="pagination-container">
                                {{ $bimbingan->links('pagination::bootstrap-4') }}
                            </div>
                        </div>
                    </div>

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

                    <!-- Awal Modal Ubah -->
                    <div class="modal fade" id="modalEditBimbingan" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 shadow">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold"><i class="fas fa-edit mr-2"></i> Edit Data Bimbingan</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" id="formEditBimbingan" action="">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="edit_id">

                                        <div class="row">
                                            <div class="col-md-8 mb-3">
                                                <label class="font-weight-bold">Nama Mahasiswa</label>
                                                <input type="text" name="nama_mahasiswa" id="edit_nama" class="form-control" required>
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="font-weight-bold">NIM</label>
                                                <input type="text" name="nim" id="edit_nim" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Semester</label>
                                                <select name="semester" id="edit_semester" class="form-control custom-select" required>
                                                    <option value="Ganjil">Ganjil</option>
                                                    <option value="Genap">Genap</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Tahun Akademik</label>
                                                <input type="text" name="tahun_akademik" id="edit_tahun" class="form-control" placeholder="Contoh: 2025/2026" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Pembimbing 1</label>
                                                <select name="pembimbing_1_id" id="edit_p1" class="form-control shadow-sm" required>
                                                    @foreach($dosen as $d)
                                                        <option value="{{ $d->id }}">{{ $d->nama_lengkap }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Pembimbing 2</label>
                                                <select name="pembimbing_2_id" id="edit_p2" class="form-control shadow-sm" required>
                                                    @foreach($dosen as $d)
                                                        <option value="{{ $d->id }}">{{ $d->nama_lengkap }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="font-weight-bold">Judul Disertasi</label>
                                            <textarea name="judul_disertasi" id="edit_judul" class="form-control" rows="3" required></textarea>
                                        </div>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <button type="submit" class="btn btn-warning font-weight-bold px-4">Update</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Ubah -->

                </div>
            </div>
        </div>
    </div>

    <script>
        // SweetAlert Delete
        const deleteButtons = document.querySelectorAll('.btn-delete');
        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                Swal.fire({
                    title: 'Hapus Data?',
                    text: "Data ini akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#e74a3b',
                    cancelButtonColor: '#858796',
                    confirmButtonText: 'Ya, Hapus!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) window.location.href = href;
                });
            });
        });

        // ajax ubah
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-button');
            const formEdit = document.getElementById('formEditBimbingan');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id     = this.getAttribute('data-id');
                    const nama   = this.getAttribute('data-nama');
                    const nim    = this.getAttribute('data-nim');
                    const sem    = this.getAttribute('data-semester');
                    const tahun  = this.getAttribute('data-tahun');
                    const p1     = this.getAttribute('data-p1');
                    const p2     = this.getAttribute('data-p2');
                    const judul  = this.getAttribute('data-judul');

                    document.getElementById('edit_id').value = id;
                    document.getElementById('edit_nama').value = nama;
                    document.getElementById('edit_nim').value = nim;
                    document.getElementById('edit_semester').value = sem;
                    document.getElementById('edit_tahun').value = tahun;
                    document.getElementById('edit_p1').value = p1;
                    document.getElementById('edit_p2').value = p2;
                    document.getElementById('edit_judul').value = judul;

                    formEdit.action = `{{ route('bimbingan.prosesUbah') }}`;
                });
            });
        });
    </script>
@endsection
