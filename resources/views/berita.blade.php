@extends('template')
@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-lg-9" style="margin-top: 120px;">

                <div class="d-flex justify-content-between mb-3">
                    <h3>BERITA</h3>
                    <form action="/berita">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Cari..." name="cari" id="cari"
                                value="{{ request('cari') }}">
                            <button class="btn btn-outline-secondary" type="submit" id="cari">Cari</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-9">

                @if ($berita->count())
                    <div class="card mb-3">
                        <img src="{{ asset('storage/' . substr($berita[0]->gambar, 7)) }}" class="card-img-top"
                            alt="Gambar Pos">
                        <div class="card-body">
                            <a href="/berita/{{ $berita[0]->id }}" class="text-decoration-none">
                                <h3><b>{{ $berita[0]->judul }}</b></h3>
                                <p class="card-text text-dark">{{ $berita[0]->singkat }}</p>
                                <p class="card-text text-dark"><small
                                        class="text-body-secondary">{{ carbon\Carbon::parse($berita[0]->updated_at)->format('d M Y') }}</small>
                                </p>
                            </a>
                        </div>
                    </div>
                @endif

                <div class="row row-cols-1 row-cols-lg-3 g-4">
                    @foreach ($berita->skip(1) as $item)
                        <div class="col">
                            <div class="card h-100">
                                <img src="{{ asset('storage/' . substr($item->gambar, 7)) }}" class="card-img-top"
                                    alt="Gambar">
                                <div class="card-body">
                                    <a href="/berita/{{ $item->id }}" class="text-decoration-none">
                                        <h5 class="card-title"><b>{{ $item->judul }}</b></h5>
                                        <p class="card-text text-dark">{{ $item->singkat }}</p>
                                    </a>
                                </div>
                                <div class="card-footer">
                                    <small
                                        class="text-body-secondary">{{ carbon\Carbon::parse($item->updated_at)->format('d M Y') }}</small>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>

        </div>
        <hr class="mt-5" style="border: 1px solid">
    </div>
@endsection
