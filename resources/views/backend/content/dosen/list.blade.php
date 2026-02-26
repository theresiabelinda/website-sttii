@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Manajemen Data Dosen</h1>
                <p class="text-muted small">Daftar dosen tetap dan tidak tetap STTII.</p>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalDosen">
                Tambah Dosen
            </button>

        </div>

        @if(session()->has('pesan'))
            <div class="alert alert-{{session()->get('pesan')[0]}} alert-dismissible fade show border-0 shadow-sm" role="alert">
                <i class="fas fa-info-circle mr-2"></i> {{session()->get('pesan')[1]}}
            </div>
        @endif

        <div class="card shadow border-0 overflow-hidden" style="border-radius: 15px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0">
                        <thead style="background: linear-gradient(90deg, #5a67d8 0%, #4c51bf 100%); color: white;">
                        <tr>
                            <th class="border-0 py-3 text-center" width="50">#</th>
                            <th class="border-0 py-3">Informasi Dosen</th>
                            <th class="border-0 py-3">Kontak & Identitas</th>
                            <th class="border-0 py-3 text-center">Link Profil</th>
                            <th class="border-0 py-3">Riwayat Pendidikan</th>
                            <th class="border-0 py-3 text-center" width="120">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @forelse($dosen as $row)
                            <tr>
                                <td class="text-center align-middle font-weight-bold text-muted">
                                    {{ ($dosen->currentPage() - 1) * $dosen->perPage() + $loop->iteration }}
                                </td>
                                <td class="align-middle">
                                    <div class="font-weight-bold text-dark mb-0" style="font-size: 1rem;">{{ $row->nama_lengkap }}</div>
                                    <div class="d-flex mt-1">
                                        <span class="badge badge-primary-soft mr-2">NIDN: {{ $row->nidn }}</span>
                                        @if($row->nuptk)
                                            <span class="badge badge-secondary-soft">NUPTK: {{ $row->nuptk }}</span>
                                        @endif
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="small mb-1 text-muted">
                                        <i class="far fa-envelope text-primary mr-1"></i> {{ $row->email }}
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="btn-group-vertical">
                                        @if($row->link_scholar)
                                            <a href="{{ $row->link_scholar }}" target="_blank" class="btn btn-outline-info btn-sm mb-1 px-3 shadow-sm">
                                                <i class="fas fa-graduation-cap"></i> Scholar
                                            </a>
                                        @endif
                                        @if($row->link_sinta)
                                            <a href="{{ $row->link_sinta }}" target="_blank" class="btn btn-outline-success btn-sm px-3 shadow-sm">
                                                <i class="fas fa-external-link-alt"></i> SINTA
                                            </a>
                                        @endif
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="education-info">
                                        <div class="small"><strong>S1:</strong> {{ $row->pendidikan_s1 }}</div>
                                        <div class="small"><strong>S2:</strong> {{ $row->pendidikan_s2 }}</div>
                                        @if($row->pendidikan_s3)
                                            <div class="small text-primary font-weight-bold"><strong>S3:</strong> {{ $row->pendidikan_s3 }}</div>
                                        @endif
                                    </div>
                                </td>
                                <td class="text-center align-middle">
                                    <div class="btn-group shadow-sm">
                                        <button type="button"
                                                class="btn btn-sm btn-warning shadow-sm edit-button"
                                                data-bs-toggle="modal"
                                                data-bs-target="#modalEditDosen"
                                                data-id="{{ $row->id }}"
                                                data-nama="{{ $row->nama_lengkap }}"
                                                data-nidn="{{ $row->nidn }}"
                                                data-nuptk="{{ $row->nuptk }}"
                                                data-email="{{ $row->email }}"
                                                data-s1="{{ $row->pendidikan_s1 }}"
                                                data-s2="{{ $row->pendidikan_s2 }}"
                                                data-s3="{{ $row->pendidikan_s3 }}"
                                                data-scholar="{{ $row->link_scholar }}"
                                                data-sinta="{{ $row->link_sinta }}">
                                            <i class="fa fa-edit"></i>
                                        </button>

                                        <a href="{{ route('dosen.hapus', $row->id) }}"
                                           class="btn btn-sm btn-danger btn-delete" title="Hapus">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center py-5 text-muted">
                                    <i class="fas fa-folder-open fa-3x mb-3"></i>
                                    <p>Belum ada data dosen yang tersimpan.</p>
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>

                    <!-- Awal Modal Tambah -->
                    <div class="modal fade" id="modalDosen" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Form Data Dosen</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" action="{{ route('dosen.prosesTambah') }}">
                                    @csrf
                                    <div class="modal-body">
                                        <div class="mb-3">
                                            <label class="font-weight-bold">Nama Lengkap <span class="text-danger">*</span></label>
                                            <input type="text" name="nama_lengkap" class="form-control" required placeholder="Ketik nama dosen disini..">
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="font-weight-bold">NIDN <span class="text-danger">*</span></label>
                                                    <input type="text" name="nidn" class="form-control" required placeholder="NIDN">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label class="font-weight-bold text-muted">NUPTK</label>
                                                    <input type="text" name="nuptk" class="form-control" placeholder="NUPTK">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label class="font-weight-bold">Email<span class="text-danger">*</span></label>
                                            <input type="email" name="email" class="form-control" required placeholder="ketik alamat email disini...">
                                        </div>
                                        <div class="row mt-4 mb-3">
                                            <div class="col-12"><small class="text-primary font-weight-bold uppercase text-xs">Link Publikasi</small><hr class="mt-1"></div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small font-weight-bold text-dark">Google Scholar</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text text-primary"><i class="fa fa-graduation-cap"></i></span></div>
                                                        <input type="url" name="link_scholar" class="form-control form-control-sm" placeholder="https://scholar.google...">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label class="small font-weight-bold text-dark">SINTA Profile</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend"><span class="input-group-text text-success"><i class="fa fa-external-link"></i></span></div>
                                                        <input type="url" name="link_sinta" class="form-control form-control-sm" placeholder="https://sinta.kemdikbud...">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card shadow mb-4 border-left-info">
                                            <div class="card-header py-3 bg-white">
                                                <h6 class="m-0 font-weight-bold text-info"><i class="fa fa-university mr-2"></i>Riwayat Pendidikan</h6>
                                            </div>
                                            <div class="card-body bg-light-50">
                                                <div class="form-group p-3 border rounded bg-white mb-3 shadow-sm">
                                                    <label class="font-weight-bold text-primary"><span class="badge badge-primary mr-2">S1</span> Pendidikan S1 <span class="text-danger">*</span></label>
                                                    <input type="text" name="pendidikan_s1" class="form-control border-0 bg-light" required placeholder="ketik pendidikan disini ..">
                                                </div>

                                                <div class="form-group p-3 border rounded bg-white mb-3 shadow-sm">
                                                    <label class="font-weight-bold text-info"><span class="badge badge-info mr-2">S2</span> Pendidikan S2 <span class="text-danger">*</span></label>
                                                    <input type="text" name="pendidikan_s2" class="form-control border-0 bg-light" required placeholder="ketik pendidikan disini ..">
                                                </div>

                                                <div class="form-group p-3 border rounded bg-white mb-3 shadow-sm">
                                                    <label class="font-weight-bold text-dark"><span class="badge badge-dark mr-2">S3</span> Pendidikan S3 (Opsional)</label>
                                                    <input type="text" name="pendidikan_s3" class="form-control border-0 bg-light" placeholder="Isi jika sudah menempuh S3">
                                                </div>

                                                <div class="alert alert-info small shadow-sm">
                                                    <i class="fa fa-info-circle mr-1"></i> Pastikan gelar pendidikan dituliskan juga pada nama lengkap di atas.
                                                </div>
                                            </div>
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
                    <div class="modal fade" id="modalEditDosen" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content border-0 shadow">
                                <div class="modal-header">
                                    <h5 class="modal-title font-weight-bold"><i class="fas fa-user-edit mr-2"></i> Edit Data Dosen</h5>
                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <form method="POST" id="formEditDosen" enctype="multipart/form-data">
                                    @csrf
                                    <div class="modal-body">
                                        <input type="hidden" name="id" id="edit_id">

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Nama Lengkap</label>
                                                <input type="text" name="nama_lengkap" id="edit_nama" class="form-control" required>
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Email</label>
                                                <input type="email" name="email" id="edit_email" class="form-control" required>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">NIDN</label>
                                                <input type="text" name="nidn" id="edit_nidn" class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">NUPTK</label>
                                                <input type="text" name="nuptk" id="edit_nuptk" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-4 mb-3">
                                                <label class="font-weight-bold">S1</label>
                                                <input type="text" name="pendidikan_s1" id="edit_s1" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="font-weight-bold">S2</label>
                                                <input type="text" name="pendidikan_s2" id="edit_s2" class="form-control">
                                            </div>
                                            <div class="col-md-4 mb-3">
                                                <label class="font-weight-bold">S3</label>
                                                <input type="text" name="pendidikan_s3" id="edit_s3" class="form-control">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">Google Scholar Link</label>
                                                <input type="url" name="link_scholar" id="edit_scholar" class="form-control">
                                            </div>
                                            <div class="col-md-6 mb-3">
                                                <label class="font-weight-bold">SINTA Link</label>
                                                <input type="url" name="link_sinta" id="edit_sinta" class="form-control">
                                            </div>
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

            <div class="card-footer bg-white border-top py-3">
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                    <div class="small text-muted mb-2 mb-md-0">
                        Menampilkan <strong>{{ $dosen->firstItem() ?? 0 }}</strong> dari <strong>{{ $dosen->total() }}</strong> dosen
                    </div>
                    <div class="pagination-container">
                        {{ $dosen->links('pagination::bootstrap-4') }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .table thead th {
            color: white !important;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-weight: 600;
        }

        .table thead th {
            font-size: 0.8rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
            border-bottom: 2px solid #f8f9fc !important;
        }

        .table tbody tr {
            transition: all 0.2s;
        }

        .table tbody tr:hover {
            background-color: rgba(78, 115, 223, 0.03);
        }

        .badge-primary-soft {
            background-color: #eef2ff;
            color: #4e73df;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .badge-secondary-soft {
            background-color: #f8f9fc;
            color: #858796;
            border: 1px solid #e3e6f0;
            padding: 5px 10px;
            border-radius: 5px;
        }
        .btn-white { background: #fff; }

        .btn-white:hover {
            background: #f8f9fa;
            border-color: #ccc; }
        .education-info div { line-height: 1.5;
        }

        .pagination { margin-bottom: 0; }

        .page-item.active .page-link {
            background-color: #4e73df;
            border-color: #4e73df;
        }
        .page-link { color: #4e73df; }
    </style>

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

        // Ajax Ubah
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-button');
            const formEdit = document.getElementById('formEditDosen');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const id      = this.getAttribute('data-id');
                    const nama    = this.getAttribute('data-nama');
                    const nidn    = this.getAttribute('data-nidn');
                    const nuptk   = this.getAttribute('data-nuptk');
                    const email   = this.getAttribute('data-email');
                    const s1      = this.getAttribute('data-s1');
                    const s2      = this.getAttribute('data-s2');
                    const s3      = this.getAttribute('data-s3');
                    const scholar = this.getAttribute('data-scholar');
                    const sinta   = this.getAttribute('data-sinta');

                    document.getElementById('edit_id').value = id;
                    document.getElementById('edit_nama').value = nama;
                    document.getElementById('edit_nidn').value = nidn;
                    document.getElementById('edit_nuptk').value = nuptk;
                    document.getElementById('edit_email').value = email;
                    document.getElementById('edit_s1').value = s1;
                    document.getElementById('edit_s2').value = s2;
                    document.getElementById('edit_s3').value = s3;
                    document.getElementById('edit_scholar').value = scholar;
                    document.getElementById('edit_sinta').value = sinta;

                    formEdit.action = `{{ route('dosen.prosesUbah') }}`;
                });
            });
        });
    </script>
@endsection
