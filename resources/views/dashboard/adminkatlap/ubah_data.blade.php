@extends('dashboard.atemplate.index')
@section('konten')
    <div class="row">
        <div class="col-5">
            <div class="card card-info mt-3">
                <div class="card-header">
                    <h3 class="card-title"><b>Ubah Kategori Laporan</b></h3>
                </div>
                <div class="card-body">
                    <!-- Input Kategori Laporan -->
                    <form action="/admin/katlap/{{ $katlap->id }}" method="post">
                        @method('put')
                        @csrf
                        <div class="form-group row">
                            <label for="jenislaporan" class="col-sm-5 col-form-label">Kategori Laporan<sup
                                    class="text-danger">*</sup></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @error('jenislaporan') is-invalid @enderror"
                                    name="jenislaporan" id="jenislaporan"
                                    value="{{ old('jenislaporan', $katlap->jenislaporan) }}" autofocus required>
                            </div>
                            @error('jenislaporan')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm mt-3 form-group d-flex justify-content-around">
                            <a href="/admin/katlap" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i>
                                Kembali</a>
                            <button type="submit" name="submit" class="btn btn-primary"><i
                                    class="fas fa-location-arrow"></i>
                                Ubah</button>
                        </div>
                    </form>

                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

        </div>
    </div>
@endsection
