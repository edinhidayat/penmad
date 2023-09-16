@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col-lg text-center mt-4 mb-4">
        <h3>Ubah Data Informasi</h3>
    </div>
</div>

<div class="row d-flex">
    <div class="col-lg d-flex justify-content-center">
        <div class="card" style="width:80%;">
            <div class="card-body">
                <form action="/admin/informasi/{{ $informasi->id }}" method="post">
                    @method('put')
                    @csrf

                    <div class="form-group row">
                        <label for="judul" class="col-sm-3 col-form-label">Perihal<sup class="text-danger">*</sup></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul" id="judul" value="{{ old('judul',$informasi->judul) }}" autofocus required>
                            @error('judul')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="petugas" class="col-sm-3 col-form-label">Nama Petugas<sup class="text-danger">*</sup></label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control @error('petugas') is-invalid @enderror" name="petugas" id="petugas" value="{{ old('petugas',$informasi->petugas) }}" required>
                            @error('petugas')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="description" class="col-sm-3 col-form-label">Keterangan / Deskripsi<sup class="text-danger">*</sup></label>
                        @error('description')
                            <div class="invalid-feedback">
                            {{ $message }}
                            </div>
                        @enderror
                        <div class="col-sm-9">
                            <input type="hidden" name="description" id="description" value="{{ old('description',$informasi->description) }}" required>
                            <trix-editor input="description"></trix-editor>
                        </div>
                    </div>

                    <div class="col-sm form-group d-flex justify-content-end">
                        <a href="/admin/informasi" class="btn btn-warning mr-3"><i class="fas fa-chevron-circle-left"></i>
                          Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i>
                          Ubah</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>



<script>
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault;
    })
</script>


@endsection