@extends('dashboard.atemplate.index')
@section('konten')
  <div class="row">
    <div class="col-10">
      <div class="card card-info mt-3">
        <div class="card-header">
          <h3 class="card-title"><b>Tambah Data Guru</b></h3>
        </div>
        <div class="card-body">
          <!-- Input Data Guru -->
          <form action="/dashboard/dtguru" method="post">
            @csrf
            <div class="form-group">
              <input type="hidden" name="madrasah_id" id="madrasah_id" value={{ Auth::User()->madrasah_id }}>
              <label>Nama Guru</label>
              <input type="text" class="form-control @error('namaguru') is-invalid @enderror" name="namaguru"
                id="namaguru" value="{{ old('namaguru') }}" autofocus required>
              @error('namaguru')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-3">
                  <label>Gelar Depan</label>
                  <input type="text" class="form-control @error('gelardepan') is-invalid @enderror" name="gelardepan"
                    id="gelardepan" value="{{ old('gelardepan') }}">
                  @error('gelardepan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-3">
                  <label>Gelar Belakang</label>
                  <input type="text" class="form-control @error('gelarbelakang') is-invalid @enderror"
                    name="gelarbelakang" id="gelarbelakang" value="{{ old('gelarbelakang') }}">
                  @error('gelarbelakang')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-6">
                  <label>NIP</label>
                  <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
                    id="nip" value="{{ old('nip', '-') }}" required>
                  @error('nip')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-3">
                  <label>Jenis Kelamin</label>
                  <select class="form-control @error('Jeniskelamin') is-invalid @enderror" name="jeniskelamin"
                    id="jeniskelamin" style="width: 100%;" value="{{ old('jeniskelamin') }}" required>
                    @foreach ($jeniskelamin as $item)
                      @if (old('jeniskelamin') == $item->kelamin)
                        <option value="{{ $item->kelamin }}" selected="selected">{{ $item->jeniskelamin }}</option>
                      @else
                        <option value="{{ $item->kelamin }}">{{ $item->jeniskelamin }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('jeniskelamin')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-6">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control @error('tempatlahir') is-invalid @enderror" name="tempatlahir"
                    id="tempatlahir" value="{{ old('tempatlahir') }}" required>
                  @error('tempatlahir')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-3">
                  <label>Tanggal Lahir</label>
                  <input type="date" class="form-control @error('tanggallahir') is-invalid @enderror"
                    name="tanggallahir" id="tanggallahir" value="{{ old('tanggallahir') }}" required>
                  @error('tanggallahir')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-3">
                  <label>Golongan</label>
                  <select class="form-control @error('gol') is-invalid @enderror" name="gol" id="gol"
                    style="width: 100%;" value="{{ old('gol') }}" required>
                    @foreach ($gol as $item)
                      @if (old('gol') == $item->gol)
                        <option value="{{ $item->gol }}" selected="selected">{{ $item->gol }}</option>
                      @else
                        <option value="{{ $item->gol }}">{{ $item->gol }}</option>
                      @endif
                    @endforeach
                  </select>
                  @error('gol')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-9">
                  <label>Pangkat</label>
                  <input type="text" class="form-control @error('pangkat') is-invalid @enderror" name="pangkat"
                    id="pangkat" value="{{ old('pangkat', '-') }}" readonly>
                  @error('pangkat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Mata Pelajaran</label>
              <input type="text" class="form-control @error('mapel') is-invalid @enderror" name="mapel"
                id="mapel" value="{{ old('mapel') }}" required>
              @error('mapel')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <div class="row">
                <div class="col-3">
                  <label>Lulusan</label>
                  <input type="text" class="form-control @error('lulusan') is-invalid @enderror" name="lulusan"
                    id="lulusan" value="{{ old('lulusan') }}" required>
                  @error('lulusan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-7">
                  <label>Jurusan</label>
                  <input type="text" class="form-control @error('jurusan') is-invalid @enderror" name="jurusan"
                    id="jurusan" value="{{ old('jurusan') }}" required>
                  @error('jurusan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
                <div class="col-2">
                  <label>Tahun Lulus</label>
                  <input type="text" class="form-control @error('tahunlulus') is-invalid @enderror"
                    name="tahunlulus" id="tahunlulus" value="{{ old('tahunlulus') }}" required>
                  @error('tahunlulus')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                  @enderror
                </div>
              </div>
            </div>




            <div class="form-group d-flex justify-content-between">
              <a href="/dashboard/dtguru" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i>
                Kembali</a>
              <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i>
                Simpan</button>
            </div>
          </form>
          <p class="text-muted">Wajib diisi semua. Untuk kolom NIP bagi Non ASN diisi "-"</p>
        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

    </div>
  </div>

  <script>
    const gol = document.getElementById("gol");
    gol.addEventListener("change", function(e) {
      let pangkat = document.getElementById("pangkat");
      const namagol = e.target.value;
      let namaPangkat = "";
      switch (namagol) {
        // case "I/a":
        //     namaPangkat = "Juru Muda";
        //     break;
        // case "I/b":
        //     namaPangkat = "Juru Muda Tk.I";
        //     break;
        // case "I/c":
        //     namaPangkat = "Juru";
        //     break;
        // case "I/d":
        //     namaPangkat = "Juru Tk.I";
        //     break;
        // case "II/a":
        //     namaPangkat = "Pengatur Muda";
        //     break;
        // case "II/b":
        //     namaPangkat = "Pengatur Muda Tk.I";
        //     break;
        // case "II/c":
        //     namaPangkat = "Pengatur";
        //     break;
        // case "II/d":
        //     namaPangkat = "Pengatur Tk.I";
        //     break;
        case "-":
          namaPangkat = "-";
          break;
        case "III/a":
          namaPangkat = "Penata Muda";
          break;
        case "III/b":
          namaPangkat = "Penata Muda Tk.I";
          break;
        case "III/c":
          namaPangkat = "Penata";
          break;
        case "III/d":
          namaPangkat = "Penata Tk.I";
          break;
        case "IV/a":
          namaPangkat = "Pembina";
          break;
        case "IV/b":
          namaPangkat = "Pembina Tk.I";
          break;
        case "IV/c":
          namaPangkat = "Pembina Utama Muda";
          break;
        case "IV/d":
          namaPangkat = "Pembina Utama Madya";
          break;
        case "IV/e":
          namaPangkat = "Pembina Utama";
          break;
        default:
          namaPangkat = "Juru Muda";
      }

      pangkat.value = namaPangkat;
    });
  </script>
@endsection
