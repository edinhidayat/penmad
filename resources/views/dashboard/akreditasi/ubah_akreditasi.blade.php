@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col-6">
        <div class="card card-info mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>Tambah Nilai Akreditasi</b></h3>
            </div>
            <div class="card-body">
                <!-- Input Data Siswa -->
                <form action="/dashboard/akreditasi/{{ $dtakreditasi->id }}" method="post">
                    @method('put')
                    @csrf
                    <div class="row">
                        <div class="col-3">
                            <div class="form-group">
                                <input type="hidden" name="madrasah_id" id="madrasah_id" value={{ $dtakreditasi->madrasah_id }}>
                                <label>Peringkat<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control @error('peringkat') is-invalid @enderror" name="peringkat" id="peringkat" value="{{ old('peringkat',$dtakreditasi->peringkat) }}" autofocus required>
                                @error('peringkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Nilai</label>
                                <input type="text" class="form-control @error('nilai') is-invalid @enderror" name="nilai" id="nilai" value="{{ old('nilai',$dtakreditasi->nilai) }}" >
                                @error('nilai')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Tahun</label>
                                <input type="text" class="form-control @error('tahun') is-invalid @enderror" name="tahun" id="tahun" value="{{ old('tahun',$dtakreditasi->tahun) }}" onkeypress="return hanyaAngka(event)">
                                @error('tahun')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <label>Tahun Berakhir</label>
                                <input type="text" class="form-control @error('akhirakreditasi') is-invalid @enderror" name="akhirakreditasi" id="akhirakreditasi" value="{{ old('akhirakreditasi',$dtakreditasi->akhirakreditasi) }}" onkeypress="return hanyaAngka(event)">
                                @error('akhirakreditasi')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-around">
                        <a href="/dashboard/akreditasi" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i> Ubah</button>
                    </div>
                </form>

                <p>Untuk <sup>*</sup>Peringkat diisi nilai :<br>
                - A &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Sudah<br>
                - B &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; - Belum<br>
                - C<br>
                - D</p>
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
</script>

@endsection