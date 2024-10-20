<!DOCTYPE html>
<html>
<body>

<?php
// 1. Integer Casting
$angka_float = 2.55;
$angka_integer = (int) $angka_float;
echo "Integer dari float: " . $angka_integer . "<br>";

// 2. Float Casting
$angka_string = "70.89";
$angka_float = (float) $angka_string;
echo "Float dari string: " . $angka_float . "<br>";

// 3. String Casting
$angka = 12345;
$angka_string = (string) $angka;
echo "String dari integer: " . $angka_string . "<br>";

// 4. Boolean Casting
$angka = 0;
$boolean = (bool) $angka;
echo "Boolean dari 0: " . ($boolean ? "true" : "false") . "<br>"; // Output akan menampilkan "false"

// 5. Array Casting
$angka = 10;
$array = (array) $angka;
echo "Array dari integer: ";
print_r($array); // Output: Array ( [0] => 10 )
echo "<br>";

// 6. Object Casting
$array = ["nama" => "Zidni", "umur" => 11];
$object = (object) $array;
echo "Object dari array: Nama: " . $object->nama . "<br>";

// 7. Unset Variabel
$angka = 10;
unset($angka); // Menghapus variabel
echo "Unset casting: " . (isset($angka) ? $angka : 'NULL') . "<br>"; // Output: NULL
?>

</body>
</html>
