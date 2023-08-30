@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-0"><b>Daftar Users</b></h4>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <table id="example1" class="table table-bordered table-striped bg-light">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Lembaga</th>
                        <th>Username</th>
                        <th>Akses</th>
                        <th>Aktif</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($users as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->madrasah->namamadrasah }}</td>
                          <td>{{ $item->username }}</td>
                          <td>{{ $item->akses->akses }}</td>
                          <td>{{ $item->aktif }}</td>
                          {{-- <td class="text-center">
                            <form class="d-inline" action="/admin/laporan/{{ $item->id }}" method="post" enctype="multipart/form-data">
                              @method('get')
                              @csrf
                              <button type="submit" class="btn btn-sm btn-info">Download</button>
                            </form>
                            <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                              data-target="#hps{{ $item->id }}"><i class="fas fa-trash-alt"></i> Hapus
                            </button>
                          </td> --}}
                        </tr>
                      @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection