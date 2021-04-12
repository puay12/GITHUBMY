<?php 
    include 'koneksi.php';
    $id = $_GET['ID'];
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <div class="isi-sec">
        <?php
            if(mysqli_query($konek, $sql)){
                header("location:tampil.php");
            }
            else{
                echo "<h1>Error : " . $sql . "<br/>" . mysqli_error($konek) . "</h1>";
            }
            mysqli_close($konek);
        ?>
    </div>
</body>
</html>