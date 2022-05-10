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

    //Write a PHP script to calculate and display average temperature, five lowest and highest temperatures.
    $temp =  "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 75, 76, 73, 68, 62, 73, 72, 65, 74, 62, 62, 65, 64, 68, 73, 75, 79, 73";
    $temp_array = explode(',', $temp);
    $temp_length = count($temp_array);
    $temp_count = 0;
    for($i = 0 ; $i < $temp_length ; $i++) {
        $temp_count += $temp_array[$i];
    }
    $temp_avg = $temp_count/$temp_length;
    echo $temp_avg."<br>";
    sort($temp_array);


    $newarray = array_unique($temp_array);
    sort($newarray);
    for($i = 0 ; $i < 7 ; $i++) {
        echo $newarray[$i];
    }
    
    echo "<br>";
    for($i = (count($newarray)-7) ; $i < count($newarray) ; $i++) {
        echo $newarray[$i];
    }
    echo "<br>";
 //Write a PHP program to filter out some elements with certain key-names.
 $array1 = array('c1' => 'Red', 'c2' => 'Green', 'c3' => 'White', 'c4' => 'Black');
 $array2 = array('c2','c4');
 $array3 = array_diff_key($array1, array_flip($array2));
 print_r($array3);

 function test($var) {
    if($var == 9) {
        return false;
    }
    else 
     return true;
}
 $array4 = array(3,5,6,9,0);
 print_r(array_filter($array4, "test"));
   

?>
</body>
</html>