<!DOCTYPE html>
<html>
<body>
<?php
$favcolor = "green";
switch ($favcolor) {
    case "red":
        echo "<p style=’color: red;’> Warna terpilih MERAH! </p>";
        break;
    case "blue":
        echo "<p style=’color: blue;’> Warna terpilih BIRU! </p>";
        break;
    case "green":
        echo "<p style=’color: green;’> Warna terpilih HIJAU! </p>";
        break;
    default:
        echo "Coba lagi!";
}
?>
</body>
</html>