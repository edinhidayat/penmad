@extends('front.template.index')
@section('konten')

<div class="row">
    <div class="col-lg">
        <div class="container">
            <div class="kotak-atas">
                <div class="text-center">
                    <h1 class="info">Informasi</h1>
                    <img class="img-fluid info-logo" src="../../img/mdr.png" alt="Logo Penmad">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg">
        <div class="container">
            <div class="kotak-bawah rounded-bottom-3 py-4 px-3 mb-4 bg-white" style="box-shadow: 1px 1px 2px rgba(0,0,0,.4)">
                <table class="table table-striped table-hover">
                    <tbody>
                        @foreach ($informasi as $item)  
                        <tr>
                            <td>{{ $loop->iteration + (($informasi->currentPage() -1) * $informasi->perPage()) }}</td>
                            <td><a href="/informasi/{{ $item->id }}" class="text-decoration-none">
                                    <span>Tanggal : {{ carbon\Carbon::parse($item->created_at)->format('d F Y') }}</span><br>
                                    <h4>{{ $item->judul }}</h4>
                                    <p>{{ Str::limit(strip_tags($item->description), 100) }}</p>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

                <div class="d-flex justify-content-end mt-4">
                    {{ $informasi->links() }}
                </div>
            </div>
        </div>
    </div>
</div>

@endsection