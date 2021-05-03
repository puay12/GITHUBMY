<?php 
session_start();

if(!isset($_SESSION['login']) || isset($_SESSION['login'] != true)){
    header("Location : login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DSS Scholarship | Dashboard</title>
    <link rel="icon" href="asset/img/logo-title.png">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/dashboard.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
</head>

<body>
    <div class="home-sec">
        <div class="sidebar position-fixed" id="sidebar">
            <img src="asset/img/logo.png" alt="DSS Scholarship" class="logo">
            <div class="sidebar-menu container-fluid">
                <ul>
                    <li>
                        <a href="#" class="active"><span class="fa fa-id-card-o"></span>
                            <span class="list">Biodata Diri</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-users"></span>
                            <span class="list">Data Keluarga</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-trophy"></span>
                            <span class="list">Data Prestasi</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-calculator"></span>
                            <span class="list">Analisis SPK</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-bullhorn"></span>
                            <span class="list">Pengumuman</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-check-square"></span>
                            <span class="list">Data Pendaftar</span></a>
                    </li>
                    <li>
                        <a href="#"><span class="fa fa-pencil-square-o"></span>
                            <span class="list">Ubah Profil</span></a>
                    </li>
            
                </ul>
            </div>
        </div>

        <div class="main-content">
            <header>
                <h6>
                    <label for="">
                        <span class="fa fa-bars"></span>
                    </label>

                    Dashboard
                </h6>

        <div class="user-wrapper">
            <img src="asset/img/admin.jpeg" width="40px" height="40px" alt="DSS Scholarship" class="admin">
        <div>
                <h4>Sarah Alissa</h4>
                <small>Super admin</small>
            </div>
        </div>
    </header>
        </div>
        
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>