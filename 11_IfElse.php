<!DOCTYPE html>
<html>
<body>

<h2>Contoh Penggunaan If, Elseif, dan Else di PHP</h2>

<?php
$nilai = 75;

if ($nilai >= 80) {
    echo "Nilai A (Sangat Baik)<br>";
} elseif ($nilai >= 65) {
    echo "Nilai B (Baik)<br>";
} elseif ($nilai >= 50) {
    echo "Nilai C (Cukup)<br>";
} else {
    echo "Nilai D (Kurang)<br>";
}
?>

</body>
</html>
