<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validasi Nilai</title>
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            color: #001833;
        }
        p{
            font-size : 18px;
            text-align: center;
            margin-top : 0;
        }
        .merah{
            color : #f81c40;
            font-weight : bold;
        }
        .badan{
            width: 100%;
            height: 100vh;
            background-image: linear-gradient(to right top, #35547b, #4e5992, #7559a1, #a253a5, #ce489c, 
            #e5478a, #f64c75, #ff5a5e, #ff754a, #ff9333, #ffb319, #fad202);
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .box{
            width: 500px;
            height: 350px;
            border-radius: 20px;
            background: rgba(255, 255, 255, 0.877);
            padding: 24px 24px;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }
        .title{
            font-size: 36px;
            font-weight: bolder;
            text-align: center;
            margin-top: 3%;
            margin-bottom : 8%;
        }
    </style>
</head>

<body>
    <div class="badan">
        <div class="container box">
            <p class="title">Validasi Nilai</p>
            <?php 
                $nama = $_GET['nama'];
                $nilai = $_GET['nilai'];

                function cariNilai($grade){
                    if($grade >= 81){
                        $hasil = 'A';
                    }
                    else if($grade >= 71){
                        $hasil = 'AB';
                    }
                    else if($grade >= 66){
                        $hasil = 'B';
                    }
                    else if($grade >= 61){
                        $hasil = 'BC';
                    }
                    else if($grade >= 56){
                        $hasil = 'C';
                    }
                    else if($grade >= 41){
                        $hasil = 'D';
                    }
                    else if($grade >= 0){
                        $hasil = 'E';
                    }
                    return $hasil;
                }

                if((is_numeric($nilai)) && (is_numeric($nama) == FALSE)){
                    echo "<p>Halo, <b>$nama</b></p><br/>";
                    $grade = cariNilai($nilai);
                    echo "<p>Nilai kamu adalah <b>$nilai</b></p><br/>";
                    if(($grade == 'D') || ($grade == 'E')){
                        echo "<p>Grade kamu adalah <p class='merah'>$grade</p></p>";
                    }
                    else{
                        echo "<p>Grade kamu adalah <b>$grade</b></p>";
                    }
                }
                else{
                    echo "<p>Input nama harus berupa huruf.</p><br/>";
                    echo "<p>Dan input nilai harus berupa angka.</p>";
                }
            ?>
        </div>
    </div>
</body>
</html>