<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
</head>
<body>
    <?php
    $num1 = $num2 = "";
    $num1Err = $num2Err = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($_POST['num1']))
           $num1Err = "Enter number" ;
        else 
           $num1 = test_input($_POST["num1"]);

        if(empty($_POST['num2']))
           $num2Err = "Enter number";
        else 
           $num2 = test_input($_POST["num2"]);
        
        $oprator = $_POST["btn"];
         
    }
         
           function test_input($data) {
             $data = trim($data);
             $data = stripslashes($data);
             return $data;
             

           }
     $result = calculate($num1, $num2, $oprator);
       
     function calculate($num1,$num2, $oprator) {
        $result = 0;
         switch($oprator) {
            case '+':
               $result = $num1 + $num2;
               break;
            case '-':
               $result = $num1 - $num2;
               break;
            case 'X':
               $result = $num1 * $num2;
               break;
            case '/':
               $result = $num1 / $num2;             
               break;
         }
         return $result;
     }
     
      
    ?>
     <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
     Number 1 
     <input type="number" name="num1" value="<?php echo $num1; ?>" style="margin-left:20px; margin-top: 10px">
     <span class="error">* <?php echo $num1Err; ?></span><br>
     Number2
     <input type="number" name="num2" value="<?php echo $num2 ;?>" style="margin-left: 24px; margin-top: 10px">
     <span class="error">* <?php echo $num2Err; ?></span><br>
     Result
     <input type="text" value="<?php echo $result ?>" style="margin-left: 44px; margin-top: 10px; margin-bottom: 10px" ><br>
     <span style='margin-left: 8% ; margin-top: 10px'>
     <input type="submit" name="btn"value="+" >
     <input type="submit" name="btn"value="-" >
     <input type="submit" name="btn"value="X" >
     <input type="submit" name="btn"value="/" ></span>
    </form>

   
    
</body>
</html>