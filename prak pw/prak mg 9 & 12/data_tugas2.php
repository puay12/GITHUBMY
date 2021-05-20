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
    $id_login = $_GET['id_login'];
    $userid = $_SESSION['userid'];
    $userpswd = $_SESSION['userpswd'];
    $no = 1;
    $idFile = $_GET['idFile'];
    $namaFile = $_POST['namaFile'];
    $sizeFile = $_POST['sizeFile'];
    $descript = $_POST['descript'];
    $sql =  "SELECT *
            FROM data_tugas";
    $result = mysqli_query($konek, $sql);
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
                        <a href="data_tugas2.php" class="link3 active"><span class="fa fa-book"></span>
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
            <!-- DATA TUGAS -->
            <div class="container-fluid content-datugas2">
                <!-- UPLOAD TUGAS -->
                <h6>Upload Tugas</h6>
                <form action="upload_tugas.php" method="POST" enctype="multipart/form-data">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file_tugas" name="file_tugas" required>
                        <label class="custom-file-label" for="file_tugas">Pilih sebuah file</label>
                        <small id="ktm-file" class="text-muted">Max file 5MB</small>
                    </div>
                    <div class="form-group">
                        <h6 class="desc">Deskripsi</h6>
                        <textarea name="desc" id="desc" rows="3" class="form-control" placeholder="Maks 150 karakter"></textarea>
                    </div>
                    <button class="btn btn-info" type="submit"><span class="fa fa-send"></span>Kirim</button>
                </form>
                
                <!-- TABEL TUGAS DAN DOWNLOAD -->
                <h6>Tugas yang Diupload</h6>
                <table class="table table-hover table-bordered">
                    <thead>
                        <td>No</td>
                        <td>Nama File</td>
                        <td>Ukuran File</td>
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
                                            <td>$kolom['descript']</td>
                                            <td>
                                                <a href='download_tugas.php'>
                                                    <button class='btn btn-main'><span class='fa fa-download'></span>Download</button>
                                                </a> 
                                            </td>
                                        </tr>";
                                    $no++;
                                }
                            }
                            else{
                                echo "<tr>Data berjumlah 0</tr>";
                            }
                        }
                        else{
                            echo "SQL Query Error : " . mysqli_error($konek) . "<br>";
                        }
                    ?>
                    </tbody>
                </table>
            </div>