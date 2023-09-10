@extends('front.template.index')
@section('konten')

<div class="container">
    <div class="row">
        <div class="col-md profil">
            <h3>Profil Seksi Pendidikan Madrasah</h3>
            <h4>Kantor Kementerian Agama</h4>
            <h4>Kabupaten Majalengka</h4>
        </div>
    </div>
</div>

<div class="col profil-kol">
    <div class="container profil-menu">
        <div class="btn-group" role="group" aria-label="Basic mixed styles example">
            <button id="visi" type="button" class="btn btn-danger profil-tbl">Visi Misi</button>
            <button id="team" type="button" class="btn btn-warning profil-tbl">Team</button>
            <button id="job" type="button" class="btn btn-success profil-tbl">Job Description</button>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col mt-4 mb-4">
            <div class="profil-kotak">
                <div class="profil-isian"></div>
            </div>
        </div>
    </div>
</div>

<script src="../../../js/jquery-3.7.0.min.js"></script>
<script>
    $(document).ready(function(){
        $('.profil-isian').html('');
        // Objek Ajax
        let xhr = new XMLHttpRequest()
        // Cek Kesiapan Ajax
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                $('.profil-isian').html(xhr.responseText);
            }
        }
    
        // Eksekusi Ajax
        xhr.open('get', '/profil/visi', true)
        xhr.send()

        // Jika tombol Visi Misi di Klik
        $('#visi').click(function(){
            $('.profil-isian').html('');
            // Objek Ajax
            let xhr = new XMLHttpRequest()
            // Cek Kesiapan Ajax
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    $('.profil-isian').html(xhr.responseText);
                }
            }
        
            // Eksekusi Ajax
            xhr.open('get', '/profil/visi', true)
            xhr.send()
        })

        // Jika tombol Team di Klik
        $('#team').click(function(){
            $('.profil-isian').html('');
            // Objek Ajax
            let xhr = new XMLHttpRequest()
            // Cek Kesiapan Ajax
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    $('.profil-isian').html(xhr.responseText);
                }
            }
        
            // Eksekusi Ajax
            xhr.open('get', '/profil/team', true)
            xhr.send()
        })

        // Jika tombol Team di Klik
        $('#job').click(function(){
            $('.profil-isian').html('');
            // Objek Ajax
            let xhr = new XMLHttpRequest()
            // Cek Kesiapan Ajax
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    $('.profil-isian').html(xhr.responseText);
                }
            }
        
            // Eksekusi Ajax
            xhr.open('get', '/profil/job', true)
            xhr.send()
        })

    })
</script>
    
@endsection