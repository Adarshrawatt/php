<?php

// loops are the method through which we can make our count in asending and desending form
// 1> while loop
$num = 1;
while($num <= 10){
    echo $num ;
    echo "<br>";
    $num++;
}

// table of 2
$num1 = 2;
$num2 = 1;
while($num2 <= 10){
    echo $num1 ."*". $num2 ."=". ($num1 * $num2);
    echo "<br>";
    $num2++;
}
?>