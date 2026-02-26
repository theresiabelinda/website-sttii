@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Manajemen Data Tendik</h1>
                <p class="text-muted small">Daftar tenaga kependidikan STTII Yogyakarta.</p>
            </div>
            <button type="button" class="btn btn-success shadow-sm px-4" data-bs-toggle="modal" data-bs-target="#modalTendik">
                Tambah Tendik
            </button>
        </div>

        @if(session()->has('pesan'))
            <div class="alert alert-{{session()->get('pesan')[0]}} alert-dismissible fade show border-0 shadow-sm" role="alert">
                <i class="fas fa-info-circle mr-2"></i> {{session()->get('pesan')[1]}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card shadow border-0 overflow-hidden" style="border-radius: 15px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead style="background: linear-gradient(90deg, #5a67d8 0%, #4c51bf 100%); color: white;">
                        <tr>
                            <th class="border-0 py-4 text-center" width="70" style="font-size: 0.95rem;">#</th>
                            <th class="border-0 py-4" style="font-size: 0.95rem;">Informasi Tendik</th>
                            <th class="border-0 py-4" style="font-size: 0.95rem;">Kontak</th>
                            <th class="border-0 py-4 text-center" style="font-size: 0.95rem;">Divisi</th>
                            <th class="border-0 py-4" style="font-size: 0.95rem;">Pendidikan Terakhir</th>
                            <th class="border-0 py-4 text-center" width="140" style="font-size: 0.95rem;">Aksi</th></tr>
                        </thead>
                        <tbody>
                        @forelse($tendik as $row)
                            <tr class="align-middle">
                                <td class="text-center font-weight-bold text-muted">
                                    {{ ($tendik->currentPage() - 1) * $tendik->perPage() + $loop->iteration }}
                                </td>
                                <td>
                                    <div class="d-flex align-items-center">
                                        <div>
                                            <div class="font-weight-bold text-dark mb-0">{{ $row->nama }}</div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <div class="small">
                                        <i class="far fa-envelope text-primary mr-1"></i> {{ $row->email }}
                                    </div>
                                </td>
                                <td class="text-center">
                                    <span class="badge px-3 py-2 text-uppercase shadow-sm" style="background-color: rgba(111, 66, 193, 0.1); color: #6f42c1; border: 1px solid #6f42c1;">
                                        {{ $row->divisi }}
                                    </span>
                                </td>
                                <td>
                                    <div class="font-weight-bold text-dark mb-0">{{ $row->pendidikan_terakhir }}</div>
                                    <div class="small text-muted text-capitalize">{{ $row->jurusan ?? '-' }}</div>
                                </td>
                                <td class="text-center">
                                    <div class="btn-group shadow-sm">
                                        <button type="button" class="btn btn-sm btn-outline-warning mx-1 shadow-sm edit-button"
                                                data-bs-toggle="modal" data-bs-target="#modalEditTendik"
                                                data-id="{{ $row->id }}" data-nama="{{ $row->nama }}"
                                                data-email="{{ $row->email }}" data-divisi="{{ $row->divisi }}"
                                                data-pendidikan="{{ $row->pendidikan_terakhir }}"
                                                data-jurusan="{{ $row->jurusan }}" title="Edit">
                                            <i class="fa fa-edit"></i> Ubah
                                        </button>
                                        <a href="{{ route('tendik.hapus', $row->id) }}"
                                           class="btn btn-sm btn-outline-danger btn-delete" title="Hapus">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    <i class="fas fa-user-tie fa-3x mb-3 text-light"></i>
                                    <p>Belum ada data tendik yang tersimpan.</p>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card-footer bg-white border-top py-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="small text-muted">Menampilkan {{ $tendik->firstItem() }} - {{ $tendik->lastItem() }} dari {{ $tendik->total() }} data</div>
                    <div>{{ $tendik->links('pagination::bootstrap-4') }}</div>
                </div>
            </div>
        </div>
    </div>

{{--    Awal Modal Tambah--}}
    <div class="modal fade" id="modalTendik" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow border-0">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Data Tendik</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="{{ route('tendik.prosesTambah') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="font-weight-bold">Nama Lengkap <span class="text-danger">*</span></label>
                            <input type="text" name="nama" class="form-control" required placeholder="isi nama disini">
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">Email <span class="text-danger">*</span></label>
                            <input type="email" name="email" class="form-control" required placeholder="alamat@email.com">
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Divisi <span class="text-danger">*</span></label>
                                <select name="divisi" class="form-control custom-select" required>
                                    <option value="" disabled selected>Pilih Divisi</option>
                                    <option value="keuangan">Keuangan</option>
                                    <option value="WK II Bag. Kepegawaian">WK II Bag. Kepegawaian</option>
                                    <option value="pusdatin">Pusdatin</option>
                                    <option value="sarpras">Sarpras</option>
                                    <option value="perpustakaan">Perpustakaan</option>
                                    <option value="p3s">P3S</option>
                                    <option value="sekprodi">Sekprodi</option>
                                    <option value="lppm">LPPM</option>
                                    <option value="spmi">SPMI</option>
                                    <option value="alumni">Alumni</option>
                                    <option value="sekretaris lembaga">Sekretaris Lembaga</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Pendidikan <span class="text-danger">*</span></label>
                                <select name="pendidikan_terakhir" id="selectPendidikan" class="form-control custom-select" required>
                                    <option value="" disabled selected>Level</option>
                                    <option value="SMA">SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3" id="inputJurusanContainer" style="display: none;">
                            <label class="font-weight-bold">Jurusan / Spesialisasi</label>
                            <input type="text" name="jurusan" class="form-control" placeholder="Contoh: Akuntansi">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Simpan Data</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--Akhir Modal Tambah    --}}

{{--Awal Modal Ubah    --}}
    <div class="modal fade" id="modalEditTendik" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow border-0">
                <div class="modal-header">
                    <h5 class="modal-title font-weight-bold">Edit Data Tendik</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" id="formEditTendik" action="{{ route('tendik.prosesUbah') }}">
                    @csrf
                    <input type="hidden" name="id" id="edit_id">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label class="font-weight-bold">Nama Lengkap</label>
                            <input type="text" name="nama" id="edit_nama" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label class="font-weight-bold">Email</label>
                            <input type="email" name="email" id="edit_email" class="form-control" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Divisi</label>
                                <select name="divisi" id="edit_divisi" class="form-control custom-select" required>
                                    <option value="keuangan">Keuangan</option>
                                    <option value="WK II Bag. Kepegawaian">WK II Bag. Kepegawaian</option>
                                    <option value="pusdatin">Pusdatin</option>
                                    <option value="sarpras">Sarpras</option>
                                    <option value="perpustakaan">Perpustakaan</option>
                                    <option value="p3s">P3S</option>
                                    <option value="sekprodi">Sekprodi</option>
                                    <option value="lppm">LPPM</option>
                                    <option value="alumni">Alumni</option>
                                    <option value="sekretaris lembaga">Sekretaris Lembaga</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="font-weight-bold">Pendidikan</label>
                                <select name="pendidikan_terakhir" id="edit_pendidikan" class="form-control custom-select" required>
                                    <option value="SMA">SMA</option>
                                    <option value="D3">D3</option>
                                    <option value="S1">S1</option>
                                    <option value="S2">S2</option>
                                    <option value="S3">S3</option>
                                </select>
                            </div>
                        </div>
                        <div class="mb-3" id="editJurusanContainer">
                            <label class="font-weight-bold">Jurusan</label>
                            <input type="text" name="jurusan" id="edit_jurusan" class="form-control">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-warning font-weight-bold">Update</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{--Akhir Modal Ubah--}}

    <style>
        .table thead th {
            font-size: 0.85rem;
            font-weight: 600;
            letter-spacing: 0.5px;
            vertical-align: middle;
        }
        .avatar-circle {
            background: #d1d3e2;
            width: 38px;
            height: 38px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .table tbody tr:hover { background-color: rgba(78, 115, 223, 0.05); transition: 0.3s; }
        .badge { border-radius: 6px; }
        .modal-header { border: none; }
        .modal-footer { border: none; }
    </style>

    <script>
        // Ajax ubah
        document.addEventListener('DOMContentLoaded', function () {
            const selectPendidikan = document.getElementById('selectPendidikan');
            const inputJurusanContainer = document.getElementById('inputJurusanContainer');
            selectPendidikan.addEventListener('change', function () {
                inputJurusanContainer.style.display = (['D3','S1', 'S2', 'S3'].includes(this.value)) ? 'block' : 'none';
            });

            const editButtons = document.querySelectorAll('.edit-button');
            const editJurusanContainer = document.getElementById('editJurusanContainer');
            const editPendidikan = document.getElementById('edit_pendidikan');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    document.getElementById('edit_id').value = this.getAttribute('data-id');
                    document.getElementById('edit_nama').value = this.getAttribute('data-nama');
                    document.getElementById('edit_email').value = this.getAttribute('data-email');
                    document.getElementById('edit_divisi').value = this.getAttribute('data-divisi');
                    document.getElementById('edit_pendidikan').value = this.getAttribute('data-pendidikan');
                    document.getElementById('edit_jurusan').value = this.getAttribute('data-jurusan');
                    editJurusanContainer.style.display = (['D3','S1', 'S2', 'S3'].includes(this.getAttribute('data-pendidikan'))) ? 'block' : 'none';
                });
            });

            editPendidikan.addEventListener('change', function() {
                editJurusanContainer.style.display = (['D3','S1', 'S2', 'S3'].includes(this.value)) ? 'block' : 'none';
            });

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
        });
    </script>
@endsection
