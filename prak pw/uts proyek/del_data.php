<?php 
    include 'koneksi.php';
    $id = $_GET['id_mhs'];
    $sql = "DELETE FROM mahasiswa WHERE id_mhs=$id";

    if(mysqli_query($konek, $sql)){
		header("location:tampil.php");
	}
	else{
		echo "<h1>Error : <br/>" . mysqli_error($konek) . "</h1>";
	}
	mysqli_close($konek);
?>