<!DOCTYPE html>
<html>
<body>

<h2>Contoh Penggunaan Switch di PHP</h2>

<?php
$hari = 3;

switch ($hari) {
    case 1:
        echo "Hari: Senin<br>";
        break;
    case 2:
        echo "Hari: Selasa<br>";
        break;
    case 3:
        echo "Hari: Rabu<br>";
        break;
    case 4:
        echo "Hari: Kamis<br>";
        break;
    case 5:
        echo "Hari: Jumat<br>";
        break;
    case 6:
        echo "Hari: Sabtu<br>";
        break;
    case 7:
        echo "Hari: Minggu<br>";
        break;
    default:
        echo "Tidak ada hari yang cocok<br>";
}
?>

</body>
</html>
