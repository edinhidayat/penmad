@extends('dashboard.atemplate.index')
@section('konten')
  <div class="row">
    <div class="col-8">
      <div class="card card-info mt-3">
        <div class="card-header">
          <h3 class="card-title"><b>Tambah Data Siswa</b></h3>
        </div>
        <div class="card-body">
          <!-- Input Data Siswa -->
          <form action="/dashboard/dtsiswa" method="post">
            @csrf
            <div class="row">
              <div class="col-3">
                <div class="form-group">
                  <input type="hidden" name="madrasah_id" id="madrasah_id" value={{ Auth::User()->madrasah_id }}>
                  <label>Tahun Ajaran</label>
                  <select class="form-control @error('tahunajaran_id') is-invalid @enderror" name="tahunajaran_id"
                    id="tahunajaran_id" style="width: 100%;" required>
                    @foreach ($tahunajaran as $item)
                      @if (old('tahunajaran_id') == $item->id)
                        <option value="{{ $item->id }}" selected="selected">{{ $item->tahunajaran }}</option>
                      @else
                        <option value="{{ $item->id }}">{{ $item->tahunajaran }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('tahunajaran_id')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label>Jumlah Laki-laki</label>
                  <input type="text" class="form-control @error('lakilaki') is-invalid @enderror" name="lakilaki"
                    id="lakilaki" value="{{ old('lakilaki') }}" onkeypress="return hanyaAngka(event)" required autofocus>
                  @error('lakilaki')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label>Jumlah Perempuan</label>
                  <input type="text" class="form-control @error('perempuan') is-invalid @enderror" name="perempuan"
                    id="perempuan" value="{{ old('perempuan') }}" onkeypress="return hanyaAngka(event)" required>
                  @error('perempuan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label>Total</label>
                  <input type="text" class="form-control @error('total') is-invalid @enderror" name="total"
                    id="total" value="{{ old('total') }}" readonly>
                  @error('total')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-4">
                <div class="form-group">
                  <label>KIP</label>
                  <input type="text" class="form-control @error('kip') is-invalid @enderror" name="kip"
                    id="kip" value="{{ old('kip') }}" onkeypress="return hanyaAngka(event)" required>
                  @error('kip')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label>KKS</label>
                  <input type="text" class="form-control @error('kks') is-invalid @enderror" name="kks"
                    id="kks" value="{{ old('kks') }}" onkeypress="return hanyaAngka(event)" required>
                  @error('kks')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
              <div class="col-4">
                <div class="form-group">
                  <label>PKH</label>
                  <input type="text" class="form-control @error('pkh') is-invalid @enderror" name="pkh"
                    id="pkh" value="{{ old('pkh') }}" onkeypress="return hanyaAngka(event)" required>
                  @error('pkh')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group d-flex justify-content-around">
              <a href="/dashboard/dtsiswa" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
              <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i>
                Simpan</button>
            </div>
          </form>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

    </div>
  </div>

  <script>
    // HANYA ANGKA
    function hanyaAngka(evt) {
      var charCode = evt.which ? evt.which : event.keyCode;
      if (charCode > 31 && (charCode < 48 || charCode > 57)) return false;
      return true;
    }

    // JUMLAH
    let laki = document.getElementById('lakilaki')
    let perempuan = document.getElementById('perempuan')
    let total = document.getElementById('total')

    laki.addEventListener('keyup', function() {
      total.value = parseInt(laki.value) + parseInt(perempuan.value)
    })
    perempuan.addEventListener('keyup', function() {
      total.value = parseInt(laki.value) + parseInt(perempuan.value)
    })
  </script>
@endsection
