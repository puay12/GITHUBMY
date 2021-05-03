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
	<link rel="stylesheet" href="asset/css/main.css">
</head>

<body>
    <div class="main-sec">
        <h2 class="text-center">SELAMAT DATANG DI HALAMAN ADMIN</h2>
        <a href="logout.php">Logout</a>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>