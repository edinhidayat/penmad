@extends('dashboard.atemplate.index')
@section('konten')
    <div class="row">
        <div class="col-lg-8 mt-3">
            <div class="card">
                <div class="card-body">
                    <h5 class="mb-0"><b>Kategori Laporan</b></h5>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    <div class="row">
                        <div class="col-lg">
                            @if (session()->has('suksestambah'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>Data baru berhasil ditambahkan.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session()->has('suksesubah'))
                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                    <strong>Data berhasil diubah.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session()->has('sukseshapus'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Data sudah dihapus.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                            @if (session()->has('datatidakada'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>Data tidak ditemukan.</strong>
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            @endif
                        </div>
                    </div>

                    <a href="/admin/katlap/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a>
                    <table id="example3" class="table table-bordered table-striped bg-light">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Kategori Laporan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($katlap as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->jenislaporan }}</td>
                                    <td class="text-center">
                                        <a href="/admin/katlap/{{ $item->id }}/edit" style="text-decoration: none;"
                                            class="btn btn-warning btn-sm mb-1 d-block-inline"><i class="fas fa-edit"></i>
                                            Ubah</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
