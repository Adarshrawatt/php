<?php
$a = 84;

// problem 1
if($a > 45){
    echo "a is greater than 45";
    echo "<br>";
} else {
    echo "not greaater than 45";    
    echo "<br>";
}


// problem 2
$age = 17;
if($age < 18){
    echo "you are not eligible of the driving and riding";
    echo "<br>";
} elseif($age > 18 && $age < 25){
    echo "eligible only for riding";
    echo "<br>";
} else{
    echo "eligible for driving also";
    echo "<br>";
}

?>