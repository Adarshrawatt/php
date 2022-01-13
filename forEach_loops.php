<?php
echo "<b>Welcome to the world of forEach loop</b>";
echo "<br>";
$arr = array("apple","banana","mango","pileapple");
// we can show this array by the for , while and do- while loop 
// but through forEach loop we can simple iterate the array 
foreach ($arr as  $value) {
    echo $value;
    echo "<br>";
}


$arr2 = array(1,2,3,4,5,6,6,7,9,5,4,5,6,3,5);
foreach ($arr2 as $value) {
    echo $value;
    echo " ";
}
?>