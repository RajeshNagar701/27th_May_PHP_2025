<?php

/*

we will go through the following PHP array sort functions:

sort() - sort arrays in ascending order
rsort() - sort arrays in descending order
asort() - sort associative arrays in ascending order, according to the value
ksort() - sort associative arrays in ascending order, according to the key
arsort() - sort associative arrays in descending order, according to the value
krsort() - sort associative arrays in descending order, according to the key


*/


$cars = array("Volvo", "BMW", "Toyota"); // value sort accendind order

asort($cars);     // value sort accending order A-Z
print_r($cars);
echo "<br>";

arsort($cars);     // value sort deccending order Z-A
print_r($cars);
?>