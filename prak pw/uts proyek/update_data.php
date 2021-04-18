<?php 
    include 'koneksi.php';
    $id_mhs = $_GET['id_mhs'];
    $nrp = $_POST["nrp"];
    $nama = $_POST['nama'];
    $tmptLahir = $_POST["tmptLAHIR"];
    $tglLahir = $_POST["tglLAHIR"];
    $gender = $_POST["gender"];
    $agama = $_POST['agama'];
    $alamat = $_POST["alamat"];
    $jurusan = $_POST["jurusan"];
    $lamaStudiThn = $_POST["lama-studi-thn"];
    $lamaStudiBln = $_POST["lama-studi-bln"];
    $ipk = $_POST["ipk"];
    $deskripsi = $_POST["deskripsi"];
    $sql = "UPDATE mahasiswa SET nama = '$nama', tmpt_lahir = '$tmptLahir', tgl_lahir = '$tglLahir', gender = '$gender', 
            agama = '$agama', alamat = '$alamat', jurusan = '$jurusan', lama_studi_thn = '$lamaStudiThn',
            lama_studi_bln = '$lamaStudiBln', ipk = '$ipk', desc_diri = '$deskripsi' WHERE id_mhs='$id_mhs'";

	if(mysqli_query($konek, $sql)){
		header("location:tampil.php");
	}
	else{
		echo "<h1>Error : <br/>" . mysqli_error($konek) . "</h1>";
	}
	mysqli_close($konek);
?>
