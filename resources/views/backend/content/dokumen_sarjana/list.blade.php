@extends('backend.layout.main')

@section('content')
    <style>
        /* 1. Memberikan jarak agar tidak terpotong header atas */
        .content-wrapper {
            padding-top: 25px;
            padding-bottom: 25px;
        }

        /* 2. Styling pembungkus tabel agar sudut melengkung */
        .table-container {
            border-radius: 12px; /* Atur tingkat kelengkungan di sini */
            overflow: hidden; /* Penting agar isi tabel tidak keluar dari lengkungan */
            border: 1px solid #dee2e6;
            box-shadow: 0 4px 6px rgba(0,0,0,0.05);
        }

        .table {
            margin-bottom: 0; /* Menghilangkan margin bawah default tabel */
            border: none;
        }

        /* 3. Styling header tabel warna ungu kebiruan */
        .table-purple {
            background-color: #5a67d8 !important;
            color: white !important;
        }

        .table-purple th {
            color: white !important;
            border: none !important;
            padding: 15px;
            font-weight: 600;
            vertical-align: middle;
        }

        /* Menghilangkan border double pada baris terakhir agar tetap rapi */
        .table-bordered > :not(caption) > * > * {
            border-width: 1px 0;
        }

        /* Memberikan efek hover yang lebih smooth */
        .table-hover tbody tr:hover {
            background-color: #f8faff;
        }
    </style>

    <div class="container-fluid content-wrapper">
        <div class="card shadow-sm border-0">
            <div class="card-header d-flex justify-content-between align-items-center bg-white py-3">
                <h4 class="mb-0 font-weight-bold text-primary">Data Dokumen Prodi S1</h4>

                <button type="button" class="btn btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#modalSarjana">
                    <i class="me-1"></i> Tambah Dokumen
                </button>
            </div>

            <div class="card-body">
                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-purple">
                            <tr>
                                <th width="5%" class="text-center">No</th>
                                <th>Nama File</th>
                                <th class="text-center">Lihat PDF</th>
                                <th width="15%" class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($data as $key => $item)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>{{ $item->nama_file }}</td>
                                    <td class="text-center">
                                        <a href="{{ route('storage.sarjana_view', ['path' => $item->path_file]) }}" target="_blank" class="btn btn-sm btn-info text-white rounded-pill px-3">
                                            <i class="fa fa-eye"></i> Lihat
                                        </a>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-warning edit-button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalEditDokumen"
                                                    data-id="{{ $item->id }}"
                                                    data-nama="{{ $item->nama_file }}"
                                                    title="Ubah">
                                                <i class="fa fa-edit"></i> Ubah
                                            </button>

                                            <a href="{{ route('dokumen_sarjana.hapus', $item->id) }}"
                                               class="btn btn-sm btn-outline-danger btn-delete" title="Hapus">
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

{{--                Modal Tambah--}}
                <div class="modal fade" id="modalSarjana" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content border-0">
                            <div class="modal-header">
                                <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Dokumen</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="{{ route('dokumen_sarjana.prosesTambah') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <label class="form-label fw-bold">Nama Dokumen/File</label>
                                        <input type="text" name="nama_file" class="form-control" placeholder="Masukkan nama file..." required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="form-label fw-bold">File PDF</label>
                                        <input type="file" name="file_pdf" class="form-control" accept=".pdf" required>
                                    </div>

                                    <div class="modal-footer px-0 pb-0 border-0">
                                        <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                        <button type="submit" class="btn btn-primary">Simpan Data</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

{{--                Modal Ubah--}}
                <div class="modal fade" id="modalEditDokumen" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header text-dark">
                                <h5 class="modal-title font-weight-bold ">
                                    <i class="mr-2"></i> Edit Dokumen
                                </h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <form method="POST" id="formEditDokumen" enctype="multipart/form-data">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="edit_id">
                                    <div class="mb-4">
                                        <label class="form-label font-weight-bold text-dark">Nama Dokumen</label>
                                        <input type="text" name="nama_file" id="edit_nama" class="form-control" required>
                                    </div>
                                    <div class="mb-2">
                                        <label class="form-label font-weight-bold text-dark">Ganti File (Opsional)</label>
                                        <input type="file" name="file_dokumen" class="form-control" id="inputEditFile">
                                    </div>
                                </div>
                                <div class="modal-footer bg-light border-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-warning font-weight-bold px-4 text-dark">
                                        Update
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
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

        document.addEventListener('DOMContentLoaded', function () {
            const editButtons = document.querySelectorAll('.edit-button');
            const formEdit = document.getElementById('formEditDokumen');
            const inputId = document.getElementById('edit_id');
            const inputNama = document.getElementById('edit_nama');

            editButtons.forEach(button => {
                button.addEventListener('click', function() {
                    inputId.value = this.getAttribute('data-id');
                    inputNama.value = this.getAttribute('data-nama');
                    formEdit.action = `{{ route('dokumen_sarjana.prosesUbah') }}`;
                });
            });
        });
    </script>
@endsection
