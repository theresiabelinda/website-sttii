@extends('backend.layout.main')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h4>Data Dokumen Prodi S1</h4>

            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalSarjana">
                Tambah Dokumen
            </button>

        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th width="5%">No</th>
                    <th>Nama File</th>
                    <th>Lihat PDF</th>
                    <th width="15%">Aksi</th>
                </tr>
                </thead>
                <tbody>
                @foreach($data as $key => $item)
                    <tr>
                        <td>{{ $key + 1 }}</td>
                        <td>{{ $item->nama_file }}</td>
                        <td>
                            <a href="{{ route('storage.sarjana_view', ['path' => $item->path_file]) }}" target="_blank" class="btn btn-sm btn-info">
                                <i class="fa fa-eye"></i> Lihat Dokumen
                            </a>
                        </td>
                        <td>
                            <a href="{{ route('dokumen_sarjana.ubah', $item->id) }}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                            <a href="{{ route('dokumen_sarjana.hapus', $item->id) }}" class="btn btn-sm btn-danger" onclick="return confirm('Yakin hapus?')"><i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

            <!-- Awal Modal Tambah -->
            <div class="modal fade" id="modalSarjana" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="staticBackdropLabel">Form Tambah Dokumen</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('dokumen_sarjana.prosesTambah') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label>Nama Dokumen/File</label>
                                    <input type="text" name="nama_file" class="form-control" required>
                                </div>
                                <div class="form-group mb-3">
                                    <label>File PDF</label>
                                    <input type="file" name="file_pdf" class="form-control" accept=".pdf" required>
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
@endsection
