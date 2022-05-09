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
    <br>
    <?php
      //     Write a program to print 2 php variables using single echo statement.
     $message_1 = "Hello";
     $message_2 = "Good Evening";
     echo $message_1." ".$message_2;
    ?><br><br>
    <?php
      //Write a program to check student grade based on the marks using if-else statement.
      function studentGrade($English, $Social, $Maths, $Physics, $Chemistry) {
           $Sum = ($English + $Social + $Maths + $Physics + $Chemistry );
           $grade = $Sum / 5;
           if($grade >= 60){ 
             echo "First Division";
           } elseif($grade >= 45 && $grade <=59 ) {
             echo "Second Division"; 
            } elseif($grade >= 33 && $grade <=44 ) {
             echo "Third Division";
             } else {
             echo "Fail"; 
            }
      }
      studentGrade(90,0,90,90,100);
    ?>

</body>
</html>