<!DOCTYPE html>
<html>
<body>
<pre>
<?php
// Data untuk kolom
$flowers = array("Rose", "Tulip", "Lily", "Sunflower", "Daisy", "Orchid", "Carnation");
$colors = array("Red", "Yellow", "White", "Orange", "Pink", "Purple", "Peach");
$quantities = array(15, 25, 20, 30, 10, 12, 18);
$prices = array(1.50, 1.00, 2.00, 3.00, 0.80, 2.50, 1.75);
$sources = array("Garden", "Nursery", "Florist", "Farm", "Market", "Grocer", "Field");

// Membuat tabel
echo "<table border='1'>";
echo "<tr>
        <th>Flower</th>
        <th>Color</th>
        <th>Quantity</th>
        <th>Price ($)</th>
        <th>Source</th>
      </tr>";

for($i = 0; $i < 7; $i++) {
    echo "<tr>
            <td>{$flowers[$i]}</td>
            <td>{$colors[$i]}</td>
            <td>{$quantities[$i]}</td>
            <td>{$prices[$i]}</td>
            <td>{$sources[$i]}</td>
          </tr>";
}
echo "</table>";
?>
</pre>

</body>
</html>
