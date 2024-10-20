<!DOCTYPE html>
<html>
<body>

<h2>Contoh Operator di PHP</h2>

<h3>1. Operator Aritmatika</h3>
<?php
$a = 10; $b = 3;

echo "Penjumlahan: " . ($a + $b) . "<br>"; // +
echo "Pengurangan: " . ($a - $b) . "<br>"; // -
echo "Perkalian: " . ($a * $b) . "<br>"; // *
echo "Pembagian: " . ($a / $b) . "<br>"; // /
echo "Modulus: " . ($a % $b) . "<br>"; // %
echo "Pangkat: " . ($a ** $b) . "<br>"; // **
?>

<h3>2. Operator Penugasan</h3>
<?php
$x = 10; $y = 5;

$x += $y; echo "x += y: $x<br>";
$x -= $y; echo "x -= y: $x<br>";
$x *= $y; echo "x *= y: $x<br>";
$x /= $y; echo "x /= y: $x<br>";
$x %= $y; echo "x %= y: $x<br>";
?>

<h3>3. Operator Perbandingan</h3>
<?php
$n1 = 5; $n2 = '5';

echo ($n1 == $n2) ? "$n1 == $n2 (Equal)<br>" : "$n1 != $n2<br>";
echo ($n1 === $n2) ? "$n1 === $n2 (Identical)<br>" : "$n1 !== $n2 (Identical)<br>";
?>

</body>
</html>
