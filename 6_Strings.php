<!DOCTYPE html>
<html>
<body>

<?php
// 1. Menggabungkan String
$nama_depan = "Budiono";
$nama_belakang = "Siregar!!";
$nama_lengkap = $nama_depan . " " . $nama_belakang;
echo "Nama lengkap: " . $nama_lengkap . "<br>";

// 2. Menentukan Panjang String
$teks = "Sugeng enjing";
echo "Panjang string: " . strlen($teks) . "<br>";

// 3. Menghitung Jumlah Kata
$kalimat = "PHP adalah bahasa alien";
echo "Jumlah kata: " . str_word_count($kalimat) . "<br>";

// 4. Membalik String
$teks = "tukli";
echo "String terbalik: " . strrev($teks) . "<br>";

// 5. Mencari Substring
$kalimat = "Selamat datang di dunia Tevyat";
$posisi = strpos($kalimat, "PHP");
if ($posisi !== false) {
    echo "Kata 'PHP' ditemukan di posisi: " . $posisi . "<br>";
} else {
    echo "Kata 'PHP' tidak ditemukan<br>";
}

// 6. Mengganti Substring
$kalimat = "Saya belajar dunia per PHP an";
$kalimat_baru = str_replace("PHP", "JavaScript", $kalimat);
echo "Kalimat baru: " . $kalimat_baru . "<br>";

// 7. Mengubah Huruf Besar dan Kecil
$teks = "php adalah bahasa alien";
echo "Huruf besar semua: " . strtoupper($teks) . "<br>";
echo "Huruf kecil semua: " . strtolower($teks) . "<br>";
echo "Huruf besar pertama: " . ucfirst($teks) . "<br>";
echo "Huruf besar setiap kata: " . ucwords($teks) . "<br>";

// 8. Memotong String
$teks = "Selamat tidur";
$potong = substr($teks, 8);
echo "Hasil potong string: " . $potong . "<br>";
?>

</body>
</html>

