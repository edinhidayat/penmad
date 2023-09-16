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
    <div class="col-lg text-center mt-3">
        <h3>Menu Download</h3>
        <a href="/admin/download/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i>&nbsp;&nbsp; Tambah Data</a>
    </div>
</div>


<div class="row mt-3">
    <div class="col-lg">
        <div id="informasi">
            <table id="example1" class="table table-bordered table-striped bg-light">
                <thead>
                    <tr>
                        <th style="width: 6%;">No</th>
                        <th>Keterangan</th>
                        <th style="width: 15%;">Petugas</th>
                        <th style="width: 18%;">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($download as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->judul }}<br>
                            <form action="/admin/download/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                @method('get')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-info"><i class="fas fa-download"></i>&nbsp;&nbsp;&nbsp; Download</button>
                            </form>
                        </td>
                        <td>{{ $item->petugas }}<br>
                            Created : {{ carbon\Carbon::parse($item->created_at)->format('d-m-Y') }}
                        </td>
                        <td>
                            <a href="/admin/download/{{ $item->id }}/edit" style="text-decoration: none;"
                                class="btn btn-outline-info btn-sm mb-1 mr-2"><i class="fas fa-edit"></i> Ubah</a>
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


<!-- Modal HAPUS -->
@foreach ($download as $item)
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
            Apakah Anda yakin akan menghapus Data : {{ $item->judul }} ???
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="/admin/download/{{ $item->id }}" method="post">
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