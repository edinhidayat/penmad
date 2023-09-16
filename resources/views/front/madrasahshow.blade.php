@extends('front.template.index')
@section('konten')

    <!-- Main content -->
    <div class="container">
        <div class="row">
            <div class="col mt-4">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-decoration-none"
                                href="/mdr/{{ $madrasah }}">Madrasah</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">{{ $dtmadrasah->namamadrasah }}</li>
                    </ol>
                </nav>

                {{-- PROFIL --}}
                <div class="card mt-3">
                    <h5 class="card-header bg-warning"><b>Profil</b></h5>
                    <div class="card-body">
                        <table>
                            <tr>
                                <td>NSM</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->nsm }}</td>
                            </tr>
                            <tr>
                                <td>NPSN</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->npsn }}</td>
                            </tr>
                            <tr>
                                <td>Kode Satker</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->kodesatker }}</td>
                            </tr>
                            <tr>
                                <td>Nama Lembaga &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->namamadrasah }}</td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->alamat }}</td>
                            </tr>
                            <tr>
                                <td>Desa</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->desa }}</td>
                            </tr>
                            <tr>
                                <td>Kecamatan</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->kecamatan }}</td>
                            </tr>
                            <tr>
                                <td>Kabupaten</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; Majalengka</td>
                            </tr>
                            <tr>
                                <td>Nama Kepala</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->namakepala }}</td>
                            </tr>
                            <tr>
                                <td>NIP Kepala</td>
                                <td>:</td>
                                <td>&nbsp;&nbsp; {{ $dtmadrasah->nipkepala }}</td>
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- AKREDITASI --}}
                <div class="card mt-3">
                    <h5 class="card-header bg-warning"><b>Akreditasi</b></h5>
                    <div class="card-body">
                        <table id="example" class="table table-bordered table-striped bg-light">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Peringkat</th>
                                    <th>Nilai</th>
                                    <th>Tahun</th>
                                    <th>Tahun Akhir</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($akreditasi as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->peringkat }}</td>
                                        <td>{{ $item->nilai }}</td>
                                        <td>{{ $item->tahun }}</td>
                                        <td>{{ $item->akhirakreditasi }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- DATA SISWA --}}
                <div class="card mt-3">
                    <h5 class="card-header bg-warning"><b>Data Siswa</b></h5>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-3">
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <label class="input-group-text" for="tahunajaran">Tahun Ajaran</label>
                                    </div>
                                    <select class="custom-select" name="tahunajaran" id="tahunajaran"
                                        onchange="datasiswa()">
                                        @foreach ($thnajaran as $item)
                                            <option value="{{ $item->id }}">{{ $item->tahunajaran }}</option>
                                        @endforeach
                                    </select>
                                    <input type="hidden" name="kode" id="kode" value="{{ $dtmadrasah->id }}">
                                </div>
                            </div>
                        </div>
                        <div id="tabelsiswa">
                            <table class="table table-bordered table-striped bg-light">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Laki-laki</th>
                                        <th>Perempuan</th>
                                        <th>Total</th>
                                        <th>KIP</th>
                                        <th>KKS</th>
                                        <th>PKH</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($datasiswa as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->lakilaki }}</td>
                                            <td>{{ $item->perempuan }}</td>
                                            <td>{{ $item->total }}</td>
                                            <td>{{ $item->kip }}</td>
                                            <td>{{ $item->kks }}</td>
                                            <td>{{ $item->pkh }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                {{-- DATA GURU --}}
                <div class="card mt-3">
                    <h5 class="card-header bg-warning"><b>Data Guru</b></h5>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped bg-light">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Guru<br>NIP</th>
                                    <th>L/P</th>
                                    <th>Golongan<br>Pangkat</th>
                                    <th>Mapel yg diampu</th>
                                    <th>Lulusan</th>
                                    <th>Jurusan</th>
                                    <th>Tahun Lulus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dataguru as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->namaguru }}<br>{{ $item->nip }}</td>
                                        <td>{{ $item->jeniskelamin }}</td>
                                        <td>{{ $item->gol }}<br>{{ $item->pangkat }}</td>
                                        <td>{{ $item->mapel }}</td>
                                        <td>{{ $item->lulusan }}</td>
                                        <td>{{ $item->jurusan }}</td>
                                        <td>{{ $item->tahunlulus }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

                {{-- DATA SARPRAS --}}
                <div class="card mt-3 mb-4">
                    <h5 class="card-header bg-warning"><b>Data Sarana dan Prasarana</b></h5>
                    <div class="card-body">
                        <table id="example2" class="table table-bordered table-striped bg-light">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Sarpras</th>
                                    <th>Merk</th>
                                    <th>Jumlah</th>
                                    <th>Baik</th>
                                    <th>Rusak Ringan</th>
                                    <th>Rusak Sedang</th>
                                    <th>Rusak Berat</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dtsarpras as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->sarpras }}</td>
                                        <td>{{ $item->merk }}</td>
                                        <td>{{ $item->jumlah }}</td>
                                        <td>{{ $item->baik }}</td>
                                        <td>{{ $item->rr }}</td>
                                        <td>{{ $item->rs }}</td>
                                        <td>{{ $item->rb }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="../../js/tampilsiswa.js"></script>

@endsection
