<?php 
session_start();
$errormsg = '';

if(isset($_POST['userid']) && isset($_POST['userpswd'])){
    include 'config/koneksi.php';
    $userid = $_POST['userid'];
    $userpswd = $_POST['userpswd'];
    $sql = "SELECT userid
            FROM login_user
            WHERE userid = '$userid' AND userpswd = '$userpswd'";
    $result = mysqli_query($konek, $sql);

    if(mysqli_num_rows($result) == 1){
        $_SESSION['login'] = true;
        $_SESSION['userid'] = $userid;
        $_SESSION['userpswd'] = $userpswd;
        header('Location : main.php');
        exit;
    }
    else{
        $errormsg = 'Maaf, id atau password salah';
        echo $errormsg;
    }
    include 'config/closedb.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/main.css">
</head>

<body>
    <?php 
    if($errormsg != ''){
        echo "<p align='center'>$errormsg</p><br/>";
    }
    ?>
    <div class="login-sec">
        <div class="container box-login">
            <h3>LOGIN</h3>
            <form action="" method="post">
                <!-- USERID----------- -->
				<div class="form-group">
					<label for="userid">Username</label>
					<input type="text" class="form-control" name="userid" id="userid">
				</div>
				<!-- PASSWORD---------- -->
				<div class="form-group">
					<label for="pswd">Password</label>
					<input type="password" class="form-control" name="userpswd" id="pswd">
				</div>
                <button class="btn btn-main" type="submit">Masuk</button>
                <h6 class="text-center">Belum punya akun? <a href="regist.php">Daftar</a></h6>
            </form>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

</html>