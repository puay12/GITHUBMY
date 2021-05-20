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
    $sql_datmhs  = "SELECT *
                    FROM login_user
                    WHERE userid NOT LIKE '$userid'";
    $result_datmhs = mysqli_query($konek, $sql_datmhs);
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
                        <a href="data_mhs.php" class="link2 active"><span class="fa fa-users"></span>
                            <span class="list">Data Mahasiswa</span></a>
                    </li>
                    <li id="datatugas">
                        <a href="data_tugas2.php" class="link3"><span class="fa fa-book"></span>
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
            <!-- DATA MAHASISWA --------->
            <div class="container-fluid content-datmhs">
                <div class="row">
                    <div class="col">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">NRP</th>
                                    <th scope="col">Nama</th>
                                    <th scope="col">Detail</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                    if($result_datmhs){
                                        if(mysqli_num_rows($result_datmhs) > 0){
                                            while($kolom = mysqli_fetch_array($result_datmhs)){
                                                $id_login = $kolom['id_login'];
                                                $nrp = $kolom['nrp'];
                                                $nama = $kolom['nama'];
                                                echo "<tr>
                                                        <th scope='row'>$no</th>
                                                        <td>$nrp</td>
                                                        <td>$nama</td>
                                                        <td><a href='detail.php?id_login=$id_login'>Lihat</a></td>
                                                    </tr>";
                                                $no++;
                                            }
                                        } 
                                        else{
                                            echo "<tr>
                                                    <th>Data tidak ada atau data = 0</th>
                                                </tr>";
                                        }
                                    }
                                    else{
                                        echo "Error : " . mysqli_error($konek) . "<br/>";
                                    }
                                    include 'config/closedb.php';
                                ?>
                            </tbody>
                        </table>
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