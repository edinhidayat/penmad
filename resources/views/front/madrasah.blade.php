@extends('front.template.index')
@section('konten')

    <!-- Main content -->
    <div class="container">
        <div class="row mt-4">
            <div class="col text-center">
                <h3 class="mb-0" style="color: var(--biru);text-transform:uppercase;">Daftar {{ $nama }}</h3>
                <h4 style="color: var(--coklat);text-transform:uppercase;">Kabupaten Majalengka</h4>
            </div>
        </div>
        <div class="row">
            <div class="col mt-3 mb-5">

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
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->nsm }}</td>
                                    <td>{{ $item->npsn }}</td>
                                    <td>{{ $item->kodesatker }}</td>
                                    <td>{{ $item->namamadrasah }}</td>
                                    <td>{{ $item->alamat }}</td>
                                    <td>{{ $item->kecamatan }}</td>
                                    <td class="text-center">
                                        <a href="/mdr/{{ $madrasah }}/{{ $item->id }}" style="text-decoration: none;"
                                            class="btn btn-info btn-sm"><i class="far fa-eye"></i> Lihat</a>
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
