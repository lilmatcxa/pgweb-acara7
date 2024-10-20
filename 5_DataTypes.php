<!DOCTYPE html>
<html>
<body>
 
<?php
// 1. String
$greeting = "Selamat datang di Tabungan nuklir!";
echo "Tipe data String: " . $greeting . "<br>";

// 2. Integer
$tahun = 2024;
echo "Tipe data Integer: " . $tahun . "<br>";

// 3. Float
$pi = 24.23;
echo "Tipe data Float: " . $pi . "<br>";

// 4. Boolean
$is_php_fun = true;
echo "Tipe data Boolean: " . ($is_php_fun ? 'Benar' : 'Salah') . "<br>";

// 5. Array
$buah = array("Elektro", "Anemo", "Hydro");
echo "Tipe data Array (Indeks): " . $buah[0] . ", " . $buah[1] . ", " . $buah[2] . "<br>";

// 6. Array Asosiatif
$mahasiswa = array("nama" => "Zidni", "umur" => 11, "jurusan" => "sastra mesin");
echo "Tipe data Array Asosiatif: Nama - " . $mahasiswa["nama"] . ", Umur - " . $mahasiswa["umur"] . "<br>";

// 7. Object
class Buku {
    public $judul;
    public function __construct($judul) {
        $this->judul = $judul;
    }
    public function tampilkan_judul() {
        return "Judul buku: " . $this->judul;
    }
}
$buku_baru = new Buku("Memanggang api");
echo "Tipe data Object: " . $buku_baru->tampilkan_judul() . "<br>";

// 8. NULL
$kosong = NULL;
echo "Tipe data NULL: " . (is_null($kosong) ? "Variabel kosong" : "Ada nilai") . "<br>";

?>

</body>
</html>
