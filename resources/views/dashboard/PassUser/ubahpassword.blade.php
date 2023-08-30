@extends('dashboard.atemplate.index')
@section('konten')

<div class="row">
    <div class="col-3">

        @if (session()->has('salahpassword'))
            <div class="salahpassword"></div>
        @endif
        @if (session()->has('beda'))
            <div class="beda"></div>
        @endif
        @if (session()->has('suksesubahpassword'))
            <div class="suksesubahpassword"></div>
        @endif

        <h2 class="text-center mt-3 mb-4"><b>Ubah Password</b></h2>
        <form action="/ubahpassword" method="post">
            @csrf
            <input type="hidden" name="madrasah_id" id="madrasah_id" value="{{ Auth::User()->madrasah_id }}">
            <input type="hidden" name="username" id="username" value="{{ Auth::User()->username }}">
            <input type="hidden" name="akses_id" id="akses_id" value="{{ Auth::User()->akses_id }}">
            <input type="hidden" name="aktif" id="aktif" value="{{ Auth::User()->aktif }}">
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('currentpassword') is-invalid @enderror" placeholder="Current Password" name="currentpassword" id="currentpassword" autofocus required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
                @error('currentpassword')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-group mb-3 mt-5">
                <input type="password" class="form-control @error('password1') is-invalid @enderror" placeholder="Password Baru" name="password1" id="password1" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
                @error('password1')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="input-group mb-3">
                <input type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Ulangi Password Baru" name="password" id="password" required>
                <div class="input-group-append">
                  <div class="input-group-text">
                    <span class="fas fa-lock"></span>
                  </div>
                </div>
                @error('password')
                    <div class="invalid-feedback">
                    {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="row mb-3">
                <div class="col-md">
                  <button type="submit" class="btn btn-primary btn-block"><i class="far fa-paper-plane"></i> Ubah Password</button>
                </div>
                <!-- /.col -->
            </div>
        </form>
    </div>
</div>
    
@endsection