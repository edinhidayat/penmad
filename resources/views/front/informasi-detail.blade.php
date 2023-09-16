@extends('front.template.index')
@section('konten')

<div class="row">
    <div class="col-lg">
        <div class="container">
            <div class="kotak-atas">
                <div class="text-center">
                    <h1 class="info">Detail Informasi</h1>
                    <img class="img-fluid info-logo" src="../../img/mdr.png" alt="Logo Penmad">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg">
        <div class="container">
            <div class="kotak-bawah rounded-bottom-3 py-4 px-4 mb-4 bg-white" style="box-shadow: 1px 1px 2px rgba(0,0,0,.4)">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a class="text-decoration-none" href="/#pelayanan">Home</a></li>
                        <li class="breadcrumb-item"><a class="text-decoration-none" href="/informasi">Informasi</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{ Str::limit(strip_tags($infodetail->judul), 50) }}...</li>
                    </ol>
                </nav>

                <table class="table table-borderless mt-4">
                    <tbody>
                        <tr>
                            <td>
                                <span>Tanggal : {{ carbon\Carbon::parse($infodetail->created_at)->format('d F Y') }}</span><br>
                                <h4 class="mb-3">{{ $infodetail->judul }}</h4>
                                <figcaption class="blockquote-footer">
                                    Admin : <cite title="Source Title">{{ $infodetail->petugas }}</cite>
                                </figcaption>
                            </td>
                        </tr>
                        <tr>
                            <td>  
                                {!! $infodetail->description !!}
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection