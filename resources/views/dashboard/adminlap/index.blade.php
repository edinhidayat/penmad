@extends('dashboard.atemplate.index')
@section('konten')
    <div class="row">
        <div class="col mt-3">
            <div class="card mb-1">
                <div class="card-body pt-2" style="height: 40px;">
                    <h5 class="my-0"><b>Laporan Madrasah</b></h5>
                </div>
            </div>

            <div class="card">
                <div class="card-body">

                    @if (session()->has('datatidakada'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <strong>Data tidak ditemukan.</strong>
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    {{-- <form action="/admin/laporan" method="get"> --}}
                    <div class="row">
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="tahunajaran_id">Tahun Ajaran</label>
                                </div>
                                <select class="custom-select" name="tahunajaran_id" id="tahunajaran_id">
                                    @foreach ($tahunajaran as $item)
                                        @if (request('tahunajaran_id') == $item->id)
                                            <option value="{{ $item->id }}" selected="selected">
                                                {{ $item->tahunajaran }}</option>
                                        @else
                                            <option value="{{ $item->id }}">{{ $item->tahunajaran }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="jenislaporan_id">Kategori Laporan</label>
                                </div>
                                <select class="custom-select" name="jenislaporan_id" id="jenislaporan_id">
                                    @foreach ($jenislaporan as $item)
                                        @if (request('jenislaporan_id') == $item->id)
                                            <option value="{{ $item->id }}" selected="selected">
                                                {{ $item->jenislaporan }}</option>
                                        @else
                                            <option value="{{ $item->id }}">
                                                {{ $item->jenislaporan }}
                                            </option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="pilihjenjang">Jenjang</label>
                                </div>
                                <select class="custom-select" name="pilihjenjang" id="pilihjenjang">
                                    @foreach ($jenjang as $item)
                                        @if (request('pilihjenjang') == $item)
                                            <option value="{{ $item }}" selected="selected">{{ $item }}
                                            </option>
                                        @else
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <label class="input-group-text" for="pilihstatus">Status</label>
                                </div>
                                <select class="custom-select" name="pilihstatus" id="pilihstatus">
                                    @foreach ($status as $item)
                                        @if (request('pilihstatus') == $item)
                                            <option value="{{ $item }}" selected="selected">
                                                {{ $item }}</option>
                                        @else
                                            <option value="{{ $item }}">{{ $item }}</option>
                                        @endif
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <button class="btn btn-primary mr-3" id="tampilkan" type="button" onclick="tampilkan()"><i
                                    class="fas fa-eye"></i>&nbsp;
                                Tampilkan</button>
                            <form class="d-inline" id="download-form" action="/admin/laporan/download/semua" method="post">
                                @method('get')
                                @csrf
                                <input type="hidden" name="ids" id="ids-input">
                                <button class="btn btn-info" id="download-all" type="submit" onclick="downloadsemua()"><i
                                        class="fas fa-download"></i>&nbsp;
                                    Download Selected</button>
                            </form>
                        </div>
                    </div>
                    {{-- </form> --}}

                    <hr style="border: 1px solid;">
                    <table class="table table-bordered table-striped bg-light">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Madrasah</th>
                                <th>Tahun Ajaran</th>
                                <th>Jenis Laporan</th>
                                <th>Keterangan</th>
                                <th><input type="checkbox" class="checked-all"></th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="tampil"></tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="../../../js/jquery-3.7.0.min.js"></script>
    <script src="../../../js/laporan.js"></script>
@endsection
