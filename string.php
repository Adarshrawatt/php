<?php
$name = "   Adarsh is a good boy    ";
echo "$name";
echo "<br>";

// lenght of the string 
echo "the lenght of the string is ", strlen($name);
echo "<br>";

// word present in the string
echo str_word_count($name);
echo "<br>";

// reversed a string
echo strrev($name);
echo "<br>";

// position of the word
echo strpos($name, "is");
echo "<br>";

// replacing
echo str_replace("Adarsh", "Rohan", $name);
echo "<br>";

// repeating
echo str_repeat($name,3);
echo "<br>";

// triming functions
echo "<pre>";
echo ltrim($name);
echo "<br>";
echo rtrim($name);
echo "<pre>";
?>