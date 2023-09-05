@extends('dashboard.atemplate.index')
@section('konten')
  <div class="row">
    <div class="col-5">
      <div class="card card-info mt-3">
        <div class="card-header">
          <h3 class="card-title"><b>Laporan Madrasah</b></h3>
        </div>
        <div class="card-body">
          <!-- Input Data Siswa -->
          <form action="/dashboard/laporan" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
              <input type="hidden" name="madrasah_id" id="madrasah_id" value={{ Auth::User()->madrasah_id }}>
              <label>Tahun Ajaran</label>
              <select class="form-control @error('tahunajaran_id') is-invalid @enderror" name="tahunajaran_id"
                id="tahunajaran_id" style="width: 100%;" value="{{ old('tahunajaran_id') }}" required>
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
            <div class="form-group">
              <label>Jenis Laporan</label>
              <select class="form-control @error('jenislaporan_id') is-invalid @enderror" name="jenislaporan_id"
                id="jenislaporan_id" style="width: 100%;" value="{{ old('jenislaporan_id') }}" required>
                @foreach ($jenislaporan as $item)
                  @if (old('jenislaporan_id') == $item->id)
                    <option value="{{ $item->id }}" selected="selected">{{ $item->jenislaporan }}</option>
                  @else
                    <option value="{{ $item->id }}">{{ $item->jenislaporan }}</option>
                  @endif
                @endforeach
              </select>
              @error('jenislaporan_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Keterangan Laporan</label>
              <input type="text" class="form-control @error('namalaporan') is-invalid @enderror" name="namalaporan"
                id="namalaporan" value="{{ old('namalaporan') }}" required autofocus>
              @error('namalaporan')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group mb-4">
              <label for="namafile">Pilih File | size-max: 2 MB</label>
              <div class="custom-file">
                <input type="file" class="custom-file-input @error('namafile') is-invalid @enderror" id="namafile"
                  name="namafile" value="Pilih" required>
                <label class="custom-file-label" for="namafile">File Laporan</label>
              </div>
              @error('namafile')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>

            <div class="form-group d-flex justify-content-around">
              <a href="/dashboard/laporan" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
              <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i>
                Simpan</button>
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
