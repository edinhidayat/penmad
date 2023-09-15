@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col-4 mt-3">
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

<div class="row">
    <div class="col text-center mt-3 mb-3">
        <h3>Daftar Informasi</h3>
        <a href="/admin/informasi/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>&nbsp;&nbsp; Tambah Informasi</a>
    </div>
</div>

<div class="row mt-3">
    <div class="col-lg">
        <div id="informasi">
            <table id="example1" class="table table-bordered table-striped bg-light">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Perihal</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($informasi as $item)
                    <tr>
                        <td style="width: 8%;">{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}</td>
                        <td style="width: 28%;">
                            <button type="button" class="btn btn-outline-info btn-sm mb-1 mr-2" data-toggle="modal"
                                data-target="#lihat{{ $item->id }}"><i class="far fa-eye"></i> Lihat
                            </button>
                            <a href="/admin/informasi/{{ $item->id }}/edit" style="text-decoration: none;"
                                class="btn btn-outline-dark btn-sm mb-1 mr-2"><i class="fas fa-edit"></i> Ubah</a>
                            <button type="button" class="btn btn-sm btn-outline-danger mb-1" data-toggle="modal"
                                data-target="#hps{{ $item->id }}"><i class="fas fa-trash-alt"></i> Hapus
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>




<!-- Modal LIHAT -->
@foreach ($informasi as $item)
<div class="modal fade" id="lihat{{ $item->id }}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Preview</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md">
                        <div>
                            <table style="border: 0">
                                <tr>
                                    <td>Perihal</td>
                                    <td>: {{ $item->judul }}</td>
                                </tr>
                                <tr>
                                    <td>Petugas &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                    <td>: {{ $item->petugas }}</td>
                                </tr>
                                <tr>
                                    <td>Dibuat</td>
                                    <td>: {{ carbon\Carbon::parse($item->created_at)->format('d F Y') }} | Updated : {{ carbon\Carbon::parse($item->updated_at)->format('d F Y') }}</td>
                                </tr>
                            </table>
                            <hr>
                        </div>
                        <div class="mt-3">
                            <p class="mb-0">Informasi :</p>
                            {!! $item->description !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- Modal HAPUS -->
@foreach ($informasi as $item)
<div class="modal fade" id="hps{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah Anda yakin akan menghapus Informasi Perihal : {{ $item->judul }} ???
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="/admin/informasi/{{ $item->id }}" method="post">
                @method('delete')
                @csrf
                <button type="submit" name="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
  </div>
</div>
@endforeach


@endsection