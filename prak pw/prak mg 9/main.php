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
    <title>Admin</title>
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard.css">
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
                        <a href="#" class="link1 active"><span class="fa fa-users"></span>
                            <span class="list">Profil User</span></a>
                    </li>
                    <li id="datamhs">
                        <a href="#" class="link2"><span class="fa fa-trophy"></span>
                            <span class="list">Data Mahasiswa</span></a>
                    </li>
                    <li id="datatugas">
                        <a href="#" class="link3"><span class="fa fa-trophy"></span>
                            <span class="list">Data Tugas</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <header>
                <h6>Selamat Datang di Admin</h6>
                <h4><a href="logout.php">Logout</a></h4>
            </header>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="asset/js/main.js"></script>

</html>