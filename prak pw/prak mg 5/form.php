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
	<!-- LANDING -->
	<div class="sec1 position-relative">
		<div class="container-fluid hero">
			<p class="judul text-uppercase">welcome!</p>
			<p class="sub">Isi data dirimu dengan klik tombol di bawah ini.</p>
			<a href="#sec2"><button class="btn btn-main text-uppercase">isi form</button></a>
		</div>
	</div>
	<!-- END OF LANDING -->

	<!-- SECTION 2 -->
	<div class="sec2 position-relative" id="sec2">
		<div class="container-fluid">
			<div class="row">
				<div class="col-3 position-relative"><img src="26.png" alt="org"></div>
				<div class="col-9 position-relative">
					<div class="box">
						<p class="judul text-uppercase">biodata diri</p>
						<!-- FORM------- -->
						<form action="tampil.php">
							<!-- FORM STEP 1 -->
							<div class="step show-form">
								<!-- NRP----------- -->
								<div class="form-group">
									<label for="nrp">NRP</label>
									<input type="number" class="form-control" name="nrp" id="nrp">
								</div>
								<!-- nama---------- -->
								<div class="form-group">
									<label for="nama">Nama Lengkap</label>
									<input type="text" class="form-control" name="nama" id="nama">
								</div>
								<!-- TTL----------- -->
								<div class="form-group">
									<label for="ttl">Tempat dan Tanggal lahir</label>
									<div class="row">
										<div class="col">
											<input type="text" class="form-control" name="tmptLAHIR" id="ttl"
												placeholder="Kota Kelahiran">
										</div>
										<div class="col">
											<input type="date" class="form-control" name="tglLAHIR" id="ttl"
												placeholder="Tanggal lahir">
										</div>
									</div>
								</div>
								<!-- JENIS KELAMIN -->
								<div class="form-group">
									<label for="gender">Jenis Kelamin</label>
									<select class="form-control" id="gender" name="gender">
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
								<!-- Alamat-------- -->
								<div class="form-group">
									<label for="alamat">Alamat Tempat Tinggal</label>
									<input type="text" class="form-control" id="alamat" name="alamat">
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
									<input type="text" class="form-control" name="jurusan" id="jurusan">
								</div>
								<!-- Lama study---------- -->
								<div class="form-group">
									<label for="lama-studi">Lama Studi</label>
									<div class="row">
										<div class="col">
											<input type="number" class="form-control" name="lama-studi-thn"
												id="lama-studi" placeholder="Tahun">
										</div>
										<div class="col">
											<input type="number" class="form-control" name="lama-studi-bln"
												id="lama-studi" placeholder="Bulan">
										</div>
									</div>
								</div>
								<!-- IPK Terakhir----------- -->
								<div class="form-group">
									<label for="ipk">IPK Terakhir</label>
									<input type="text" class="form-control" name="ipk" id="ipk" 
									placeholder="4.00 (Gunakan titik sebagai koma)">
								</div>
								<!-- DESKRIPSI -->
								<div class="form-group">
									<label for="deskripsi">Tentang Anda</label>
									<textarea class="form-control" id="deskripsi" name="deskripsi" rows="5"></textarea>
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
	<!-- END OF SECTION 2 -->
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="form.js"></script>

</html>