<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grade Nilai</title>
    <style>
        body{
            background : #303030;
            padding : 100px 100px;
            color : #fff;
            text-align : center;
            font-size : 36px;
            font-family : sans-serif;
        }
        p{
            color : red;
        }
    </style>
</head>

<body>
    
        <?php 
            $nilai = 80;
            $grade;
            echo "Nilai Anda adalah $nilai <br/>";
            echo "Maka grade nilai Anda adalah ";
            
            if($nilai >= 81){
                $grade = 'A';
            }
            else if($nilai >= 71){
                $grade = 'AB';
            }
            else if($nilai >= 66){
                $grade = 'B';
            }
            else if($nilai >= 61){
                $grade = 'BC';
            }
            else if($nilai >= 56){
                $grade = 'C';
            }
            else if($nilai >= 41){
                $grade = 'D';
            }
            else if($nilai >= 0){
                $grade = 'E';
            }

            if(($grade == 'D') || ($grade == 'E')){
                echo "<p>$grade</p>";
            }
            else{
                echo "$grade";
            }
        ?>

</body>
</html>