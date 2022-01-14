<?php
echo "<h1>Welcom to the function tutorial</h1>";

function marksSum($marksarr){
    $sum = 0;
    foreach ($marksarr as $value) {
        $sum = $value + $sum;
    }
    return $sum;
}

function average($marksarr){
    $sum = 0;
    $i = 0;
    foreach ($marksarr as $value) {
        $sum = $value + $sum;
        $i++;
    }
    return $sum/$i;
}

$marksarr = array(87,67,57,34,78,86);
$ans1 = marksSum($marksarr);
$av1 = average($marksarr);
echo "the sum of all the subject is of roahn " .$ans1." out of 600";
echo "<br>";
echo "and the average of these subject is ".$av1;
echo "<br>";

$marksofharry = array(45,65,65,45,45,64);
$ans2 = marksSum($marksofharry);
$av2 = average($marksofharry);
echo "the sum of all the subject is of roahn " .$ans2." out of 600";
echo "<br>";
echo "and the average of these subject is ".$av2;
echo "<br>";

?>