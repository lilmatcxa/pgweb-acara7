<!DOCTYPE html>
<html>
<body>

<h2>Contoh Fungsi Matematika di PHP</h2>

<?php
// 1. Fungsi pi()
$nilai_pi = pi();
echo "Nilai Pi: " . $nilai_pi . "<br><br>";

// 2. Fungsi min() dan max()
$min_value = min(5, 10, 2, 8);
$max_value = max(5, 10, 2, 8);
echo "Nilai Minimum: " . $min_value . "<br>";
echo "Nilai Maksimum: " . $max_value . "<br><br>";

// 3. Fungsi abs()
$angka_negatif = -15;
$nilai_abs = abs($angka_negatif);
echo "Nilai Absolut dari " . $angka_negatif . ": " . $nilai_abs . "<br><br>";

// 4. Fungsi sqrt()
$angka = 25;
$akar_kuadrat = sqrt($angka);
echo "Akar Kuadrat dari " . $angka . ": " . $akar_kuadrat . "<br><br>";

// 5. Fungsi round()
$angka_bulat = 3.6;
$angka_rounded = round($angka_bulat);
echo "Pembulatan dari " . $angka_bulat . ": " . $angka_rounded . "<br>";

$angka_bulat_decimal = 3.14159;
$angka_rounded_decimal = round($angka_bulat_decimal, 2);
echo "Pembulatan ke 2 desimal dari " . $angka_bulat_decimal . ": " . $angka_rounded_decimal . "<br><br>";

// 6. Angka Acak
$angka_acak = rand(1, 100); // Angka acak antara 1 dan 100
echo "Angka Acak: " . $angka_acak . "<br>";

$angka_acak_mt = mt_rand(1, 100); // Angka acak antara 1 dan 100
echo "Angka Acak (mt_rand): " . $angka_acak_mt . "<br>";
?>

</body>
</html>
