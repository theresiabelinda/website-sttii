@extends('backend.layout.main')

@section('content')
    <div class="container-fluid mt-4">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <div>
                <h1 class="h3 mb-0 text-gray-800 font-weight-bold">Manajemen Berita</h1>
                <p class="text-muted small mb-0">Kelola semua publikasi berita dan artikel kegiatan di sini.</p>
            </div>
            <a href="{{ route('berita.tambah') }}" class="btn btn-primary shadow-sm px-4">
                <i></i> Berita
            </a>
        </div>

        @if(session()->has('pesan'))
            <div class="alert alert-{{session()->get('pesan')[0]}} alert-dismissible fade show border-0 shadow-sm" role="alert">
                <i class="fas fa-info-circle mr-2"></i> {{session()->get('pesan')[1]}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="card shadow border-0 overflow-hidden">
            <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table table-hover mb-0" id="dataTable" width="100%">
                        <thead class="bg-light">
                        <tr class="text-dark">
                            <th class="border-0 py-3 text-center" width="50">#</th>
                            <th class="border-0 py-3 text-center">Thumbnail</th>
                            <th class="border-0 py-3">Informasi Berita</th>
                            <th class="border-0 py-3 text-center">Kategori</th>
                            <th class="border-0 py-3 text-center" width="150">Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($berita as $row)
                            <tr>
                                <td class="text-center align-middle font-weight-bold text-muted">{{ $loop->iteration }}</td>
                                <td class="text-center align-middle">
                                    <div class="img-container shadow-sm border rounded">
                                        <img src="{{ route('storage', $row->gambar_berita) }}"
                                             alt="cover"
                                             class="img-fluid rounded zoomable-img">
                                    </div>
                                </td>
                                <td class="align-middle">
                                    <div class="font-weight-bold text-dark text-truncate" style="max-width: 350px;">
                                        {{ $row->judul_berita }}
                                    </div>
                                    <div class="small text-muted mt-1">
                                        <i class="far fa-calendar-alt mr-1"></i> Tahun Publikasi: <strong>{{ $row->tahun }}</strong>
                                    </div>
                                </td>
                                <td class="text-center align-middle">
                                <span class="badge badge-soft-info px-3 py-2">
                                    {{ $row->kategori_kegiatan->nama_kategori_kegiatan ?? 'Tanpa Kategori' }}
                                </span>
                                </td>
                                <td class="text-center align-middle">
                                    <div class="btn-group shadow-sm border rounded overflow-hidden">
                                        <a href="{{ route('berita.ubah', $row->id_berita) }}"
                                           class="btn btn-white btn-sm px-3" title="Edit Berita">
                                            <i class="fa fa-edit text-warning"></i>
                                        </a>
                                        <a href="{{ route('berita.hapus', $row->id_berita) }}"
                                           class="btn btn-white btn-sm px-3"
                                           onclick="return confirm('Hapus berita ini?')" title="Hapus Berita">
                                            <i class="fa fa-trash text-danger"></i>
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

    <style>
        /* Custom Styling */
        .table thead th {
            font-size: 0.85rem;
            letter-spacing: 0.05em;
            text-transform: uppercase;
        }

        .table tbody tr:hover {
            background-color: rgba(78, 115, 223, 0.05);
            transition: 0.2s;
        }

        /* Image Styling */
        .img-container {
            width: 65px;
            height: 45px;
            overflow: hidden;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f8f9fc;
        }

        .zoomable-img {
            transition: transform .3s ease;
            object-fit: cover;
            width: 100%;
            height: 100%;
        }

        .img-container:hover .zoomable-img {
            transform: scale(1.2);
        }

        /* Badge Styling */
        .badge-soft-info {
            background-color: #e0f2fe;
            color: #0284c7;
            font-weight: 600;
            border-radius: 6px;
        }

        /* Button Group Styling */
        .btn-white {
            background: #fff;
            border: none;
        }

        .btn-white:hover {
            background: #f8f9fa;
        }

        .btn-group .btn:not(:last-child) {
            border-right: 1px solid #e3e6f0;
        }
    </style>
@endsection
