<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
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
        $word = array('s', 'o', 'o', 'n', 'i');
        $vokal = array('a', 'i', 'u', 'e', 'o');
        $jmlh = 0;
        for($i = 0; $i < 5; $i++){
            for($j = 0; $j < 5; $j++){
                if($word[$i] == $vokal[$j]){
                    $jmlh++;
                }
            }
        }
        echo "Jumlah dari huruf vokal yang ada = $jmlh <br/>";
    ?>
</body>
</html>