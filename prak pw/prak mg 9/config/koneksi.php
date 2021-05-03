<?php 
    $servername = "localhost";
    $username = "3120600018";
    $password = "3120600018panaz";
    $dbname = "3120600018";

    $konek = mysqli_connect($servername, $username, $password, $dbname);
    if(!$konek){
        die("Koneksi gagal : " . mysqli_connect_error($konek));
    }
?>