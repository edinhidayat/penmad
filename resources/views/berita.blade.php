@extends('template')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-lg" style="margin-top: 120px;">

                <div class="d-flex justify-content-between mb-2">
                    <h3>BERITA</h3>
                    <form action="/berita">
                        <div class="input-group mb-2">
                            <input type="text" class="form-control" placeholder="Cari..." name="cari" id="cari"
                                value="{{ request('cari') }}">
                            <button class="btn btn-outline-secondary" type="submit" id="cari">Cari</button>
                        </div>
                    </form>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md papan-berita p-3">

                @if ($berita->count())
                    <div class="berita-satu">
                        <img src="{{ asset('storage/' . substr($berita[0]->gambar, 7)) }}" class="card-img-top gambar-satu" alt="Gambar Pos">
                        <div class="judul-berita p-3">
                            <a href="/berita/{{ $berita[0]->id }}" class="text-decoration-none warna-judul stretched-link">
                                <h3><b>{{ $berita[0]->judul }}</b></h3>
                                {{-- <p class="card-text">{{ $berita[0]->singkat }}</p> --}}
                                <p class="card-text"><small class="text-body-secondary">{{ carbon\Carbon::parse($berita[0]->created_at)->format('d M Y') }}</small></p>
                            </a>
                        </div>
                    </div>
                @endif

                <div class="row row-cols-1 row-cols-lg-3 g-4 mt-2">
                    @foreach ($berita->skip(1) as $item)
                        <div class="col">
                            <div class="card berita-lainnya h-100">
                                <div class="d-flex align-items-center justify-content-center" style="width: 100%;height:150px;overflow:hidden;">
                                    <img src="{{ asset('storage/' . substr($item->gambar, 7)) }}" class="img-fluid gambar-dua" alt="Gambar">
                                </div>
                                <div class="card-body bodi-judul p-2">
                                    <a href="/berita/{{ $item->id }}" class="text-decoration-none stretched-link">
                                        <h5 class="card-title">{{ $item->judul }}</h5>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <small class="text-body-secondary">{{ carbon\Carbon::parse($item->created_at)->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                
                <div class="d-flex justify-content-end mt-3">
                    {{ $berita->links() }}
                </div>
            </div>
        </div>
        <hr class="mt-5" style="border: 1px solid">
    </div>
@endsection
