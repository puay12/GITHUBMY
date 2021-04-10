<?php 
    include 'koneksi.php';
    $nrp = $_POST["nrp"];
    $nama = $_POST['nama'];
    $tmptLahir = $_POST["tmptLAHIR"];
    $tglLahir = $_POST["tglLAHIR"];
    $gender = $_POST["gender"];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $lamaStudiThn = $_POST["lama-studi-thn"];
    $lamaStudiBln = $_POST["lama-studi-bln"];
    $ipk = $_POST["ipk"];
    $deskripsi = $_POST["deskripsi"];
    $sql = "DELETE FROM mahasiswa WHERE "
?>