@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col">

        <h2 class="mt-3 mb-2"><b>Nilai Akreditasi pada {{ Auth::user()->madrasah->namamadrasah }}</b></h2>

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

                  <a href="/dashboard/akreditasi/create" class="btn btn-primary mb-2"><i class="fas fa-plus"></i> Tambah Data</a>
                  
                  <table id="example1" class="table table-bordered table-striped bg-light">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nilai</th>
                        <th>Peringkat</th>
                        <th>Tahun</th>
                        <th>Tahun Akhir</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($akreditasi as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->nilai }}</td>
                          <td>{{ $item->peringkat }}</td>
                          <td>{{ $item->tahun }}</td>
                          <td>{{ $item->akhirakreditasi }}</td>
                          <td class="text-center">
                            <a href="/dashboard/akreditasi/{{ $item->id }}/edit" style="text-decoration: none;"
                              class="btn btn-warning btn-sm"><i class="fas fa-edit"></i> Ubah</a>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal" data-target="#hps{{ $item->id }}"><i
                              class="fas fa-trash-alt"></i> Hapus
                            </button>
                          </td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
  
            </div>
          </div>
    </div>
</div>

<!-- Modal HAPUS -->
@foreach ($akreditasi as $item)
    
<div class="modal fade" id="hps{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Hapus Data</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Apakah Anda yakin akan menghapus data Akreditasi tahun : {{ $item->tahun }} ???
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <form action="/dashboard/akreditasi/{{ $item->id }}" method="post">
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