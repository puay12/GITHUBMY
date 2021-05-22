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
    if(isset($_GET['idFile'])){
        include 'config/koneksi.php';
        $idFile = $_GET['idFile'];
        $sql = "SELECT namaFile, sizeFile, typeFile, descript, content
                FROM data_tugas
                WHERE idFile = '$idFile'";
        $result = mysqli_query($konek, $sql) or die('Error. query failed');
        list($namaFile, $typeFile, $sizeFile, $content) = mysqli_fetch_array($result);
        header("content-disposition:attachment;filename:$namaFile");
        header("content-length:$sizeFile");
        header("content-type:$typeFile");
        echo $content;
        include 'config/closedb.php';
        exit;
    }
    include 'config/koneksi.php';
    $query = "SELECT idFile, namaFile, pathFile
                FROM data_tugas";
    $result2 = mysqli_query($konek, $query) or die('Error, query error');
    if(mysqli_num_rows($result) == 0){
        echo "Database kosong";
    }
    else{
        while(list($idFile, $namaFile, $pathFile) = mysqli_fetch_array($result2)){
            echo "<a href='$pathFile'>$namaFile</a>";
        }
    }
    include 'config/closedb.php';
?>