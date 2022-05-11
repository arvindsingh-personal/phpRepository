<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity Bill</title>
</head>
<style>
    .error {color: #FF0000;}
</style>
<body>
    <?php
      $unit ="";
      $unitErr= "";

      if($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["unit"])) {
              $unitErr = "Units are required";
          }
          else {
            $unit  = test_input($_POST['unit']);
          }   
      }

      function test_input($data) {
          $data = trim($data);
          $data = stripslashes($data);
          return $data;
      }
       $result = calculate($unit);
       function  calculate($data) {
          
          if($data >0 && $data <=50)
            $result = $data * 3.5;
          elseif($data >50 && $data <=150) {
              $result = ($data*4) + (50*3.5) ;}
          elseif($data >150 && $data<=250) 
              $result = ( 50 * 3.5 )+( 100 * 4 )+( $data * 5.2 );
          elseif($data > 250 )
             $result = ( 50 * 3.5 )+( 100 * 4 )+( 100 * 5.2 ) + ($data * 6.5) ;

          return $result;
          }
        
      
    ?>
    <h2>Electricity Bill</h2>
    <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">

        Units:  <input type="text" name= "unit" value="<?php echo $unit; ?>" placeholder="Enter consumed units">
                <span class="error">*<?php echo $unitErr; ?><br><br>
                <input type="submit" value="Submit">
    </span>
    <?php
     echo "<h2>Bill:</h2>";
     echo $result;
     echo "<br>";
    ?>

        

    </form>
</body>
</html>