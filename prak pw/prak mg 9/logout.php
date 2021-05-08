<?php 
session_start();
include 'config/koneksi.php';

if(isset($_SESSION['login'])){
    unset($_SESSION['login']);
}

header('location:login.php');
include 'config/closedb.php';
?>