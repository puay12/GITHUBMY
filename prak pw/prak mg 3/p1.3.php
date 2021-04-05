<!DOCTYPE html>
<html>
<body>
<?php
$t = date("H");
echo "<p>Waktu di Server Komputer adalah " . $t;
echo ",Pesan untuk anda:</p>";
if ($t < "10") {
    echo "Selamat Pagi!";
} elseif ($t < "14") {
    echo "Selamat Siang";
} elseif ($t < "18") {
    echo "Selamat Sore";
} else {
    echo "Have a good night!";
}
?>
</body>
</html>