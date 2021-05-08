<?php 
include 'config/koneksi.php';
$id_login = $_POST['id_login'];
$nama = $_POST['nama'];
$nrp = $_POST['nrp'];
$tmpt_lahir = $_POST['tmptLAHIR'];
$tgl_lahir = $_POST['tglLAHIR'];
$alamat = $_POST['alamat'];
$nohp = $_POST['nohp'];
$email = $_POST['email'];
$userid = $_POST['userid'];
$userpswd = $_POST['userpswd'];

$sql = "INSERT INTO login_user(userid, userpswd, nama, nrp, tmpt_lahir, tgl_lahir, alamat, notelp, email)
        VALUES('$userid', '$userpswd', '$nama', '$nrp', '$tmpt_lahir', '$tgl_lahir',
                '$alamat', '$nohp', '$email')";
$result = mysqli_query($konek, $sql);

if($result){
    header('location:login.php');
}
else{
    echo "Error : " . mysqli_error($konek) . "<br/>";
}
include 'config/closedb.php';
?>