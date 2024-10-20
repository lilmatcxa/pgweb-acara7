<!DOCTYPE html>
<html>
<body>

<?php
// Deklarasi dan inisialisasi variabel
$nama = "Zidni";
$umur = 10;
$tinggi = 1.75;

// Menampilkan variabel
echo "Nama: " . $nama . "<br>";
echo "Umur: " . $umur . "<br>";
echo "Tinggi: " . $tinggi . " meter<br>";

# Variabel dinamis
$varName = "nama";
$$varName = "Zidni"; // Membuat variabel dinamis
echo "Nama setelah menggunakan variabel dinamis: " . $nama;
?>

</body>
</html>

