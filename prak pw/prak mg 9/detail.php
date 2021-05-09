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
    $sql = "SELECT *
            FROM login_user
            WHERE id_login = $id_login";
    $result = mysqli_query($konek, $sql);
    if($result){
        if(mysqli_num_rows($result) > 0){
            while($kolom = mysqli_fetch_array($result)){
                $id_login = $kolom['id_login'];
                $nrp = $kolom['nrp'];
                $nama = $kolom['nama'];
                $tmpt_lahir = $kolom['tmpt_lahir'];
                $tgl_lahir = $kolom['tgl_lahir'];
                $notelp = $kolom['notelp'];
                $alamat = $kolom['alamat'];
                $userid = $kolom['userid'];
                $userpswd = $kolom['userpswd'];
                $email = $kolom['email'];
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
                    <li>
                        <a href="#" class="active"><span class="fa fa-desktop"></span>
                            <span class="list">Detail Data</span></a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="main-content">
            <header>
                <p>Data <?php echo "$nama";?></p>
            </header>
            <!-- DETAIL-------- -->
            <div class="container-fluid content-detail show" id="link-detail">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-striped">
                            <tbody>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td><?php echo $nama;?></td>
                                </tr>
                                <tr>
                                    <td>NRP</td>
                                    <td>:</td>
                                    <td><?php echo $nrp;?></td>
                                </tr>
                                <tr>
                                    <td>Tempat Lahir</td>
                                    <td>:</td>
                                    <td><?php echo $tmpt_lahir;?></td>
                                </tr>
                                <tr>
                                    <td>Tanggal Lahir</td>
                                    <td>:</td>
                                    <td><?php echo $tgl_lahir;?></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td><?php echo $alamat;?></td>
                                </tr>
                                <tr>
                                    <td>No Telepon</td>
                                    <td>:</td>
                                    <td>(+62) <?php echo $notelp;?></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td><?php echo $email;?></td>
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
                <!-- petunjuk -->
                <p class="petunjuk">Klik tombol di bawah ini untuk kembali ke halaman sebelumnya.</p>
                <!-- button kembali -->
                <a href="main.php">
                    <button type="button" class="btn btn-main prev">Kembali</button>
                </a>
            </div>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>