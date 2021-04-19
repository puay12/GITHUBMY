<?php 
    $servername = "localhost";
    $username = "ubuntu";
    $password = "12345678";
    $dbname = "prak_pw";

    $konek = mysqli_connect($servername, $username, $password, $dbname);
    if(!$konek){
        die("Koneksi gagal : " . mysqli_connect_error());
    }
?>