@extends('dashboard.atemplate.index')
@section('konten')
    <div class="row">
        <div class="col-5">
            <div class="card card-info mt-3">
                <div class="card-header">
                    <h3 class="card-title"><b>Tambah Data Tahun Ajaran</b></h3>
                </div>
                <div class="card-body">
                    <!-- Input Data Tahun Ajaran -->
                    <form action="/admin/ta" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="tahunajaran" class="col-sm-5 col-form-label">Tahun Ajaran<sup
                                    class="text-danger">*</sup></label>
                            <div class="col-sm-7">
                                <input type="text" class="form-control @error('tahunajaran') is-invalid @enderror"
                                    name="tahunajaran" id="tahunajaran" value="{{ old('tahunajaran') }}" autofocus required>
                            </div>
                            @error('tahunajaran')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="col-sm mt-3 form-group d-flex justify-content-around">
                            <a href="/admin/ta" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i>
                                Kembali</a>
                            <button type="submit" name="submit" class="btn btn-primary"><i
                                    class="fas fa-location-arrow"></i>
                                Simpan</button>
                        </div>
                    </form>

                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->

        </div>
    </div>
@endsection
