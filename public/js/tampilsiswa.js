let tabelsiswa = document.getElementById("tabelsiswa");
let pilihtahun = document.getElementById("tahunajaran");
let kode = document.getElementById("kode");

document.addEventListener("DOMContentLoaded", function () {
    datasiswa();
});

function datasiswa() {
    // Buat Objek Ajax
    let xhr = new XMLHttpRequest();
    // Cek kesiapan ajax
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            tabelsiswa.innerHTML = xhr.responseText;
        }
    };
    // Eksekusi Ajax
    xhr.open("GET", "mdr/" + kode.value + "/" + pilihtahun.value, true);
    xhr.send();
}
