@extends('template')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-lg-8" style="margin-top: 110px;">

                @if ($beritanya->status == 'Terbit')
                    <div class="mb-4">
                        <nav aria-label="breadcrumb bg-white">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a class="text-decoration-none" href="/berita">Berita</a></li>
                                <li class="breadcrumb-item active" aria-current="page">
                                    {{ Str::limit($beritanya->judul, 20, '...') }}</li>
                            </ol>
                        </nav>
                    </div>

                    <h2>{{ $beritanya->judul }}</h2>
                    <p class="small text-muted"><i class='bx bx-time'></i>
                        {{ carbon\Carbon::parse($beritanya->updated_at)->format('d M Y') }}</p>
                    <img class="img-fluid" src="{{ asset('storage/' . substr($beritanya->gambar, 7)) }}" alt="GambarPos"
                        style="width: 750px;">
                    <div class="mt-4">
                        <p>{!! $beritanya->body !!}</p>
                    </div>
                    <div class="mt-4">
                        <table style="border: 0">
                            <tr>
                                <td>Penulis</td>
                                <td>: {{ $beritanya->penulis }}</td>
                            </tr>
                            <tr>
                                <td>Kategori &nbsp;&nbsp;&nbsp;</td>
                                <td>: {{ $beritanya->kategori->kategori }}</td>
                            </tr>
                        </table>
                    </div>
                @else
                    <p class="text-center fs-4">Belum ada Berita.</p>
                @endif

            </div>
        </div>
        <hr class="mt-5" style="border: 1px solid">
    </div>
@endsection
