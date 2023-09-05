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
                            <a href="/berita/{{ $berita[0]->id }}" class="text-decoration-none warna-judul">
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
                                <img src="{{ asset('storage/' . substr($item->gambar, 7)) }}" class="card-img-top gambar-dua" alt="Gambar">
                                <div class="card-body bodi-judul">
                                    <a href="/berita/{{ $item->id }}" class="text-decoration-none">
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
