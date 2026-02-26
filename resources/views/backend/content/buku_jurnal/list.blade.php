@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Daftar Buku & Jurnal</h1>

            <button type="button" class="btn btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#modalBukuJurnal">
                <i class="fa-sm text-white-50"></i> Tambah Data
            </button>
        </div>

        @if(session()->has('success'))
            <div class="alert alert-success shadow-sm border-0">
                {{ session()->get('success') }}
            </div>
        @endif

        <div class="card shadow border-0 overflow-hidden" style="border-radius: 15px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead style="background: linear-gradient(90deg, #5a67d8 0%, #4c51bf 100%); color: white;">
                        <tr>
                            <th class="py-3 text-center" width="50">No</th>
                            <th>Dosen</th>
                            <th width="400">Judul Karya</th>
                            <th class="text-center">Tipe / Tahun</th>
                            <th class="text-center">Link</th>
                            <th class="text-center" width="120">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($buku_jurnal as $row)
                            <tr>
                                <td class="text-center align-middle font-weight-bold text-muted">{{ $loop->iteration }}</td>
                                <td class="align-middle">
                                    <div class="font-weight-bold text-primary">{{ $row->dosen->nama_lengkap }}</div>
                                    <small class="text-muted">NIDN: {{ $row->dosen->nidn }}</small>
                                </td>
                                <td class="align-middle">
                                    <p class="small mb-0 text-justify font-weight-bold" style="line-height: 1.4;">{{ $row->judul }}</p>
                                    @if($row->penerbit)
                                        <small class="text-muted">Penerbit: {{ $row->penerbit }}</small>
                                    @endif
                                </td>
                                <td class="text-center align-middle">
                                    <span class="badge {{ $row->tipe == 'buku' ? 'bg-info' : 'bg-success' }} text-white px-3 py-2 mb-1">
                                        {{ ucfirst($row->tipe) }}
                                    </span>
                                    <br>
                                    <small class="text-dark font-weight-bold">{{ $row->tahun }}</small>
                                </td>
                                <td class="text-center align-middle">
                                    @if($row->link)
                                        <a href="{{ $row->link }}" target="_blank" class="btn btn-sm btn-outline-primary rounded-pill">
                                            <i class="fas fa-external-link-alt"></i> Buka
                                        </a>
                                    @else
                                        <span class="text-muted small">Tidak ada</span>
                                    @endif
                                </td>
                                <td class="text-center align-middle">
                                    <div class="btn-group shadow-sm">
                                        <button type="button"
                                                class="btn btn-sm btn-warning edit-button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEditBukuJurnal"
                                                data-id="{{ $row->id }}"
                                                data-dosen="{{ $row->dosen_id }}"
                                                data-judul="{{ $row->judul }}"
                                                data-tipe="{{ $row->tipe }}"
                                                data-tahun="{{ $row->tahun }}"
                                                data-penerbit="{{ $row->penerbit }}"
                                                data-link="{{ $row->link }}"
                                                title="Ubah">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <a href="{{ route('buku_jurnal.hapus', $row->id) }}"
                                           class="btn btn-sm btn-danger btn-delete" title="Hapus">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <div class="px-4 py-3 border-top d-flex justify-content-between align-items-center bg-light">
                        <div class="text-muted small">
                            Showing {{ $buku_jurnal->firstItem() }} to {{ $buku_jurnal->lastItem() }} of {{ $buku_jurnal->total() }} entries
                        </div>
                        <div>
                            {{ $buku_jurnal->links('pagination::bootstrap-5') }}
                        </div>
                    </div>

                    <div class="modal fade" id="modalBukuJurnal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold">Tambah Buku / Jurnal</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('buku_jurnal.prosesTambah') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="font-weight-bold">Pilih Dosen *</label>
                                            <select name="dosen_id" class="form-control shadow-sm" required>
                                                <option value="" disabled selected>-- Pilih Dosen --</option>
                                                @foreach($dosen as $d)
                                                    <option value="{{ $d->id }}">{{ $d->nama_lengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="mb-3">
                                            <label class="font-weight-bold">Judul Karya *</label>
                                            <textarea name="judul" class="form-control shadow-sm" rows="3" required placeholder="Masukkan judul buku atau jurnal..."></textarea>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold">Tipe *</label>
                                                    <select name="tipe" class="form-control shadow-sm" required>
                                                        <option value="buku">Buku</option>
                                                        <option value="jurnal">Jurnal</option>
                                                        <option value="artikel">Artikel</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label class="font-weight-bold">Tahun *</label>
                                                    <input type="number" name="tahun" class="form-control shadow-sm" placeholder="Contoh: 2024" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 mt-3">
                                            <label class="font-weight-bold">Penerbit (Opsional)</label>
                                            <input type="text" name="penerbit" class="form-control shadow-sm" placeholder="Nama Penerbit">
                                        </div>
                                        <div class="mb-3">
                                            <label class="font-weight-bold">Link URL (Opsional)</label>
                                            <input type="url" name="link" class="form-control shadow-sm" placeholder="https://example.com/karya">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="submit" class="btn btn-success px-4 font-weight-bold">Simpan</button>
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

{{--                    Awal Modal Edit--}}
                    <div class="modal fade" id="modalEditBukuJurnal" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content border-0 shadow">
                                <div class="modal-header text-dark">
                                    <h5 class="modal-title font-weight-bold"><i class="mr-2"></i> Edit Data Karya</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" id="formEditBukuJurnal" action="{{ route('buku_jurnal.prosesUbah') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="edit_id">

                                        <div class="mb-3">
                                            <label class="font-weight-bold">Dosen Pengarang</label>
                                            <select name="dosen_id" id="edit_dosen" class="form-control" required>
                                                @foreach($dosen as $d)
                                                    <option value="{{ $d->id }}">{{ $d->nama_lengkap }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label class="font-weight-bold">Judul</label>
                                            <textarea name="judul" id="edit_judul" class="form-control" rows="3" required></textarea>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Tipe</label>
                                                <select name="tipe" id="edit_tipe" class="form-control custom-select" required>
                                                    <option value="buku">Buku</option>
                                                    <option value="jurnal">Jurnal</option>
                                                    <option value="artikel">Artikel</option>
                                                </select>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Tahun</label>
                                                <input type="number" name="tahun" id="edit_tahun" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label class="font-weight-bold">Penerbit</label>
                                            <input type="text" name="penerbit" id="edit_penerbit" class="form-control">
                                        </div>

                                        <div class="mb-3">
                                            <label class="font-weight-bold">Link URL</label>
                                            <input type="url" name="link" id="edit_link" class="form-control">
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
                </div>
            </div>
        </div>
    </div>

    <script>
        // SweetAlert Delete
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                Swal.fire({
                    title: 'Hapus Data?',
                    text: "Data karya ilmiah ini akan dihapus permanen!",
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

        // AJAX Edit Fill Data
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-button');
            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id = this.getAttribute('data-id');
                    const dosenId = this.getAttribute('data-dosen');
                    const judul = this.getAttribute('data-judul');
                    const tipe = this.getAttribute('data-tipe');
                    const tahun = this.getAttribute('data-tahun');
                    const penerbit = this.getAttribute('data-penerbit');
                    const link = this.getAttribute('data-link');

                    document.getElementById('edit_id').value = id;
                    document.getElementById('edit_judul').value = judul;
                    document.getElementById('edit_tahun').value = tahun;
                    document.getElementById('edit_penerbit').value = (penerbit && penerbit !== 'null') ? penerbit : '';
                    document.getElementById('edit_link').value = (link && link !== 'null') ? link : '';

                    document.getElementById('edit_dosen').value = dosenId;
                    document.getElementById('edit_tipe').value = tipe;
                });
            });
        });
    </script>

    <style>
        .pagination {
            margin-bottom: 0;
        }
        .page-link {
            padding: 0.5rem 0.75rem;
            font-size: 0.875rem;
        }
    </style>
@endsection
