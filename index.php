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
    <?php
    //Write a program to show day of the week (for example: Monday) based on numbers using switch/case statements.
    function weekDay($num) {
        switch($num) {
            case 1:
                echo "Monday";
                break;
            case 2:
                echo "Tuesday";
                break;
            case 3:
                echo "Wednesday";
                 break;
            case 4:
                echo "Thursday";
                break;
            case 5:
                echo "Friday";
                 break;
            case 6:
                echo "Saturday";
                break;
            case 7:
                echo "Sundayday";
                break;
            default:
                echo "Invalid Number";
        }
       
    }
    weekDay(rand(1,10));
    ?><br><br>
    <?php
    //Write a program to calculate factorial of a number using for loop in php.
     function factorial($num) {
         $fact = 1;
         for($i = 1 ;$i <= $num ;$i++) {
           $fact *= $i; 
         }
         
         echo $fact;
     }
     factorial(rand(1,10));
    ?>
  
     <table width="400px"  border ="1px" style="border-collapse:collapse">
    <?php
      
      for($i = 0 ; $i < 8 ; $i++){
        echo "<tr>";
         for($j = 0 ; $j < 8 ; $j++) {
             if(($i + $j)%2 == 0) {
                 echo "<td height='30px' width='30px' bgcolor='white'></td>";
             }
             else {
                echo "<td height='30px' width='30px' bgcolor='black'></td>";
             }

         }
         echo "</tr>";
      }
    ?>

  </table>
</body>
</html>