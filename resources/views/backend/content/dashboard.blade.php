@extends('backend/layout/main')

@section('content')
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between">
            <div class="mt-4">
                <h1 class="fw-bold">Dashboard</h1>
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item active">Visualisasi Data & Manajemen Konten</li>
                </ol>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card card-gradient-primary h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="stat-label text-primary">Total Pengunjung</div>
                                <div class="h4 mb-0 fw-bold text-gray-800">{{ number_format($total_pengunjung) }}</div>
                                <div class="mt-1">
                                    @if($selisih >= 0)
                                        <span class="text-success small fw-bold"><i class="fas fa-arrow-up"></i> {{ number_format($selisih, 1) }}%</span>
                                    @else
                                        <span class="text-danger small fw-bold"><i class="fas fa-arrow-down"></i> {{ number_format(abs($selisih), 1) }}%</span>
                                    @endif
                                </div>
                            </div>
                            <div class="icon-box bg-primary">
                                <i class="fas fa-users fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card stat-card card-gradient-success h-100">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="stat-label text-success">Total Berita</div>
                                <div class="h4 mb-0 fw-bold text-gray-800">{{ $total_berita }}</div>
                                <div class="text-muted small mt-1">Aktif di sistem</div>
                            </div>
                            <div class="icon-box bg-success">
                                <i class="fas fa-newspaper fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <a href="{{ url('backend/foto-kegiatan') }}" class="text-decoration-none">
                    <div class="card stat-card card-gradient-info h-100">
                        <div class="card-body d-flex align-items-center justify-content-between">
                            <div>
                                <div class="stat-label text-info">Galeri Foto</div>
                                <div class="h5 mb-0 fw-bold text-gray-800">Foto Kegiatan</div>
                            </div>
                            <div class="icon-box bg-info">
                                <i class="fas fa-images fa-2x text-white"></i>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>

{{--        Table Tambah Footer--}}
        <div class="row">
            <div class="col-12">
                <div class="card shadow-sm mb-4 custom-card">
                    <div class="card-header bg-white py-3 d-flex align-items-center justify-content-between">
                        <h6 class="m-0 fw-bold text-primary"><i class="fas fa-table me-2"></i>Data Footer Terbaru</h6>
                        <button type="button" class="btn btn-success btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#modalFooter">
                            <i class="me-1"></i> Tambah Footer
                        </button>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover align-middle">
                                <thead class="table-custom-header">
                                <tr class="text-center">
                                    <th width="5%">No</th>
                                    <th width="20%">Tanggal Upload</th>
                                    <th width="60%">Preview Foto</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                                </thead>
                                <tbody>
                                @forelse($data_footer ?? [] as $index => $item)
                                    <tr>
                                        <td class="text-center">{{ $index + 1 }}</td>
                                        <td class="text-center">{{ \Carbon\Carbon::parse($item->tanggal_upload)->format('d M Y') }}</td>
                                        <td class="text-center">
                                            @if($item->foto)
                                                <img src="{{ asset('uploads/footer/'.$item->foto) }}" class="img-preview-table" alt="foto">
                                            @else
                                                <span class="text-muted small fst-italic">Tidak ada foto</span>
                                            @endif
                                        </td>
                                        <td class="text-center">
                                            <a href="{{ route('dashboard.hapus', $item->id_footer) }}"
                                               class="btn btn-outline-danger btn-sm btn-hapus"
                                               title="Hapus">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="text-center text-muted py-5">Belum ada data footer.</td>
                                    </tr>
                                @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

{{--    Modal Footer--}}
    <div class="modal fade" id="modalFooter" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('dashboard.prosesTambah') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title">Tambah Footer</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Upload</label>
                            <input type="date" name="tanggal_upload" class="form-control" required value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Upload Foto Footer</label>
                            <input type="file" name="foto" id="fotoInput" class="form-control" accept="image/*" required>
                            <div class="form-text">Format: JPG, PNG, JPEG. Maks: 2MB.</div>
                        </div>
                        <div class="mt-3 text-center d-none" id="previewContainer">
                            <p class="small text-muted mb-1">Preview:</p>
                            <img id="imagePreview" src="#" class="img-fluid rounded border" style="max-height: 150px;">
                        </div>
                    </div>
                    <div class="modal-footer bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success px-4"><i class="fas fa-save me-1"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

{{--    Modal Header--}}
    <div class="row">
        <div class="col-12">
            <div class="card shadow-sm mb-4 custom-card">
                <div class="card-header bg-white py-3 d-flex align-items-center justify-content-between">
                    <h6 class="m-0 fw-bold text-primary"><i class="fas fa-table me-2"></i>Data Header Terbaru</h6>
                    <button type="button" class="btn btn-success btn-sm rounded-pill px-3" data-bs-toggle="modal" data-bs-target="#modalTambahHeader">
                        <i class="me-1"></i> Tambah Header
                    </button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover align-middle">
                            <thead class="table-custom-header">
                            <tr class="text-center">
                                <th width="5%">No</th>
                                <th width="20%">Tanggal Upload</th>
                                <th width="60%">Preview Foto</th>
                                <th width="15%">Aksi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse($data_header ?? [] as $index => $item)
                                <tr>
                                    <td class="text-center">{{ $index + 1 }}</td>
                                    <td class="text-center">{{ \Carbon\Carbon::parse($item->tanggal_upload)->format('d M Y') }}</td>
                                    <td class="text-center">
                                        @if($item->foto)
                                            <img src="{{ asset('uploads/header/'.$item->foto) }}" class="img-preview-table" alt="foto">
                                        @else
                                            <span class="text-muted small fst-italic">Tidak ada foto</span>
                                        @endif
                                    </td>
                                    <td class="text-center">
                                        <a href="{{ route('dashboard.hapusHeader', $item->id_header) }}"
                                           class="btn btn-outline-danger btn-sm btn-hapus"
                                           title="Hapus">
                                            <i class="fa fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4" class="text-center text-muted py-5">Belum ada data header .</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="modal fade" id="modalTambahHeader" data-bs-backdrop="static" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog">
            <form action="{{ route('dashboard.tambahHeader') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
                    <div class="modal-header bg-success text-white">
                        <h5 class="modal-title">Tambah Header</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
                    </div>
                    <div class="modal-body p-4">
                        <div class="mb-3">
                            <label class="form-label fw-bold">Tanggal Upload</label>
                            <input type="date" name="tanggal_upload" class="form-control" required value="{{ date('Y-m-d') }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-bold">Upload Foto Footer</label>
                            <input type="file" name="foto" id="fotoInput" class="form-control" accept="image/*" required>
                            <div class="form-text">Format: JPG, PNG, JPEG. Maks: 2MB.</div>
                        </div>
                        <div class="mt-3 text-center d-none" id="previewContainer">
                            <p class="small text-muted mb-1">Preview:</p>
                            <img id="imagePreview" src="#" class="img-fluid rounded border" style="max-height: 150px;">
                        </div>
                    </div>
                    <div class="modal-header bg-light">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-success px-4"><i class="fas fa-save me-1"></i> Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    @push('scripts')
        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            // Chart Setup
            const ctx = document.getElementById('visitorChart').getContext('2d');
            new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: {!! json_encode($label_grafik) !!},
                    datasets: [{
                        label: 'Jumlah Penonton',
                        data: {!! json_encode($data_grafik) !!},
                        backgroundColor: '#6c5ce7',
                        borderRadius: 5,
                    }]
                },
                options: {
                    maintainAspectRatio: false,
                    scales: { y: { beginAtZero: true } }
                }
            });

            // Image Preview Logic
            document.getElementById('fotoInput').onchange = evt => {
                const [file] = evt.target.files;
                if (file) {
                    document.getElementById('previewContainer').classList.remove('d-none');
                    document.getElementById('imagePreview').src = URL.createObjectURL(file);
                }
            }

            $(document).ready(function() {
                // Fungsi Preview Gambar Instan
                $('#inputFoto').change(function() {
                    const file = this.files[0];
                    if (file) {
                        let reader = new FileReader();
                        reader.onload = function(e) {
                            $('#imgPreview').attr('src', e.target.result).removeClass('d-none');
                            $('#placeholderText').addClass('d-none');
                        }
                        reader.readAsDataURL(file);
                    }
                });

                // Proses Simpan via AJAX
                $('#formHeader').on('submit', function(e) {
                    e.preventDefault();

                    let formData = new FormData(this);
                    $('#btnSimpan').prop('disabled', true).html('<i class="fa fa-spinner fa-spin me-2"></i>Mengirim...');

                    $.ajax({
                        url: "{{ route('dashboard.tambahHeader') }}", // Sesuaikan dengan nama route di web.php
                        type: "POST",
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response) {
                            // Notifikasi Sukses
                            alert("Data Berhasil Disimpan!");

                            // Reset Form & Close Modal
                            $('#modalTambahHeader').modal('hide');
                            $('#formHeader')[0].reset();
                            $('#imgPreview').addClass('d-none');
                            $('#placeholderText').removeClass('d-none');
                            $('#btnSimpan').prop('disabled', false).text('Simpan Data');

                            // Opsional: Reload halaman atau update tabel otomatis
                            location.reload();
                        },
                        error: function(xhr) {
                            alert("Gagal menyimpan data. Pastikan file adalah gambar.");
                            $('#btnSimpan').prop('disabled', false).text('Simpan Data');
                        }
                    });
                });
            });

            $(document).on('click', '.btn-hapus', function(e) {
                e.preventDefault();
                const href = $(this).attr('href');

                Swal.fire({
                    title: 'Apakah Anda yakin?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        window.location.href = href;
                    }
                })
            });
        </script>
    @endpush

    <style>
        .custom-card { border-radius: 15px; border: none; }
        .stat-card { border-radius: 15px; border: 0; transition: transform 0.2s; box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075); }
        .stat-card:hover { transform: translateY(-5px); box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1) !important; }
        .stat-label { font-size: 0.75rem; text-transform: uppercase; font-weight: bold; margin-bottom: 0.25rem; }

        .card-gradient-primary { background: linear-gradient(135deg, #e0e7ff 0%, #ffffff 100%); }
        .card-gradient-success { background: linear-gradient(135deg, #dcfce7 0%, #ffffff 100%); }
        .card-gradient-info { background: linear-gradient(135deg, #e0f2fe 0%, #ffffff 100%); }

        .icon-box { padding: 1rem; border-radius: 0.75rem; box-shadow: 0 4px 6px -1px rgba(0,0,0,0.1); }
        .table-custom-header { background: linear-gradient(90deg, #5a67d8 0%, #4c51bf 100%); color: white; }
        .img-preview-table { max-height: 80px; width: 100%; max-width: 200px; border-radius: 8px; object-fit: contain; border: 1px solid #eee; }
    </style>
@endsection
