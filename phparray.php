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
    // Write a PHP script that inserts a new item in an array in any position
      $num = array(1,2,3,4,5);
      $numlength = count($num);
      for($i=0;$i<$numlength;$i++) {
          echo $num[$i];
          echo "<br>";
      }

    //
    ?>
</body>
</html>