<!DOCTYPE html>
<html>
<body>

<h2>Contoh Loop di PHP</h2>

<!-- Loop for -->
<h3>1. Loop for</h3>
<?php
for ($i = 1; $i <= 5; $i++) {
    echo "Angka: $i<br>"; // Menampilkan angka dari 1 hingga 5
}
?>

<!-- Loop while -->
<h3>2. Loop while</h3>
<?php
$j = 1;
while ($j <= 5) {
    echo "Angka: $j<br>"; // Menampilkan angka dari 1 hingga 5
    $j++;
}
?>

<!-- Loop foreach -->
<h3>3. Loop foreach</h3>
<?php
$angka = [1, 2, 3, 4, 5];
foreach ($angka as $value) {
    echo "Angka: $value<br>"; // Menampilkan angka dari array
}
?>

</body>
</html>
