@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col-7">

      <div class="row mt-3" style="margin-bottom: -10px;">
        <div class="col-6">
          
          @if (session()->has('suksesubah'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Data berhasil diUpdate.</strong>
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

      <div class="card mt-3">
        <h4 class="card-header text-center bg-secondary"><b>Profil {{ Auth::user()->madrasah->namamadrasah }}</b></h4>
          <div class="card-body">
            <div class="row">
              <div class="col">
                <form action="/dashboard/profil/{{ $dtprofil->id }}" method="post">
                  @method('put')
                  @csrf

                  <div class="form-group row">
                    <label for="nsm" class="col-sm-5 col-form-label">NSM</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="nsm" id="nsm" value="{{ $dtprofil->nsm }}" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="npsn" class="col-sm-5 col-form-label">NPSN</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="npsn" id="npsn" value="{{ $dtprofil->npsn }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kodesatker" class="col-sm-5 col-form-label">Kode Satker</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="kodesatker" id="kodesatker" value="{{ $dtprofil->kodesatker }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="jenjang" class="col-sm-5 col-form-label">Jenjang</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="jenjang" id="jenjang" value="{{ $dtprofil->jenjang }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="status" class="col-sm-5 col-form-label">Status</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="status" id="status" value="{{ $dtprofil->status }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namamadrasah" class="col-sm-5 col-form-label">Nama Lembaga</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="namamadrasah" id="namamadrasah" value="{{ $dtprofil->namamadrasah }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="alamat" class="col-sm-5 col-form-label">Alamat</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="alamat" id="alamat" value="{{ $dtprofil->alamat }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="desa" class="col-sm-5 col-form-label">Desa</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="desa" id="desa" value="{{ $dtprofil->desa }}">
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kecamatan" class="col-sm-5 col-form-label">Kecamatan</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="kecamatan" id="kecamatan" value="{{ $dtprofil->kecamatan }}" required>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="kabupaten" class="col-sm-5 col-form-label">Kabupaten</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="kabupaten" id="kabupaten" value="Majalengka" readonly>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="namakepala" class="col-sm-5 col-form-label">Nama Kepala Madrasah</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="namakepala" id="namakepala" value="{{ $dtprofil->namakepala }}" autofocus>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label for="nipkepala" class="col-sm-5 col-form-label">NIP Kepala Madrasah</label>
                    <div class="col-sm-7">
                      <input type="text" class="form-control" name="nipkepala" id="nipkepala" value="{{ $dtprofil->nipkepala }}">
                    </div>
                  </div>

                  <div class="form-group mt-4 d-flex justify-content-end">
                    <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i> Update</button>
                  </div>

                </form>
              </div>
            </div>
          </div>
      </div>
    </div>
</div>

@endsection