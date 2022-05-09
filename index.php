<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    // Write a Program to display count, from 5 to 15 using PHP loop as given below.
     $count = 4;
     for($i = 0 ; $i <= 10 ; $i++) {
         global $count;
         $count++;
         echo $count . '<br>';
     }
    ?>
    <br>
    <?php
    //  Write a program to perform sum or addition of two numbers in PHP programming.
    $a = 5;
    $b = 10;
    echo $a + $b;
    ?><br>
    <?php
    $text = "PHP";
    echo "Welcome to the $text World";
    ?>
</body>
</html>