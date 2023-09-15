@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col-lg mt-3 mb-4 text-center">
        <h3>Ubah Data Download</h3>
    </div>
</div>



<div class="row">
    <div class="col-lg d-flex justify-content-center">
        <div class="card" style="width: 80%;">
            <div class="card-body">
            <!-- Input Data Siswa -->
            <form action="/admin/download/{{ $download->id }}" method="post" enctype="multipart/form-data">
                @method('put')
                @csrf
                <div class="form-group">
                    <label for="judul">Keterangan</label>
                    <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                        id="judul" value="{{ old('judul',$download->judul) }}" required autofocus>
                    @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="petugas">Nama Petugas</label>
                    <input type="text" class="col-5 form-control @error('petugas') is-invalid @enderror" name="petugas"
                        id="petugas" value="{{ old('petugas',$download->petugas) }}" required>
                    @error('petugas')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group mb-4">
                    <input type="hidden" name="oldfile" id="oldfile" value="{{ $download->namafile }}">
                    <label for="namafile">Pilih File | size-max: 5 MB</label>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input @error('namafile') is-invalid @enderror" id="namafile"
                        name="namafile" value="Pilih">
                        <label class="custom-file-label" for="namafile">File Download</label>
                    </div>
                    @error('namafile')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <div class="form-group d-flex justify-content-end">
                <a href="/admin/download" class="btn btn-warning mr-3"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i>
                    Ubah</button>
                </div>
            </form>

          <p>#Semua form wajib diisi.</p>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

    </div>
  </div>
@endsection
