<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 2</title>
    <style>
        body{
            background : #303030;
            color : #fff;
            font-size : 24px;
            font-family : sans-serif;
            padding : 100px;
            text-align : center;
        }
    </style>
</head>
<body>
    <?php 
        $input = "abc";

        function cek($a){
            if(is_numeric($a)){
                echo "Input Anda adalah $a <br>";
            }
            else{
                echo "Input harus berupa angka. <br>";
            }
        }

        cek($input);
        ?>
</body>
</html>