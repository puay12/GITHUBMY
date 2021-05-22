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
    include 'config/closedb.php';
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
            <!-- DATA TUGAS -->
            <div class="container-fluid content-upload">
                <!-- UPLOAD TUGAS -->
                <h6>Upload Tugas</h6>
                <form action="upload.php" method="POST" enctype="multipart/form-data">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="file_tugas" name="file_tugas" required>
                        <label class="custom-file-label" for="file_tugas">Pilih sebuah file</label>
                        <small id="file_tugas" class="text-muted">Max file 5MB</small>
                    </div>
                    <div class="form-group">
                        <h6 class="desc">Deskripsi</h6>
                        <textarea name="descript" id="descript" rows="3" class="form-control" placeholder="Maks 150 karakter"></textarea>
                    </div>
                    <button class="btn btn-info" type="submit" name="upload"><span class="fa fa-send"></span>Kirim</button>
                </form>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>