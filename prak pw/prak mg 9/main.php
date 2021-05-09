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
    $sql_profil  = "SELECT *
                    FROM login_user
                    WHERE userid = '$userid' AND userpswd = '$userpswd'";
    $sql_datmhs  = "SELECT *
                    FROM login_user";
    $result_profil = mysqli_query($konek, $sql_profil);
    $result_datmhs = mysqli_query($konek, $sql_datmhs);
    $no = 1;
    if($result_profil){
        if(mysqli_num_rows($result_profil) > 0){
            while($kolom = mysqli_fetch_array($result_profil)){
                $id_login_admin = $kolom['id_login'];
                $nrp_admin = $kolom['nrp'];
                $nama_admin = $kolom['nama'];
                $tmpt_lahir_admin = $kolom['tmpt_lahir'];
                $tgl_lahir_admin = $kolom['tgl_lahir'];
                $notelp_admin = $kolom['notelp'];
                $alamat_admin = $kolom['alamat'];
                $userid = $kolom['userid'];
                $userpswd = $kolom['userpswd'];
                $email_admin = $kolom['email'];
            }
        }
        else{
            echo "Data tidak ada atau data = 0";
        }
    }
    else{
        echo "Error : " . mysqli_error($konek) . "<br/>";
    }
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
                        <a href="#" class="link1 active"><span class="fa fa-user-circle"></span>
                            <span class="list">Profil User</span></a>
                    </li>
                    <li id="datamhs">
                        <a href="#" class="link2"><span class="fa fa-users"></span>
                            <span class="list">Data Mahasiswa</span></a>
                    </li>
                    <li id="datatugas">
                        <a href="#" class="link3"><span class="fa fa-book"></span>
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
            <!-- PROFIL USER--------- -->
            <div class="container-fluid content-profil show">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo $nama_admin;?></td>
                                </tr>
                                <tr>
                                    <td>NRP</td>
                                    <td>:</td>
                                    <td><?php echo $nrp_admin;?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td><?php echo $tmpt_lahir_admin;?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><?php echo $tgl_lahir_admin;?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?php echo $alamat_admin;?></td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td>:</td>
                                    <td><?php echo $notelp_admin;?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $email_admin;?></td>
                                </tr>
                                <tr>
                                    <td>Username</td>
                                    <td>:</td>
                                    <td><?php echo $userid;?></td>
                                </tr>
                                <tr>
                                    <td>Password</td>
                                    <td>:</td>
                                    <td><?php echo $userpswd;?></td>
                                </tr>
                            </tbody>  
                        </table>
                    </div>
                    <div class="col-md-4">
                        <img src="asset/img/me.jpg" alt="photo">
                    </div>
                </div>
            </div>
            <!-- DATA MAHASISWA --------->
            <div class="container-fluid content-datmhs hides">
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
<script src="asset/js/main.js"></script>

</html>