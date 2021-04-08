<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Anda</title>
    <link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="form.css">
    <style>
        body{
            background : rgba(0, 255, 255, 0.8);
        }
    </style>
</head>

<body>
    <?php 
        include 'koneksi.php';

        $sql = "SELECT * FROM prak_6";
        $result = mysqli_query($konek, $sql);
        $no = 1;
    ?>
    <div class="tampilSec position-relative">
        <div class="container box-main">
            <h1>DATA MAHASISWA</h1>
            <div class="container-fluid box-tabel">
                <div class="row">
                    <div class="kolom k-no head"><b>No</b></div>
                    <div class="kolom k-nrp head"><b>NRP</b></div>
                    <div class="kolom k-nama head"><b>Nama</b></div>
                    <div class="kolom k-gender head"><b>Jenis Kelamin</b></div>
                    <div class="kolom k-agama head"><b>Agama</b></div>
                    <div class="kolom k-umur head"><b>Umur</b></div>
                    <div class="kolom k-alamat head"><b>Alamat<b></div>
                </div>
                
                <?php
                if(mysqli_num_rows($result) > 0){
                    while($kolom = mysqli_fetch_array($result)){
                        echo "<div class='row'>
                            <div class='kolom k-no'>" . $no . "</div>
                            <div class='kolom k-nrp'>" . $kolom['nrp'] . "</div>
                            <div class='kolom k-nama'>" . $kolom['nama'] . "</div>
                            <div class='kolom k-gender'>" . $kolom['gender'] . "</div>
                            <div class='kolom k-agama'>" . $kolom['agama'] . "</div>
                            <div class='kolom k-umur'>" . $kolom['umur'] . "</div>
                            <div class='kolom k-alamat'>" . $kolom['alamat'] . "</div>
                        </div>";
                        $no++;
                    }
                }
                else{
                    echo "<div class='row'><div class='col'>Tidak ada data</div></div>";
                }
                ?>
            </div>
            <a href="form.php">
                <button type="button" class="btn btn-main add-data">Tambah Data</button>
            </a>
        </div>
    </div>
</body>
</html>