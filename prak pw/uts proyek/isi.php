<?php 
    include 'koneksi.php';
    $id = $_GET['id_mhs'];
    $nrp = $_POST["nrp"];
    $nama = $_POST['nama'];
    $tmptLahir = $_POST["tmptLAHIR"];
    $tglLahir = $_POST["tglLAHIR"];
    $gender = $_POST["gender"];
    $agama = $_POST['agama'];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $lamaStudiThn = $_POST["lama-studi-thn"];
    $lamaStudiBln = $_POST["lama-studi-bln"];
    $ipk = $_POST["ipk"];
    $deskripsi = $_POST["deskripsi"];
    $sql = "INSERT INTO mahasiswa(nrp, nama, tmpt_lahir, tgl_lahir, gender, agama, alamat, jurusan, lama_studi_thn, 
    lama_studi_bln, ipk, desc_diri) VALUES ('$nrp', '$nama', '$tmptLahir', '$tglLahir', '$gender', 
    '$agama', '$alamat', '$jurusan', '$lamaStudiThn', '$lamaStudiBln', '$ipk', '$deskripsi')"; 

    if(mysqli_query($konek, $sql)){
        header("location:tampil.php");
    }
    else{
        echo "<h1>Error : " . $sql . "<br/>" . mysqli_error($konek) . "</h1>";
    }
    mysqli_close($konek);
?>