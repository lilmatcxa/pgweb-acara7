<!DOCTYPE html>
<html>
<body>

<?php
// 1. Integer
$angka_bulat = 2024;
echo "Bilangan bulat: " . $angka_bulat . "<br>";

// 2. Float
$angka_desimal = 24.233333;
echo "Bilangan desimal: " . $angka_desimal . "<br>";

// 3. Operator Aritmatika
$x = 10;
$y = 3;
echo "Penjumlahan: " . ($x + $y) . "<br>";
echo "Pengurangan: " . ($x - $y) . "<br>";
echo "Perkalian: " . ($x * $y) . "<br>";
echo "Pembagian: " . ($x / $y) . "<br>";
echo "Modulus: " . ($x % $y) . "<br>";

// 4. Operator Penugasan
$z = 5;
$z += 10;
echo "Hasil setelah penugasan penjumlahan: " . $z . "<br>";

// 5. Fungsi Matematika
$angka_negatif = -15.6;
echo "Nilai absolut: " . abs($angka_negatif) . "<br>";
echo "Pembulatan: " . round(4.7) . "<br>";
echo "Bulat ke atas: " . ceil(4.7) . "<br>";
echo "Bulat ke bawah: " . floor(4.7) . "<br>";
echo "Nilai terbesar: " . max(1, 5, 8, 2) . "<br>";
echo "Nilai terkecil: " . min(1, 5, 8, 2) . "<br>";
echo "Akar kuadrat dari 16: " . sqrt(16) . "<br>";

// 6. Bilangan Acak
echo "Bilangan acak antara 1 dan 10: " . rand(1, 10) . "<br>";

// 7. Konversi Tipe Data
$string_number = "123.45";
$int_number = (int) $string_number;
$float_number = (float) $string_number;
echo "Integer: " . $int_number . "<br>";
echo "Float: " . $float_number . "<br>";

?>

</body>
</html>
