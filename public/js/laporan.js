// Pilih semua Check Button
$('.checked-all').on('change', function (e) {
    e.preventDefault()
    $('input[name=pilih]').prop('checked', this.checked)
})

// Tampilkan Data di Tabel dengan Filter
function tampilkan() {
    let tahunajaran = $('#tahunajaran_id').val()
    let jenislaporan = $('#jenislaporan_id').val()
    let jenjang = $('#pilihjenjang').val()
    let status = $('#pilihstatus').val()

    // Objek Ajax
    let xhr = new XMLHttpRequest()
    // Cek Kesiapan Ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            $('#tampil').html(xhr.responseText);
        }
    }

    // Eksekusi Ajax
    xhr.open('get', '/admin/laporan/tampil/' + tahunajaran + "/" + jenislaporan + "/" + jenjang + "/" + status, true)
    xhr.send()
}


// Download Semua Data terSelect
function downloadsemua() {
    let allValues = []

    $('.subcheck:checked').each(function () {
        allValues.push($(this).attr('data-id'))
    })

    let ids = allValues.join(',')

    $('#ids-input').val(ids)
    $('#download-form').submit()

    console.log(ids)
}