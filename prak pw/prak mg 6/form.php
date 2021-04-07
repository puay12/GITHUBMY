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
	<div class="sec1 position-relative">
		<div class="container-fluid">
			<div class="row">
				<div class="col-3 position-relative"><img src="26.png" alt="org"></div>
				<div class="col-9 position-relative">
					<div class="box">
						<p class="judul text-uppercase">biodata diri</p>
						<!-- FORM------- -->
						<form action="isi.php" method="post">
							<div class="step">
								<!-- NRP----------- -->
								<div class="form-group">
									<label for="nrp">NRP</label>
									<input type="text" class="form-control" name="nrp" id="nrp">
								</div>
								<!-- nama---------- -->
								<div class="form-group">
									<label for="nama">Nama Lengkap</label>
									<input type="text" class="form-control" name="nama" id="nama">
								</div>
								<!-- JENIS KELAMIN -->
								<div class="form-group">
									<label for="gender">Jenis Kelamin</label>
									<select class="form-control" id="gender" name="gender">
										<option value="Laki-laki">Laki-laki</option>
										<option value="Perempuan">Perempuan</option>
									</select>
								</div>
                                <!-- AGAMA---------- -->
								<div class="form-group">
									<label for="agama">Agama</label>
									<select class="form-control" id="agama" name="agama">
										<option value="Islam">Islam</option>
										<option value="Kristen Protestan">Kristen Protestan</option>
                                        <option value="Kristen Katolik">Kristen Katolik</option>
										<option value="Hindu">Hindu</option>
                                        <option value="Buddha">Buddha</option>
                                        <option value="Konghucu">Konghucu</option>
                                        <option value="Lainnya">Lainnnya</option>
									</select>
								</div>
                                <!-- umur---------- -->
								<div class="form-group">
									<label for="umur">Umur</label>
									<input type="text" class="form-control" name="umur" id="umur">
								</div>
								<!-- Alamat-------- -->
								<div class="form-group">
									<label for="alamat">Alamat Tempat Tinggal</label>
									<input type="text" class="form-control" id="alamat" name="alamat">
								</div>
								<br />
								<!-- NEXT-BTN -->
								<button class="btn btn-main" type="submit">Submit</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			<div class="circle1">Isi data dengan benar. <br />Data aman bersama kami.</div>
			<div class="circle2"></div>
			<div class="circle3"></div>
		</div>
	</div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="form.js"></script>

</html>