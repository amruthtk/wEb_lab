<?php
$name = ["Doe", "John", "Alice", "Charlie","Bob","roshan"];

echo "Displaying using print_r <br>";
print_r($name);
echo "<br><br>";
echo "Sorting using asort() <br>";
asort($name);
print_r($name);
echo "<br><br>";
echo "Sorting using arsort() <br>";
arsort($name);
print_r($name);
?>

