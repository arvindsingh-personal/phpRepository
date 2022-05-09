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
     $count = 4;
     for($i = 0 ; $i <= 10 ; $i++) {
         global $count;
         $count++;
         echo $count . '<br>';
     }
    ?>
</body>
</html>