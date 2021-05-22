<?php
    session_start();
    $errormsg = '';
    include 'config/koneksi.php';
    if(isset($_POST['userid']) && isset($_POST['userpswd'])){
        if($_SESSION['login'] != true){
            echo "Login gagal";
            header('location:login.php');
            exit;
        }
    }
    $idFile = $_GET['idFile'];
    $sql = "SELECT namaFile, sizeFile, typeFile, descript
            FROM data_tugas";
    $result = mysqli_query($konek, $sql);
    $no = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="asset/img/logo-title.png">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="home-sec">
        <div class="sidebar position-fixed" id="sidebar">
            <img src="asset/img/logo.png" alt="DSS Scholarship" class="logo">
            <div class="sidebar-menu container-fluid">
                <ul>
                    <li id="prof">
                        <a href="main.php" class="link1"><span class="fa fa-user-circle"></span>
                            <span class="list">Profil User</span></a>
                    </li>
                    <li id="datamhs">
                        <a href="data_mhs.php" class="link2"><span class="fa fa-users"></span>
                            <span class="list">Data Mahasiswa</span></a>
                    </li>
                    <li id="datatugas">
                        <a href="data_tugas.php" class="link3 active"><span class="fa fa-book"></span>
                            <span class="list">Data Tugas</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <header>
                <p>Selamat Datang di Admin</p>
                <a href="logout.php">Logout</a>
            </header>
            <div class="container-fluid list-tugas">
                <h6>Tugas yang Diupload</h6>
                <table class="table table-hover table-bordered">
                    <thead>
                        <td>No</td>
                        <td>Nama File</td>
                        <td>Ukuran File</td>
                        <td>Tipe File</td>
                        <td>Deskripsi</td>
                        <td>Download File</td>
                    </thead>
                    <tbody>
                    <?php
                        if($result){
                            if(mysqli_num_rows($result) > 0){
                                while($kolom = mysqli_fetch_array($result)){
                                    echo "<tr>
                                            <td>$no</td>
                                            <td>$kolom['namaFile']</td>
                                            <td>$kolom['sizeFile']</td>
                                            <td>$kolom['typeFile']</td>
                                            <td>$kolom['descript']</td>
                                            <td>
                                                <a href='download.php?idFile=$kolom['idFile']'>
                                                    <button class='btn btn-outline-primary'>Download</button>
                                                </a> 
                                            </td>
                                        </tr>";
                                    $no++;
                                }
                            }
                            else{
                                echo "<tr>
                                        <td>Data berjumlah 0</td>
                                    </tr>";
                            }
                        }
                        else{
                            echo "SQL Query Error : " . mysqli_error($konek) . "<br>";
                        }
                        include 'config/closedb.php';
                    ?>
                    </tbody>
                </table>
                <a href="form_upload.php">
                    <button class="btn btn-primary">Upload Tugas</button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>