@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col mt-3">
        <div class="card">
            <div class="card-body">
                <h4 class="mb-0"><b>Daftar Anggaran BOS Madrasah</b></h4>
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                {{-- <form action="/admin/laporan" method="post">
                    @csrf
                    <div class="col-md-4">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <label class="input-group-text" for="jenislaporan">Jenis Laporan</label>
                            </div>
                            <select class="custom-select" id="jenislaporan">
                                @foreach ($jenislaporan as $item)
                                    <option value="{{ $item->jenislaporan }}">{{ $item->jenislaporan }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="radio" name="radiomadrasah" id="radiomadrasah1" aria-label="Radio button for following text input" checked>
                                </div>
                            </div>
                            <input type="text" class="form-control" id="semua" aria-label="Text input with radio button" value="Semua" readonly>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="radio" name="radiomadrasah" id="radiomadrasah2" aria-label="Radio button for following text input">
                                </div>
                            </div>
                            <select class="custom-select" id="pilihtahun">
                                @foreach ($tahunajaran as $item)
                                    <option value="{{ $item->tahunajaran }}">{{ $item->tahunajaran }}</option>
                                @endforeach
                            </select>
                            <div class="input-group-prepend">
                                <div class="input-group-text">
                                    <input type="radio" name="radiomadrasah" id="radiomadrasah3" aria-label="Radio button for following text input">
                                </div>
                            </div>
                            <select class="custom-select" id="pilihmadrasah">
                                @foreach ($madrasah->skip(1) as $item)
                                    <option value="{{ $item->namamadrasah }}">{{ $item->namamadrasah }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 mt-3">
                        <button class="btn btn-info" type="submit">Tampilkan</button>
                    </div>
                </form>
                <hr style="border: 1px solid;"> --}}
                <table id="example1" class="table table-bordered table-striped bg-light">
                    <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Madrasah</th>
                        <th>Anggaran</th>
                        <th>Pengajuan</th>
                        <th>Diterima / Status</th>
                        <th>Tahap / Tahun</th>
                        {{-- <th>Action</th> --}}
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($danabos as $item)
                        <tr>
                          <td>{{ $loop->iteration }}</td>
                          <td>{{ $item->madrasah->namamadrasah }}</td>
                          <td>{{ $item->anggaran }}</td>
                          <td>{{ $item->pengajuan }}</td>
                          <td>{{ $item->diterima }}<br>{{ $item->status }}</td>
                          <td>{{ $item->tahap }}<br>{{ $item->tahun }}</td>
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