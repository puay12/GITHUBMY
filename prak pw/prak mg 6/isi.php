<?php 
    include 'koneksi.php';
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $gender = $_POST["gender"];
    $agama = $_POST["agama"];
    $umur = $_POST["umur"];
    $alamat = $_POST["alamat"];
    $sql = "INSERT INTO prak_6(nrp,nama, gender, agama, umur, alamat) 
    VALUES ('$nrp', '$nama', '$gender', '$agama', '$umur', '$alamat')"; 
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
                echo "<h1>Data berhasil ditambahkan</h1>";
                echo "<a href='tampil.php'>
                    <button type='button' class='btn btn-main show'>Tampilkan Data</button>
                </a>";
            }
            else{
                echo "<h1>Error : " . $sql . "<br/>" . mysqli_error($konek) . "</h1>";
            }
            mysqli_close($konek);
        ?>
    </div>
</body>
</html>