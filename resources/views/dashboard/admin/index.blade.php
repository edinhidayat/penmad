@extends('dashboard.atemplate.index')
@section('konten')
  <div class="row">
    <div class="col">
      <h5 class="bg-warning text-center p-2 mt-3"><b>Daftar Madrasah di Kabupaten Majalengka</b></h5>
    </div>
  </div>
  <div class="row">
    <div class="col">
      <div id="data_madrasah">
        <table id="example1" class="table table-bordered table-striped bg-light">
          <thead>
            <tr>
              <th>No</th>
              <th>NSM</th>
              <th>NPSN</th>
              <th>Satker</th>
              <th>Nama Lembaga</th>
              <th>Alamat</th>
              <th>Kecamatan</th>
              {{-- <th>Action</th> --}}
            </tr>
          </thead>
          <tbody>
            @foreach ($madrasah as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nsm }}</td>
                <td>{{ $item->npsn }}</td>
                <td>{{ $item->kodesatker }}</td>
                <td>{{ $item->namamadrasah }}</td>
                <td>{{ $item->alamat }}</td>
                <td>{{ $item->kecamatan }}</td>
                {{-- <td class="text-center">
                  <a href="/admin/{{ $item->id }}" style="text-decoration: none;" class="btn btn-info btn-sm"><i
                      class="far fa-eye"></i> Lihat</a>
                </td> --}}
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
