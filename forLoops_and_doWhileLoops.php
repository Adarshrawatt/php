<?php
echo "<b>This is for loop in action</b>";
// forloop is same as in other language
for ($num=0; $num <= 10; $num++) {
    echo "<br>"; 
    echo $num;
}

// do-while loops 
// in do while loop statement is ancounter atleast one time 
echo "<b>This is do-while loop in action</b>";
echo "<br>";
$num = 1;
do{
    echo $num;
    echo "<br>";
    $num++;
} while ($num <= 10);
?>