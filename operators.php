<?php
// there are 4 type of operators in the php
// 1) Airthmatic operators
// 2) Assingment operators
// 3) logical operators


echo "<h1> Airthamatic operator</h1>";
$a = 34;
$b = 24;
echo "the sum of two number is ", ($a + $b); echo "<br>";
echo "the subtract of two number is ", ($a - $b); echo "<br>";
echo "the multiply of two number is ", ($a * $b); echo "<br>";
echo "the divide of two number is ", ($a / $b); echo "<br>";
echo "the power of two number is ", ($a ** $b); echo "<br>";
echo "the module of two number is ", ($a % $b); echo "<br>";



echo "<h1> Assingment operator</h1>";
$a = 34;
$b = 24;

$c = $a;
echo "the value of c is ".$c; echo "<br>";



echo "<h1>Comparison operators</h1>";
echo "less than"; echo "<br>";
echo "greter than"; echo "<br>";
echo "less ans equals to"; echo "<br>";
echo "greter than and equals too"; echo "<br>";

echo "<h1> Logical Operators</h1>";
echo "and"; echo "<br>";
echo "OR"; echo "<br>";
echo "xor"; echo "<br>";


echo "<h1>Increment/Decrement operators</h1>";
$c += 6;
echo "the value of c is after adding 6 is".$c; echo "<br>";
$c -= 6;
echo "the value of c is after Subtracting 6 is".$c; echo "<br>";
$c++;
echo "the value of c after increment of one ".$c;  echo "<br>";
$c--;
echo "the value of c after decrement of one ".$c;  echo "<br>";
?>