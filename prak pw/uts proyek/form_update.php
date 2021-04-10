<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form</title>
	<link rel="stylesheet" href="bootstrap.min.css">
	<link rel="stylesheet" href="form.css">
</head>

<body>
    <?php 
        include 'koneksi.php';
        $id = $_GET['id_mhs'];
        $sql = "SELECT * FROM mahasiswa WHERE id_mhs=" . $id;
        $result = mysqli_query($konek, $sql);

        if(mysqli_num_rows($result) > 0){
            while($kolom = mysqli_fetch_array($result)){
                $nama = $kolom['nama'];
                $tmptLahir = $kolom["tmptLAHIR"];
                $tglLahir = $kolom["tglLAHIR"];
                $gender = $kolom["gender"];
                $alamat = $kolom["alamat"];
                $jurusan = $kolom["jurusan"];
                $lamaStudiThn = $kolom["lama-studi-thn"];
                $lamaStudiBln = $kolom["lama-studi-bln"];
                $ipk = $kolom["ipk"];
                $deskripsi = $kolom["deskripsi"];
            }
        }
        else{
            echo "0 result";
        }
    ?>
	<!-- FORM -->
	<div class="sec2 position-relative" id="sec2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-3 position-relative"><img src="26.png" alt="org"></div>
				<div class="col-9 position-relative">
					<div class="box">
						<p class="judul text-uppercase">biodata diri</p>
						<!-- FORM------- -->
						<form action="update.php" method="post">
							<!-- FORM STEP 1 -->
							<div class="step show-form">
								<!-- NRP----------- -->
								<div class="form-group">
									<label for="nrp">NRP</label>
									<input type="text" class="form-control" name="nrp" id="nrp" 
                                    value="<?php echo $nrp;?>">
								</div>
								<!-- nama---------- -->
								<div class="form-group">
									<label for="nama">Nama Lengkap</label>
									<input type="text" class="form-control" name="nama" id="nama" 
                                    value="<?php echo $nama;?>">
								</div>
								<!-- TTL----------- -->
								<div class="form-group">
									<label for="ttl">Tempat dan Tanggal lahir</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" name="tmptLAHIR" id="ttl"
												placeholder="Kota Kelahiran" value="<?php echo $tmptLahir;?>">
										</div>
										<div class="col">
											<input type="date" class="form-control" name="tglLAHIR" id="ttl"
												placeholder="Tanggal lahir" value="<?php echo $tglLahir;?>">
										</div>
									</div>
								</div>
								<!-- JENIS KELAMIN -->
								<div class="form-group">
									<label for="gender">Jenis Kelamin</label>
									<select class="form-control" id="gender" name="gender" value="<?php echo $gender;?>">
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<!-- AGAMA---------- -->
								<div class="form-group">
									<label for="agama">Agama</label>
									<select class="form-control" id="agama" name="agama" value="<?php echo $agama;?>">
										<option value="Islam">Islam</option>
										<option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
										<option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Lainnya">Lainnnya</option>
									</select>
								</div>
								<!-- Alamat-------- -->
								<div class="form-group">
									<label for="alamat">Alamat Tempat Tinggal</label>
									<input type="text" class="form-control" id="alamat" name="alamat" 
                                    value="<?php echo $alamat;?>">
								</div>
								<br />
								<!-- NEXT-BTN -->
								<button class="btn btn-main" type="button" id="nextbtn">Next</button>
							</div>
							<!-- END OF FORM STEP 1 -->

							<!-- FORM STEP 2 -->
							<div class="step2 hide-form"> 
								<!-- Jurusan----------- -->
								<div class="form-group">
									<label for="jurusan">Jurusan</label>
									<input type="text" class="form-control" name="jurusan" id="jurusan"
                                    value="<?php echo $jurusan;?>">
								</div>
								<!-- Lama study---------- -->
								<div class="form-group">
									<label for="lama-studi">Lama Studi</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" name="lama-studi-thn"
												id="lama-studi" placeholder="Tahun" value="<?php echo $lamaStudiThn;?>">
										</div>
										<div class="col">
											<input type="text" class="form-control" name="lama-studi-bln"
												id="lama-studi" placeholder="Bulan" value="<?php echo $lamaStudiBln;?>">
										</div>
									</div>
								</div>
								<!-- IPK Terakhir----------- -->
								<div class="form-group">
									<label for="ipk">IPK Terakhir</label>
									<input type="text" class="form-control" name="ipk" id="ipk" 
									placeholder="4.00 (Gunakan titik sebagai koma)" value="<?php echo $ipk;?>">
								</div>
								<!-- DESKRIPSI -->
								<div class="form-group">
									<label for="deskripsi">Tentang Anda</label>
									<textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"
									placeholder="Tuliskan tentang diri Anda kurang dari 250 karakter"
                                    value="<?php echo $deskripsi;?>"></textarea>
								</div>
								<br />
								<!-- PREV BTN -->
								<button class="btn btn-main" type="button" id="prevbtn">Prev</button>
								<!-- SUBMIT BTN -->
								<button class="btn btn-main" id="submitbtn">Submit</button>
							</div>
							<!-- END OF FORM STEP 2 -->
						</form>
					</div>
				</div>
			</div>
			<div class="circle1">Isi data dengan benar. <br />Data aman bersama kami.</div>
			<div class="circle2"></div>
			<div class="circle3"></div>
		</div>
	</div>
	<!-- END OF FORM -->
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="form.js"></script>

</html>