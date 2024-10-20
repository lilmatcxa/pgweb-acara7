<!DOCTYPE html>
<html>
<body>
 
<?php
// 1. Echo dengan string tunggal
echo "Ini adalah echo dengan string tunggal.<br>";

// 2. Echo dengan beberapa argumen
$nama = "Zidni";
$umur = 10;
echo "Nama: ", $nama, ", Umur: ", $umur, "<br>";

// 3. Echo dengan gabungan variabel dan string
$pekerjaan = "berkomunikasi dengan mesin, memahat air, mengukir daun";
echo "Nama saya " . $nama . " dan saya adalah " . $pekerjaan . ".<br>";

// 4. Echo dengan tanda kurung
echo ("Ini adalah echo dengan tanda kurung.<br>");

// 5. Echo dengan HTML
echo "<h2>Ini adalah judul HTML yang dibuat dengan echo</h2>";
echo "<p>Paragraf ini dibuat dengan echo PHP.</p>";

// 6. Echo dalam kondisi ternary
$is_logged_in = false;
echo $is_logged_in ? "Selamat datang kembali!" : "Silakan login.";
?>

</body>
</html>
