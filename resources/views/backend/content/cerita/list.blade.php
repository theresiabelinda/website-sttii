@extends('backend.layout.main')

@section('content')
    <div class="container-fluid content-wrapper">
        <div class="card shadow-sm border-0">
            <div class="card-header d-flex justify-content-between align-items-center bg-white py-3">
                <h4 class="mb-0 font-weight-bold text-primary">Data Cerita Alumni</h4>

                <button type="button" class="btn btn-success shadow-sm" data-bs-toggle="modal" data-bs-target="#modalTambahCerita">
                    <i class="me-1"></i> Tambah Cerita
                </button>
            </div>

            <div class="card-body">
                <div class="table-container">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead class="table-purple">
                            <tr>
                                <th width="5%" class="text-center">No</th>
                                <th width="10%">Foto</th>
                                <th>Biodata</th>
                                <th width="10%" class="text-center">Angkatan</th>
                                <th width="10%" class="text-center">Prodi</th>
                                <th width="15%" class="text-center">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cerita as $key => $item)
                                <tr>
                                    <td class="text-center">{{ $key + 1 }}</td>
                                    <td>
                                        <img src="{{ asset('storage/uploads/cerita/' . $item->foto) }}"
                                             class="img-thumbnail-custom border"
                                             alt="Foto {{ $item->nama }}"
                                             onerror="this.src='{{ asset('assets/img/no-image.png') }}'">
                                    </td>
                                    <td>
                                        <div class="fw-bold text-dark">{{ $item->nama }}</div>
                                        <small class="text-muted">{{ $item->pekerjaan }}</small>
                                    </td>
                                    <td class="text-center"><span class="badge bg-light text-dark border">{{ $item->angkatan }}</span></td>
                                    <td class="text-center">
                                        <span class="badge bg-primary text-uppercase">{{ $item->prodi }}</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <button type="button"
                                                    class="btn btn-sm btn-outline-warning edit-button"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#modalEditCerita"
                                                    data-id="{{ $item->id }}"
                                                    data-nama="{{ $item->nama }}"
                                                    data-angkatan="{{ $item->angkatan }}"
                                                    data-pekerjaan="{{ $item->pekerjaan }}"
                                                    data-prodi="{{ $item->prodi }}"
                                                    data-pesan="{{ $item->kesan_pesan }}"
                                                    title="Ubah">
                                                <i class="fa fa-edit"></i>
                                            </button>

                                            <a href="{{ route('cerita.hapus', $item->id) }}"
                                               class="btn btn-sm btn-outline-danger btn-delete" title="Hapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mt-3 px-2">
                    <div class="text-muted small">
                        Menampilkan {{ $cerita->firstItem() }} sampai {{ $cerita->lastItem() }} dari {{ $cerita->total() }} data
                    </div>
                    <div>
                        {{ $cerita->links('pagination::bootstrap-5') }}
                    </div>
                </div>

                <script src="https://cdn.ckeditor.com/ckeditor5/39.0.1/classic/ckeditor.js"></script>

                <div class="modal fade" id="modalTambahCerita" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg"> <div class="modal-content border-0">
                            <div class="modal-header">
                                <h5 class="modal-title">Form Tambah Cerita Alumni</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                            </div>
                            <form method="POST" action="{{ route('cerita.prosesTambah') }}" enctype="multipart/form-data" id="formTambah">
                                @csrf
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Nama Lengkap</label>
                                                <input type="text" name="nama" class="form-control" placeholder="Nama alumni..." required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Angkatan</label>
                                                <input type="number" name="angkatan" class="form-control" placeholder="2018" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold">Prodi</label>
                                                <select name="prodi" class="form-select" required>
                                                    <option value="S1">S1 Teologi</option>
                                                    <option value="S2">S2 Teologi</option>
                                                    <option value="S3">S3 Teologi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" class="form-control" placeholder="Contoh: Pendeta / Guru Teologi" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Foto Alumni</label>
                                        <input type="file" name="foto" class="form-control" accept="image/*" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold">Kesan & Pesan</label>
                                        <textarea name="kesan_pesan" id="editorTambah"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Tutup</button>
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <style>
                    /* Mengatur tinggi minimal editor agar terlihat lebih besar */
                    .ck-editor__editable_inline {
                        min-height: 250px;
                    }
                </style>

                <script>
                    // Inisialisasi CKEditor
                    ClassicEditor
                        .create(document.querySelector('#editorTambah'), {
                            toolbar: ['heading', '|', 'bold', 'italic', 'link', 'bulletedList', 'numberedList', 'blockQuote', 'undo', 'redo'],
                        })
                        .then(editor => {
                            console.log('Editor was initialized');
                        })
                        .catch(error => {
                            console.error(error);
                        });
                </script>

                <div class="modal fade" id="modalEditCerita" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content border-0 shadow">
                            <div class="modal-header">
                                <h5 class="modal-title font-weight-bold">Edit Cerita Alumni</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <form method="POST" action="{{ route('cerita.prosesUbah') }}" enctype="multipart/form-data" id="formEdit">
                                @csrf
                                <div class="modal-body">
                                    <input type="hidden" name="id" id="edit_id">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-dark">Nama Lengkap</label>
                                                <input type="text" name="nama" id="edit_nama" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-dark">Angkatan</label>
                                                <input type="number" name="angkatan" id="edit_angkatan" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="mb-3">
                                                <label class="form-label fw-bold text-dark">Prodi</label>
                                                <select name="prodi" id="edit_prodi" class="form-select" required>
                                                    <option value="S1">S1 Teologi</option>
                                                    <option value="S2">S2 Teologi</option>
                                                    <option value="S3">S3 Teologi</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-dark">Pekerjaan</label>
                                        <input type="text" name="pekerjaan" id="edit_pekerjaan" class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-dark">Ganti Foto (Opsional)</label>
                                        <input type="file" name="foto" class="form-control" accept="image/*">
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label fw-bold text-dark">Kesan & Pesan</label>
                                        <textarea name="kesan_pesan" id="editorEdit"></textarea>
                                    </div>
                                </div>
                                <div class="modal-footer bg-light border-0">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-warning font-weight-bold text-dark">Update Cerita</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.ckeditor.com/classic/12.4.0/classic/ckeditor.js"></script>
    <script>
        let instanceEditorEdit;

        // 1. Inisialisasi CKEditor untuk Modal Edit (Sediakan satu instance)
        ClassicEditor
            .create(document.querySelector('#editorEdit'))
            .then(editor => {
                instanceEditorEdit = editor;
            })
            .catch(error => { console.error(error); });

        // 2. Logika Edit (Memasukkan data ke modal)
        document.querySelectorAll('.edit-button').forEach(button => {
            button.addEventListener('click', function() {
                // Ambil data dari atribut button
                const id = this.getAttribute('data-id');
                const nama = this.getAttribute('data-nama');
                const angkatan = this.getAttribute('data-angkatan');
                const pekerjaan = this.getAttribute('data-pekerjaan');
                const prodi = this.getAttribute('data-prodi');
                const pesan = this.getAttribute('data-pesan');

                // Isi input teks biasa
                document.getElementById('edit_id').value = id;
                document.getElementById('edit_nama').value = nama;
                document.getElementById('edit_angkatan').value = angkatan;
                document.getElementById('edit_pekerjaan').value = pekerjaan;

                // FIX PRODI: Gunakan trim() untuk menghindari spasi tak terlihat
                const selectProdi = document.getElementById('edit_prodi');
                selectProdi.value = prodi.trim();

                // FIX CKEDITOR EDIT: Gunakan .setData() bukan .value
                if (instanceEditorEdit) {
                    instanceEditorEdit.setData(pesan);
                }
            });
        });

        // 3. Logika Hapus (SweetAlert)
        document.querySelectorAll('.btn-delete').forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault();
                const href = this.getAttribute('href');
                Swal.fire({
                    title: 'Hapus Cerita?',
                    text: "Data alumni ini akan dihapus permanen!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#e74a3b',
                    confirmButtonText: 'Ya, Hapus!',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) window.location.href = href;
                });
            });
        });
    </script>

    <style>
        .content-wrapper { padding-top: 25px; padding-bottom: 25px; }
        .table-container { border-radius: 12px; overflow: hidden; border: 1px solid #dee2e6; box-shadow: 0 4px 6px rgba(0,0,0,0.05); }
        .table { margin-bottom: 0; border: none; }
        .table-purple { background-color: #5a67d8 !important; color: white !important; }
        .table-purple th { color: white !important; padding: 15px; font-weight: 600; vertical-align: middle; }
        .table-hover tbody tr:hover { background-color: #f8faff; }
        .img-thumbnail-custom { width: 50px; height: 50px; object-fit: cover; border-radius: 8px; }
    </style>
@endsection
