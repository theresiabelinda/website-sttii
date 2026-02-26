@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Kategori Kegiatan</h1>
                <p class="text-muted small mb-0">Kelola pengelompokan berita dan aktivitas kampus.</p>
            </div>

            <button type="button" class="btn btn-success shadow-sm" style="border-radius: 10px;" data-bs-toggle="modal" data-bs-target="#modalKategori">
                <i class="mr-1"></i> Tambah Kategori
            </button>
        </div>

        @if(session()->has('pesan'))
            <div class="alert alert-{{session()->get('pesan')[0]}} alert-dismissible fade show border-0 shadow-sm" role="alert">
                <i class="fas fa-check-circle mr-2"></i> {{session()->get('pesan')[1]}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card shadow border-0 overflow-hidden" style="border-radius: 15px;">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="dataTable" width="100%">
                        <thead style="background: linear-gradient(90deg, #5a67d8 0%, #4c51bf 100%); color: white;">
                        <tr>
                            <th class="py-3 border-0 text-center" width="70">No</th>
                            <th class="py-3 border-0">Nama Kategori</th>
                            <th class="py-3 border-0 text-center" width="200">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($kategori_kegiatan as $row)
                            <tr>
                                <td class="align-middle text-center font-weight-bold text-muted">
                                    {{ $loop->iteration }}
                                </td>
                                <td class="align-middle">
                                    <div class="d-flex align-items-center">
                                        <div class="category-icon mr-3">
                                            <i class="fas fa-tag" style="color: #5a67d8;"></i>
                                        </div>
                                        <span class="font-weight-bold text-dark">{{ $row->nama_kategori_kegiatan }}</span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="action-buttons">
                                        <button type="button"
                                                class="btn btn-sm btn-outline-warning mx-1 shadow-sm edit-button"
                                                data-bs-toggle="modal" data-bs-target="#modalEditKategori"
                                                data-id="{{ $row->id_kategori_kegiatan }}"
                                                data-nama="{{ $row->nama_kategori_kegiatan }}"
                                                title="Ubah">
                                            <i class="fa fa-edit"></i> Ubah
                                        </button>
                                        <a href="{{ route('kategori_kegiatan.hapus', $row->id_kategori_kegiatan) }}"
                                           class="btn btn-sm btn-outline-danger mx-1 shadow-sm btn-delete"
                                           title="Hapus">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalKategori" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" style="border-radius: 15px; overflow: hidden;">
                <div class="modal-header">
                    <h5 class="modal-title">Form Tambah Kategori</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body p-4">
                    <form method="POST" action="{{ route('kategori_kegiatan.prosesTambah') }}">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label font-weight-bold">Nama Kategori</label>
                            <input type="text" name="nama_kategori_kegiatan" value="{{old('nama_kategori_kegiatan')}}" class="form-control rounded-pill @error('nama_kategori_kegiatan') is-invalid @enderror" placeholder="Masukkan nama kategori...">
                            @error('nama_kategori_kegiatan')
                            <span style="color: red; font-weight: 600; font-size: 9pt">{{$message}}</span>
                            @enderror
                        </div>

                        <div class="modal-footer border-0 px-0 pb-0">
                            <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Tutup</button>
                            <button type="submit" class="btn btn-primary rounded-pill px-4">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalEditKategori" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content shadow border-0" style="border-radius: 15px; overflow: hidden;">
                <div class="modal-header text-dark">
                    <h5 class="modal-title font-weight-bold">Edit Kategori Kegiatan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" id="formEditKategori" action="{{ route('kategori_kegiatan.prosesUbah') }}">
                    @csrf
                    <div class="modal-body p-4">
                        <input type="hidden" name="id_kategori_kegiatan" id="edit_id">
                        <div class="mb-3">
                            <label class="font-weight-bold">Nama Kategori</label>
                            <input type="text" name="nama_kategori_kegiatan" id="edit_nama" class="form-control rounded-pill" required>
                        </div>
                    </div>
                    <div class="modal-footer border-0 px-0 pb-0 mx-3 mb-3">
                        <button type="button" class="btn btn-secondary rounded-pill px-4" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-warning font-weight-bold rounded-pill px-4 text-dark">Update Data</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <style>
        /* Styling tambahan agar lebih clean */
        .table thead th {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f8f9fc;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        .category-icon {
            width: 35px;
            height: 35px;
            background: #eef2ff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn-outline-warning:hover { color: #fff !important; }
        .btn-outline-danger:hover { color: #fff !important; }

        .rounded-pill {
            border-radius: 50px !important;
        }
    </style>

    <script>
        // SweetAlert Delete
        document.addEventListener('click', function (e) {
            if (e.target.closest('.btn-delete')) {
                e.preventDefault();
                const anchor = e.target.closest('.btn-delete');
                const href = anchor.getAttribute('href');
                Swal.fire({
                    title: 'Hapus Data?',
                    text: "Data ini akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#5a67d8', /* Tombol konfirmasi jadi ungu juga */
                    cancelButtonColor: '#858796',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) window.location.href = href;
                });
            }
        });

        // Ajax ubah
        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-button');
            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    document.getElementById('edit_id').value = this.getAttribute('data-id');
                    document.getElementById('edit_nama').value = this.getAttribute('data-nama');
                });
            });
        });
    </script>
@endsection
