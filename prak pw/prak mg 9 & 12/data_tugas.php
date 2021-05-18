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
            <div class="container-fluid content-datugas hides">
                <!-- BARIS 1 -->
                <div class="row">
                    <div class="col-md-4 card">
                        <div class="container card1">
                            <h6>Tugas 6</h6>
                            <p class="detail">Laporan minggu ke-6</p>
                            <div class="container-fluid box-status">
                                <span class="status belum-selesai">Belum Selesai</span>
                                <span class="deadline green">23 Juni 2021, 23.59</span>
                            </div>
                            <button class="btn btn-info lihat">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="container card2">
                            <h6>Tugas 5</h6>
                            <p class="detail">Laporan minggu ke-5</p>
                            <div class="container-fluid box-status">
                                <span class="status selesai">Selesai</span>
                                <span class="deadline blue">23 Juni 2021, 23.59</span>
                            </div>
                            <button class="btn btn-info lihat">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="container card3">
                            <h6>Tugas 4</h6>
                            <p class="detail">Laporan minggu ke-4</p>
                            <div class="container-fluid box-status">
                                <span class="status selesai">Selesai</span>
                                <span class="deadline blue">23 Juni 2021, 23.59</span>
                            </div>
                            <button class="btn btn-info lihat">Lihat Detail</button>
                        </div>
                    </div>
                </div>
                <!-- BARIS 2 -->
                <div class="row">
                    <div class="col-md-4 card">
                        <div class="container card1">
                            <h6>Tugas 3</h6>
                            <p class="detail">Laporan minggu ke-3</p>
                            <div class="container-fluid box-status">
                                <span class="status selesai">Selesai</span>
                                <span class="deadline blue">23 Juni 2021, 23.59</span>
                            </div>
                            <button class="btn btn-info lihat">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="container card2">
                            <h6>Tugas 2</h6>
                            <p class="detail">Laporan minggu ke-2</p>
                            <div class="container-fluid box-status">
                                <span class="status selesai">Selesai</span>
                                <span class="deadline blue">23 Juni 2021, 23.59</span>
                            </div>
                            <button class="btn btn-info lihat">Lihat Detail</button>
                        </div>
                    </div>
                    <div class="col-md-4 card">
                        <div class="container card3">
                            <h6>Tugas 1</h6>
                            <p class="detail">Laporan minggu ke-1</p>
                            <div class="container-fluid box-status">
                                <span class="status selesai">Selesai</span>
                                <span class="deadline blue">23 Juni 2021, 23.59</span>
                            </div>
                            <button class="btn btn-info lihat">Lihat Detail</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<!-- <script src="asset/js/main.js"></script> -->

</html>