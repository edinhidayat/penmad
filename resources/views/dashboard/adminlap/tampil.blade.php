@foreach ($laporan as $item)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $item->madrasah->namamadrasah }}</td>
        <td>{{ $item->tahunajaran->tahunajaran }}</td>
        <td>{{ $item->jenislaporan->jenislaporan }}</td>
        <td>{{ $item->namalaporan }}</td>
        <td><input type="checkbox" class="subcheck" name="pilih" data-id="{{ $item->id }}"></td>
        <td class="text-center">
            <form class="d-inline" action="/admin/laporan/{{ $item->id }}" method="post" enctype="multipart/form-data">
                @method('get')
                @csrf
                <button type="submit" class="btn btn-sm btn-info">Download</button>
            </form>
            {{-- <button type="button" class="btn btn-sm btn-danger" data-toggle="modal"
                                      data-target="#hps{{ $item->id }}"><i class="fas fa-trash-alt"></i> Hapus
                                    </button> --}}
        </td>
    </tr>
@endforeach
