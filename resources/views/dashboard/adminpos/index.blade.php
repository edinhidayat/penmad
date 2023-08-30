@extends('dashboard.atemplate.index')
@section('konten')
  <div class="row">
    <div class="col mt-3">

      <div class="card">
        <div class="card-body">
              <h4 class="mb-0"><b>Daftar Berita</b></h4>
        </div>
      </div>

      <div class="row">
        <div class="col">

          <div class="card">
            <div class="card-body">

              <div class="row">
                <div class="col-4">
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

              <a href="/admin/pos/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Berita</a>

              <div id="dataguru">
                <table id="example1" class="table table-bordered table-striped bg-light">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Judul</th>
                      <th>Kategori</th>
                      <th>Status</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($berita as $item)
                      <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td style="width:600px;">{{ $item->judul }}</td>
                        <td>{{ $item->kategori->kategori }}</td>
                        <td>{{ $item->status }}</td>
                        <td>
                          <form action="/admin/pos/{{ $item->id }}" method="post">
                            @method('get')
                            @csrf
                            <button class="btn btn-primary btn-sm mb-1 d-block"><i class="fas fa-location-arrow"></i> Terbitkan</button>
                          </form>
                          <button type="button" class="btn btn-info btn-sm mb-1 d-block" data-toggle="modal"
                            data-target="#lihat{{ $item->id }}"><i class="far fa-eye"></i> Lihat
                          </button>
                          <a href="/admin/pos/{{ $item->id }}/edit" style="text-decoration: none;"
                            class="btn btn-warning btn-sm mb-1 d-block-inline"><i class="fas fa-edit"></i> Ubah</a>
                          <button type="button" class="btn btn-sm btn-danger d-block-inline d-block" data-toggle="modal"
                            data-target="#hps{{ $item->id }}"><i class="fas fa-trash-alt"></i> Hapus
                          </button>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

        </div>
      </div>
    </div>
  </div>

  <!-- Modal LIHAT -->
  @foreach ($berita as $item)
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
              <div class="col-md-10">
                <img class="img-fluid" src="{{ asset('storage/' . substr($item->gambar,7)) }}" alt="Gambar-Pos" style="max-height: 300px;">
                <div class="mt-3">
                  {!! $item->body !!}
                </div>
                <div class="mt-4">
                  <table style="border: 0">
                    <tr>
                      <td>Penulis</td>
                      <td>: {{ $item->penulis }}</td>
                    </tr>
                    <tr>
                      <td>Kategori &nbsp;&nbsp;&nbsp;</td>
                      <td>: {{ $item->kategori->kategori }}</td>
                    </tr>
                    <tr>
                      <td>Dibuat</td>
                      <td>: {{ $item->created_at->diffForHumans() }}</td>
                    </tr>
                  </table>
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
  @foreach ($berita as $item)
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
            Apakah Anda yakin akan menghapus berita : {{ $item->judul }} ???
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <form action="/admin/pos/{{ $item->id }}" method="post">
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
