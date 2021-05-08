<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Akun</title>
	<link rel="stylesheet" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" href="asset/css/main.css">
</head>

<body>
    <div class="regist-sec">
        <div class="container box-regist">
            <h3>DAFTAR AKUN</h3>
            <form action="insert.php" method="post">
                <!-- FORM STEP 1----------- -->
                <div class="step show-form">
                    <!-- NAMA -->
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="hidden" class="form-control" name="id_login" id="nama">
                        <input type="text" class="form-control" name="nama" id="nama">
                    </div>
                    <!-- NRP---------- -->
                    <div class="form-group">
                        <label for="nrp">NRP</label>
                        <input type="text" class="form-control" name="nrp" id="nrp">
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
                    <!-- Alamat-------- -->
                    <div class="form-group">
                        <label for="alamat">Alamat Tempat Tinggal</label>
                        <input type="text" class="form-control" id="alamat" name="alamat">
                    </div>
                    <!-- NEXT-BTN -->
                    <button class="btn btn-main" type="button" id="nextbtn">Next</button>
                </div>
                <!-- END OF FORM STEP 1 -->
    
                <!-- FORM STEP 2 -->
                <div class="step2 hide-form">
                    <!-- Nomor HP -->
                    <div class="form-group">
                        <label for="nohp">Nomor Telepon</label>
                        <input type="text" class="form-control" id="nohp" name="nohp">
                    </div>
                    <!-- Email -->
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email">
                    </div>
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
                    <!-- PREV BTN -->
                    <button class="btn btn-main" type="button" id="prevbtn">Prev</button>
                    <!-- SUBMIT BTN -->
                    <button class="btn btn-main" type="submit" id="submitbtn">Submit</button>
                </div>
                <!-- END OF FORM STEP 2 -->
            </form>
        </div>
    </div>
</body>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"
	integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="asset/js/regist.js"></script>

</html>