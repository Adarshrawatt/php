<?php
echo "<h1>Welcome to the scope tutorial in php</h1>";
$name = "adarsh"; // this variable is a global variable
function nameChange(){
    // $name = "rohan"; // this variable is called as the local varialble
    global $name; // this global word help me out to took the value which is globally declared
    echo "hello guys, the name of that person is $name";    
}
echo $name;
echo "<br>";
nameChange();
?>