@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Kategori Kegiatan</h1>
                <p class="text-muted small mb-0">Kelola pengelompokan berita dan aktivitas kampus.</p>
            </div>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalKategori">
                Tambah Kategori
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

        <div class="card shadow border-0 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="dataTable" width="100%">
                        <thead class="bg-light text-dark">
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
                                            <i class="fas fa-tag text-primary"></i>
                                        </div>
                                        <span class="font-weight-bold text-dark">{{ $row->nama_kategori_kegiatan }}</span>
                                    </div>
                                </td>
                                <td class="align-middle text-center">
                                    <div class="action-buttons">
                                        <a href="{{ route('kategori_kegiatan.ubah', $row->id_kategori_kegiatan) }}"
                                           class="btn btn-sm btn-outline-warning mx-1 shadow-sm"
                                           title="Ubah">
                                            <i class="fa fa-edit"></i> Ubah
                                        </a>
                                        <a href="{{ route('kategori_kegiatan.hapus', $row->id_kategori_kegiatan) }}"
                                           onclick="return confirm('Hapus kategori ini?')"
                                           class="btn btn-sm btn-outline-danger mx-1 shadow-sm"
                                           title="Hapus">
                                            <i class="fa fa-trash"></i> Hapus
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <!-- Awal Modal Tambah -->
                    <div class="modal fade" id="modalKategori" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Kategori</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    <form method="POST" action="{{ route('kategori_kegiatan.prosesTambah') }}">
                                    @csrf
                                        <div class="mb-3">
                                            <label class="form-label">Nama Kategori</label>
                                            <input type="text" name="nama_kategori_kegiatan" value="{{old('nama_kategori_kegiatan')}}" class="form-control @error('nama_kategori_kegiatan') is-invalid @enderror">
                                            @error('nama_kategori_kegiatan')
                                            <span style="color: red; font-weight: 600; font-size: 9pt">{{$message}}</span>
                                            @enderror
                                        </div>

                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Simpan</button>
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Akhir Modal Tambah -->

                </div>
            </div>
        </div>
    </div>

    <style>
        /* Styling Header Tabel */
        .table thead th {
            font-size: 0.8rem;
            text-transform: uppercase;
            letter-spacing: 1px;
            font-weight: 700;
        }

        /* Efek Hover Baris */
        .table tbody tr {
            transition: all 0.3s ease;
        }

        .table tbody tr:hover {
            background-color: #f8f9fc;
            transform: translateY(-2px);
            box-shadow: 0 4px 10px rgba(0,0,0,0.05);
        }

        /* Icon Dekoratif */
        .category-icon {
            width: 35px;
            height: 35px;
            background: #eef2ff;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Custom Buttons */
        .btn-outline-warning:hover { color: #fff !important; }
        .btn-outline-danger:hover { color: #fff !important; }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0,0,0,.075)!important;
        }
    </style>
@endsection
