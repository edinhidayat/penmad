@extends('dashboard.atemplate.index')
@section('konten')
  <div class="row">
    <div class="col-10">
      <div class="card card-info mt-3">
        <div class="card-header">
          <h3 class="card-title"><b>Tambah Berita</b></h3>
        </div>
        <div class="card-body">
          <!-- Input Data Guru -->
          <form action="/admin/pos/{{ $berita->id }}" method="post" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="form-group">
              <input type="hidden" name="madrasah_id" id="madrasah_id" value={{ $berita->madrasah_id }}>
              <input type="hidden" name="status" id="status" value="Draft">
              <label>Judul<sup class="text-danger">*</sup></label>
              <input type="text" class="form-control @error('judul') is-invalid @enderror" name="judul"
                id="judul" value="{{ old('judul', $berita->judul) }}" autofocus required>
              @error('judul')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label>Kategori<sup class="text-danger">*</sup></label>
              <select class="form-control @error('kategori_id') is-invalid @enderror" name="kategori_id"
                id="kategori_id" style="width: 30%;">
                @foreach ($kategori as $item)
                  @if (old('kategori_id',$berita->kategori_id) == $item->id)
                    <option value="{{ $item->id }}" selected="selected">{{ $item->kategori }}</option>
                  @else
                    <option value="{{ $item->id }}">{{ $item->kategori }}</option>
                  @endif
                @endforeach
              </select>
              @error('kategori_id')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            <div class="form-group">
              <label>Konten<sup class="text-danger">*</sup></label>
              @error('body')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
              <input type="hidden" name="body" id="body" value="{{ old('body',$berita->body) }}">
              <trix-editor input="body"></trix-editor>
            </div>

            <div class="form-group">
              <label>Penulis<sup class="text-danger">*</sup></label>
              <input type="text" class="form-control @error('penulis') is-invalid @enderror" name="penulis"
                id="penulis" value="{{ old('penulis',$berita->penulis) }}" required>
              @error('penulis')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            <div class="form-group">
              <label for="gambar">Gambar | size-max: 2 MB<sup class="text-danger">*</sup></label>
              <input type="hidden" name="oldImage" id="oldImage" value="{{ $berita->gambar }}">
              @if ($berita->gambar)  
                <img src="{{ asset('storage/' . substr($berita->gambar,7)) }}" class="img-preview img-fluid mb-2 col-sm-6 d-block">
              @else  
                <img class="img-preview img-fluid mb-2 col-sm-6">
              @endif
              <div class="custom-file col-sm-8">
                <input type="file" class="custom-file-input @error('gambar') is-invalid @enderror" id="gambar"
                  name="gambar" onchange="previewImage()">
                <label class="custom-file-label" for="gambar">File Gambar</label>
              </div>
              @error('gambar')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
              @enderror
            </div>
            
            <div class="col-sm-8 form-group d-flex justify-content-around">
              <a href="/admin/pos" class="btn btn-warning"><i class="fas fa-chevron-circle-left"></i>
                Kembali</a>
              <button type="submit" name="submit" class="btn btn-primary"><i class="fas fa-location-arrow"></i>
                Ubah</button>
            </div>
          </form>

        </div>
        <!-- /.input group -->
      </div>
      <!-- /.form group -->

    </div>
  </div>

  <script>
    document.addEventListener('trix-file-accept', function(e) {
      e.preventDefault;
    })

    function previewImage(){
      const gambar = document.querySelector('#gambar');
      const imgPreview = document.querySelector('.img-preview');

      imgPreview.style.display = 'block';

      const oFReader =  new FileReader();
      oFReader.readAsDataURL(gambar.files[0]);

      oFReader.onload = function(oFREvent) {
        imgPreview.src = oFREvent.target.result;
      }
    }

  </script>

@endsection
