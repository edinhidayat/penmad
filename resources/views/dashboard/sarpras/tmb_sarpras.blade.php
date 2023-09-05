@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col-10">
        <div class="card card-info mt-3">
            <div class="card-header">
                <h3 class="card-title"><b>Tambah Sarana dan Prasanana Madrasah</b></h3>
            </div>
            <div class="card-body">
                <!-- Input Data Siswa -->
                <form action="/dashboard/sarpras" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <input type="hidden" name="madrasah_id" id="madrasah_id" value={{ Auth::User()->madrasah_id }}>
                                <label>Nama Sarpras<sup class="text-danger">*</sup></label>
                                <input type="text" class="form-control @error('sarpras') is-invalid @enderror" name="sarpras" id="sarpras" value="{{ old('sarpras') }}" autofocus required>
                                @error('sarpras')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Merk</label>
                                    <input type="text" class="form-control @error('merk') is-invalid @enderror" name="merk" id="merk" value="{{ old('merk') }}" >
                                    @error('merk')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Baik</label>
                                    <input type="text" class="form-control @error('baik') is-invalid @enderror" name="baik" id="baik" value="{{ old('baik') }}" onkeypress="return hanyaAngka(event)" required>
                                    @error('baik')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Rusak Ringan</label>
                                    <input type="text" class="form-control @error('rr') is-invalid @enderror" name="rr" id="rr" value="{{ old('rr') }}" onkeypress="return hanyaAngka(event)" required>
                                    @error('rr')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Rusak Sedang</label>
                                    <input type="text" class="form-control @error('rs') is-invalid @enderror" name="rs" id="rs" value="{{ old('rs') }}" onkeypress="return hanyaAngka(event)" required>
                                    @error('rs')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Rusak Berat</label>
                                    <input type="text" class="form-control @error('rb') is-invalid @enderror" name="rb" id="rb" value="{{ old('rb') }}" onkeypress="return hanyaAngka(event)" required>
                                    @error('rb')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-2">
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="text" class="form-control @error('jumlah') is-invalid @enderror" name="jumlah" id="jumlah" value="{{ old('jumlah') }}" readonly>
                                    @error('jumlah')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group d-flex justify-content-around">
                        <a href="/dashboard/sarpras" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i> Kembali</a>
                        <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i> Simpan</button>
                    </div>
                </form>

                <p>#Jika kondisi barang Baik, Rusak Ringan, Rusak Sedang atau Rusak Berat = nol,<br>Maka isikan angka nol (0)</p>
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
    let baik = document.getElementById('baik')
    let rusakringan = document.getElementById('rr')
    let rusakberat = document.getElementById('rb')
    let jumlah = document.getElementById('jumlah')

    baik.addEventListener('keyup', function(){
        jumlah.value = parseInt(baik.value) + parseInt(rusakringan.value) + parseInt(rusakberat.value)
    })
    rusakringan.addEventListener('keyup', function(){
        jumlah.value = parseInt(baik.value) + parseInt(rusakringan.value) + parseInt(rusakberat.value)
    })
    rusakberat.addEventListener('keyup', function(){
        jumlah.value = parseInt(baik.value) + parseInt(rusakringan.value) + parseInt(rusakberat.value)
    })
</script>

@endsection