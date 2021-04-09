<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Data</title>
    <link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="form.css">
</head>

<body>
    <?php 
        include 'koneksi.php';
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
    ?>
    <div class="tampilSec position-relative">
        <img src="2.png" alt="man" class="man-tampil">
        <div class="container tampil-box position-absolute">
            <p class="halo text-uppercase">data diri anda</p>
            <div class="row">
                <div class="col-4">
                    <div class="bulat position-relative">
                        <img src="me.gif" alt="me" class="me">
                    </div>
                </div>
                <div class="col-8">
                    <div class="row">
                        <div class="col-6">
                            <?php
                                echo "<p class='labelnya'>NRP</p>";
                                echo "<p class='isi'>$nrp</p>";
                                echo "<p class='labelnya'>Nama Lengkap</p>";
                                echo "<p class='isi'>$nama</p>";
                                echo "<p class='labelnya'>Tempat, Tanggal Lahir</p>";
                                echo "<p class='isi'>$tmptLahir, $tglLahir</p>";
                                echo "<p class='labelnya'>Jenis Kelamin</p>";
                                echo "<p class='isi'>$gender</p>";
                            ?>
                        </div>
                        <div class="col-6">
                            <?php
                            echo "<p class='labelnya'>Agama</p>";
                            echo "<p class='isi'>$agama</p>";
                            echo "<p class='labelnya'>Alamat</p>";
                            echo "<p class='isi'>$alamat</p>";
                            echo "<p class='labelnya'>Jurusan</p>";
                            echo "<p class='isi'>$jurusan</p>";
                            echo "<p class='labelnya'>Lama Studi</p>";
                            if($lamaStudiBln != 0){
                                echo "<p class='isi'>$lamaStudiThn tahun $lamaStudiBln bulan</p>";
                            }
                            else{
                                echo "<p class='isi'>$lamaStudiThn tahun</p>";
                            }
                            echo "<p class='labelnya'>IPK Terakhir</p>";
                            echo "<p class='isi'>$ipk</p>";
                            echo "<p class='labelnya'>Deskripsi Diri</p>";
                            echo "<p class='isi'>$deskripsi</p>";
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>