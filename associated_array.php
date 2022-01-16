<?php
echo "<h1>Welcome to the Assciated array with php</h1>";

// first method
$name = array("rohan","adarsh","ramesh","suresh");
echo $name[0];
echo "<br>";
echo $name[1];
echo "<br>";
echo $name[2];
echo "<br>";
echo $name[3];
echo "<br>";


// associated array method
// name with fav. color
$favCol = array("adarsh" => "red","rohan" => "blue",
                "ramesh" => "green","suresh" => "brown");
echo $favCol["adarsh"];
echo "<br>";
echo $favCol["rohan"];
echo "<br>";
echo $favCol["ramesh"];
echo "<br>";
echo $favCol["suresh"];
echo "<br>";

foreach ($favCol as $key => $value) {
    echo "the fav. colour of $key is $value";
    echo "<br>";
}
?>