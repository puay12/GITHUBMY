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
    $uploadDir = 'C:\PENS Stuffs\semester 2\SO\fileUpload';
    if(isset($_POST['upload'])){
        $namaFile = $_FILES['file_tugas']['namaFile'];
        $tmpName = $_FILES['file_tugas']['tmpName'];
        $sizeFile = $_FILES['file_tugas']['sizeFile'];
        $typeFile = $_FILES['file_tugas']['typeFile'];
        $descript = $_POST['descript'];
        $pathFile = $uploadDir . $namaFile;
        $result_file = move_uploaded_file($tmpName, $path);
        if(!$result_file){
            echo "File gagal diupload";
            exit;
        }
        else{
            if(!get_magic_quotes_gpc()){
                $namaFile = addslashes($namaFile);
                $pathFile = addslashes($pathFile);
            }
            $query_file =  "INSERT INTO data_tugas(namaFile, sizeFile, typeFile, descript, pathFile)
                            VALUES('$namaFile', '$sizeFile', '$typeFile', '$descript', '$pathFile')";
            mysqli_query($konek, $query_file) or die('Error, query failed : ' . mysqli_error());
            header('location:data_tugas.php');
        }
    }
?>