<?php
echo "<h1>Welcome to the multi-dimensional array in php</h1>"; 

$multiArray = array(
    array("adrsh","rohan","suresh","ramesh","chintu"),
    array("red","green","blue","brown","purple"),
    array("car","bus","rickshaw","airplane")
);

// we can iterate individual like this
echo $multiArray[0][0];
echo "<br>";
echo $multiArray[0][1];
echo "<br>";
echo $multiArray[0][2];
echo "<br>";
echo $multiArray[0][3];
echo "<br>";
echo $multiArray[1][0];
echo "<br>";
echo $multiArray[1][1];
echo "<br>";
echo $multiArray[1][2];
echo "<br>";
echo $multiArray[1][3];
echo "<br>";


// we can iterate in group like this 
for ($i=0; $i < count($multiArray); $i++) { 
    for ($j=0; $j < count($multiArray[$i]); $j++) { 
        echo $multiArray[$i][$j];
        echo " ";
    }
    echo "<br>";
}
?>