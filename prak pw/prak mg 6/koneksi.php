<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "mysql";

    $konek = mysqli_connect($servername, $username, $password, $dbname);
    if(!$konek){
        die("Koneksi gagal : " . mysqli_connect_error());
    }
    // else{
    //     echo "Koneksi Berhasil <br/>";
    // }
?>