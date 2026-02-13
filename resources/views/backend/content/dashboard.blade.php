@extends('backend/layout/main')
@section('content')

    <main>
        <div class="container-fluid px-4">
            <h1 class="mt-4 fw-bold">Dashboard</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Visualisasi Data & Manajemen Konten</li>
            </ol>

            <div class="row">
                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 stat-card" style="border-radius: 15px; background: linear-gradient(135deg, #e0e7ff 0%, #ffffff 100%);">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1" style="font-size: 0.75rem;">Total Pengunjung</div>
                                    <div class="h4 mb-0 font-weight-bold text-gray-800">{{ number_format($total_pengunjung) }}</div>
                                    <div class="mt-1">
                                        @if($selisih >= 0)
                                            <span class="text-success small fw-bold"><i class="fas fa-arrow-up"></i> {{ number_format($selisih, 1) }}%</span>
                                        @else
                                            <span class="text-danger small fw-bold"><i class="fas fa-arrow-down"></i> {{ number_format(abs($selisih), 1) }}%</span>
                                        @endif
                                    </div>
                                </div>
                                <div class="bg-primary p-3 rounded-3 shadow-sm">
                                    <i class="fas fa-users fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <div class="card border-0 shadow-sm h-100 stat-card" style="border-radius: 15px; background: linear-gradient(135deg, #dcfce7 0%, #ffffff 100%);">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <div>
                                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1" style="font-size: 0.75rem;">Total Berita</div>
                                    <div class="h4 mb-0 font-weight-bold text-gray-800">{{ $total_berita }}</div>
                                    <div class="text-muted small mt-1">Aktif di sistem</div>
                                </div>
                                <div class="bg-success p-3 rounded-3 shadow-sm">
                                    <i class="fas fa-newspaper fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6 mb-4">
                    <a href="{{ url('backend/foto-kegiatan') }}" class="text-decoration-none">
                        <div class="card border-0 shadow-sm h-100 stat-card" style="border-radius: 15px; background: linear-gradient(135deg, #e0f2fe 0%, #ffffff 100%);">
                            <div class="card-body d-flex align-items-center justify-content-between">
                                <div>
                                    <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Galeri Foto</div>
                                    <div class="h5 mb-0 font-weight-bold text-gray-800">Foto Kegiatan</div>
                                </div>
                                <div class="bg-info p-3 rounded-3 shadow-sm">
                                    <i class="fas fa-images fa-2x text-white"></i>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-xl-8 col-lg-7">
                    <div class="card shadow-sm mb-4" style="border-radius: 15px; border: none;">
                        <div class="card-header bg-transparent py-3">
                            <h6 class="m-0 font-weight-bold text-primary">
                                <i class="fas fa-chart-bar me-2"></i>Statistik Pengunjung Bulanan
                            </h6>
                        </div>
                        <div class="card-body">
                            <div style="height: 300px;">
                                <canvas id="visitorChart"></canvas>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-5">
                    <div class="card shadow-sm mb-4" style="border-radius: 15px; border: none;">
                        <div class="card-header bg-transparent py-3">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-rocket me-2"></i>Akses Cepat</h6>
                        </div>
                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action py-3 px-4 border-0">
                                    <i class="fas fa-plus-circle me-3 text-primary"></i> Tulis Berita Baru
                                </a>
                                <a href="{{ url('backend/foto-kegiatan') }}" class="list-group-item list-group-item-action py-3 px-4 border-0 border-top">
                                    <i class="fas fa-camera me-3 text-info"></i> Upload Dokumentasi
                                </a>
                                <a href="{{ url('backend/footer') }}" class="list-group-item list-group-item-action py-3 px-4 border-0 border-top">
                                    <i class="fas fa-cog me-3 text-warning"></i> Edit Kontak Footer
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="card shadow-sm mb-4" style="border-radius: 15px; border: none;">
                        <div class="card-header bg-white py-3 d-flex align-items-center justify-content-between">
                            <h6 class="m-0 font-weight-bold text-primary"><i class="fas fa-table me-2"></i>Data Footer Terbaru</h6>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalFooter">
                                Tambah Footer
                            </button>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered table-hover align-middle" width="100%" cellspacing="0">
                                    <thead class="table-light">
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
                                                    <img src="{{ asset('uploads/footer/'.$item->foto) }}" alt="foto"
                                                         style="max-height: 80px; width: 100%; max-width: 400px; border-radius: 8px; object-fit: contain; border: 1px solid #eee;">
                                                @else
                                                    <span class="text-muted small italic">Tidak ada foto</span>
                                                @endif
                                            </td>
                                            <td class="text-center">
                                                <div class="btn-group shadow-sm">
                                                    <a href="{{ route('dashboard.hapus', $item->id_footer) }}"
                                                       class="btn btn-outline-danger btn-sm border"
                                                       onclick="return confirm('Hapus data footer ini?')"
                                                       title="Hapus">
                                                        <i class="fa fa-trash"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-muted py-4">
                                                <i class="mb-2 d-block fa-2x"></i>
                                                Belum ada data footer.
                                            </td>
                                        </tr>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>

                                <!-- Awal Modal -->
                                <div class="modal fade" id="modalFooter" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <form action="{{ route('dashboard.prosesTambah') }}" method="POST" enctype="multipart/form-data">
                                            @csrf
                                            <div class="modal-content border-0 shadow-lg" style="border-radius: 15px;">
                                                <div class="modal-header" style="border-top-left-radius: 15px; border-top-right-radius: 15px;">
                                                    <h5 class="modal-title" id="staticBackdropLabel">Tambah Footer</h5>
                                                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body p-4">
                                                    <div class="mb-3">
                                                        <label for="tanggal_upload" class="form-label fw-bold">Tanggal Upload</label>
                                                        <input type="date" name="tanggal_upload" id="tanggal_upload" class="form-control" required value="{{ date('Y-m-d') }}">
                                                        <small class="text-muted">Pilih tanggal publikasi footer.</small>
                                                    </div>

                                                    <div class="mb-3">
                                                        <label for="foto" class="form-label fw-bold">Upload Foto Footer</label>
                                                        <input type="file" name="foto" id="foto" class="form-control" accept="image/*" required>
                                                        <div class="form-text">Format: JPG, PNG, JPEG. Maks: 2MB.</div>
                                                    </div>

                                                    <div class="mt-3 text-center d-none" id="previewContainer">
                                                        <p class="small text-muted mb-1">Preview:</p>
                                                        <img id="imagePreview" src="#" alt="preview" style="max-height: 150px; border-radius: 10px; border: 2px solid #ddd;">
                                                    </div>
                                                </div>
                                                <div class="modal-footer bg-light" style="border-bottom-left-radius: 15px; border-bottom-right-radius: 15px;">
                                                    <button type="submit" class="btn btn-success px-4"><i class="fas fa-save me-1"></i> Simpan</button>
                                                    <button type="button" class="btn btn-secondary px-4" data-bs-dismiss="modal">Batal</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- Akhir Modal -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
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
                scales: {
                    y: {
                        beginAtZero: true,
                        min: 0,
                        max: 10000,
                        ticks: {
                            stepSize: 2000
                        }
                    }
                }
            }
        });
    </script>

    <style>
        .stat-card { transition: all 0.2s; }
        .stat-card:hover { transform: translateY(-5px); box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.1) !important; }
    </style>

@endsection
