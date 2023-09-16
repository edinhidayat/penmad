@extends('front.template.index')
@section('konten')

<div class="row">
    <div class="col-lg">
        <div class="container">
            <div class="kotak-atas">
                <div class="text-center">
                    <h1 class="info">Download</h1>
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
                        @foreach ($download as $item)  
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>
                                <span>Tanggal : {{ carbon\Carbon::parse($item->created_at)->format('d F Y') }}</span><br>
                                <h4>{{ $item->judul }}</h4>
                            </td>
                            <td>
                                <form action="/download/{{ $item->id }}" method="post" enctype="multipart/form-data">
                                    @method('get')
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-info"><i class='bx bx-download'></i>&nbsp; Unduh</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection