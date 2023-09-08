@extends('template')
@section('konten')
    <div class="container">
        <div class="row">
            
            <div class="col-lg" style="margin-top: 110px;">
                <div class="mb-4">
                    <nav aria-label="breadcrumb bg-white">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-decoration-none" href="/berita">Berita</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ Str::limit($beritanya->judul, 20, '...') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-8 mb-5">

                @if ($beritanya->status == 'Terbit')
                    <h2>{{ $beritanya->judul }}</h2>
                    <p class="small text-muted"><i class='bx bx-time'></i> {{ carbon\Carbon::parse($beritanya->created_at)->format('d M Y') }} | 
                        updated : {{ carbon\Carbon::parse($beritanya->updated_at)->format('d M Y') }}</p>
                    <img class="img-fluid" src="{{ asset('storage/' . substr($beritanya->gambar, 7)) }}" alt="GambarPos"
                        style="width: 750px; border: 1px solid #b3b3b3; box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.3); border-radius: 5px;">
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

            <div class="col-lg-4">
                <h4>Lainnya</h4>
                <hr class="mt-0" style="border: 1px solid">
                <div class="kolomberita mt-4 mx-2">
                    @if ($beritalain->count())
                        @for ($i = 0; $i < 6; $i++)   
                            <div class="card mb-3" style="max-width: 540px; height:80px;">
                                <div class="row g-0">
                                    <div class="col-4">
                                        <div class="d-flex align-items-center justify-content-center" style="height: 80px;width:100%;overflow:hidden;">
                                            <img src="{{ asset('storage/' . substr($beritalain[$i]->gambar, 7)) }}" class="img-fluid rounded-start" alt="Berita Lainnya" style="transform: scale(1.6)">
                                        </div>
                                    </div>
                                    <div class="col-8">
                                        <div class="card-body py-2 ps-0 pe-2">
                                            <p class="card-text" style="font-size: 11px;">
                                                <a href="/berita/{{ $beritalain[$i]->id }}" class="text-decoration-none stretched-link text-dark">
                                                    {{ $beritalain[$i]->judul }}
                                                </a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endfor
                    @endif
                </div>
            </div>
        </div>
        <hr class="mt-5" style="border: 1px solid">
    </div>
@endsection
