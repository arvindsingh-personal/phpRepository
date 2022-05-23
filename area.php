<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CALCULATE AREA</title>
</head>
<body>
    <?php
    $num1 = $num2 = "";
    $num1Err = $num2Err = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($_POST["num1"]))
           $num1Err = "This is fireld is required";
        else {
           $num1 = test_input($_POST["num1"]);
           if (!preg_match("/^[0-9 ]+$/",$num1)) {
               $num1Err = "Enter positive number";
           }
        }
        if(empty($_POST["num2"]))
           $num2Err = "This is fireld is required";
        else {
           $num2 = test_input($_POST["num2"]);
           if (!preg_match("/^[0-9 ]+$/",$num2)) {
               $num2Err = "Enter positive number";
           }
        }
       
    }  
         
    
         
     function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
           }
     $result = calculate($num1, $num2);
       
     function calculate($num1,$num2) {
        $result = $num1 * $num2;
        return $result;
     }
    ?> 
      
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
     Length Of Rectangle
     <input type="number" name="num1" value="<?php echo $num1; ?>" style="margin-left:20px; margin-top: 10px">
     <span class="error">* <?php echo $num1Err; ?></span><br>
     <br>
     Breadth Of Rectangle
     <input type="number" name="num2" value="<?php echo $num2 ;?>" style="margin-left: 14px; margin-top: 10px">
     <span class="error">* <?php echo $num1Err; ?></span><br>
     <br>
     Area
     <input type="text" value="<?php echo $result ?>" style="margin-left: 11%; margin-top: 10px; margin-bottom: 10px" ><br>
     
     <input type="submit" name="btn"value="Calcualte" style="margin-left: 14%">
</form>
     
    
</body>
</html>