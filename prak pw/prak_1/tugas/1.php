<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bilangan Prima/Tidak</title>
    <style>
        body{
            background : #303030;
            padding : 100px 100px;
            color : #fff;
            font-family : sans-serif;
            font-size : 36px;
            text-align : center;
        }
    </style>
</head>

<body>
    
    <?php
        $bil = 24;
        // definisi fungsi
        function prima($num){
            $faktor = 0;
            
            for($i = 1; $i <= $num; $i++){
                if($num % $i == 0){
                    $faktor++;
                }
            }
            if($faktor > 2){
                echo "Bilangan $num bukan bilangan prima.";
            }
            else{
                echo "Bilangan $num adalah bilangan prima.";
            }
        }

        // panggil fungsi
        prima($bil);
    ?>

</body>
</html>