<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data types in php</title>
</head>
<body>
    <center>
    <h1>
    <?php
    echo "Data types in php";
    ?>
    </h1>
    </center>
     
    <p>
  
        1.) String <br>
        2.) Integer <br>
        3.) Float <br>
        4.) Boolean <br>
        5.) Object <br>
        6.) Array <br>
        7.) Null <br>
       
        <h3>String</h3>
        <?php 
        // string are the sequence of the character
        $name = "adarsh";
        $friend = "rohan";
        echo "$name ka friend hai $friend";
        ?>
        <h3>Integer</h3>
         <?php 
         $num1 = 4563;
         $num2 = -453;
         echo $num1 + $num2;
         ?>
        <h3>Float</h3>
         <?php 
         $deci1 = 4.563;
         $deci2 = -4.53;
         echo $deci1 + $deci2;
         ?>
        <h3>Boolean</h3>
         <?php 
         $bool1 = true;
         $bool2 = false;
        echo var_dump($bool1); 
        echo "<br>";
        echo var_dump($bool2);
         ?>
        <h3>Array</h3>
         <?php 
         $arr = array(2,3,4,5,5,6,7);
         echo var_dump($arr);
         echo var_dump($arr[0]);
         echo("<br>");
         echo var_dump($arr[1]);
         echo("<br>");
         echo var_dump($arr[2]);
         echo("<br>");
         echo var_dump($arr[3]);
         echo("<br>");
         ?>
    </p>
   
</body>
</html>