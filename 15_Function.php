<!DOCTYPE html>
<html>
<body>

<h2>Contoh Fungsi di PHP</h2>

<?php
// 1. Mendefinisikan Fungsi
function greet($name) {
    return "Halo, $name! Selamat datang.<br>"; // Mengembalikan sapaan
}

// 2. Memanggil Fungsi
echo greet("Zizi"); // Memanggil fungsi dengan parameter "Ali"
echo greet("Siti"); // Memanggil fungsi dengan parameter "Siti"

// 3. Fungsi dengan Nilai Kembali
function add($a, $b) {
    return $a + $b; // Mengembalikan hasil penjumlahan
}

// 4. Menggunakan Fungsi dengan Hasil Kembali
$sum = add(5, 10);
echo "Hasil penjumlahan: $sum<br>"; // Menampilkan hasil penjumlahan
?>

</body>
</html>
