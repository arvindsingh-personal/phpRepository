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
    $num =  "";
    $numErr = "";

    if($_SERVER['REQUEST_METHOD'] == "POST") {
        if(empty($_POST["num"]))
           $numErr = "";
        else {
           $num = test_input($_POST["num"]);
           if (!preg_match("/^[0-9 ]+$/",$num)) {
               $numErr = "Enter positive number";
           }
        }
        $value = $_POST["rd"];
    }

        $result = convert($num, $value);

        
        function convert($num, $value) {
            $result = 0;
            if($value == "hours to mins") {
               $result = ($num * 60)." mins";
            //    $result += "mins";
            }

           if($value == "hours to seconds") {
               $result = ($num * 3600)." seconds";
            //    $result += "seconds";
           }
           return $result;

        }
       
    
         
    
         
     function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            return $data;
           }
     
    ?> 
      
<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
     
     <input type="number" name="num" value="<?php echo $num; ?>" style="margin-left: 30%; margin-top:10%;width:40%; height:90px; text-align:center; font-size:larger">
     <span class="error"><?php echo $numErr; ?></span><br>
     <br>
     <input type="radio" name="rd" value="hours to mins" style="margin-left: 32%; margin-bottom:2% ;font-size:50px">
     <span style="font-size:30px">hours to mins</span>
     <br>
     <input type="radio" name="rd" value="hours to seconds" style="margin-left: 32%; font-size:30px">
     <span style="font-size:30px">hours to seconds</span><br><br><br><br>
     <span class="print" style="margin-left: 40%; font-size:30px"> <?php echo $num." hours = " .$result?></span><br><br>
     <input type="submit" name="btn"value="Convert" style="margin-left: 30%;   width:40%; height:90px">
</form>
     
    
</body>
</html>