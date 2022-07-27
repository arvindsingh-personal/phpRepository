<?php

include './connection.php';

if (isset($_POST['Name'])) {
  $name = $_POST["Name"];
  $email = $_POST["Email"];
  $password = $_POST["Password"];
 
  $sql = "INSERT INTO `users`(`fullname`, `email`, `password`)
     VALUES ('$name','$email','$password')";
  if (mysqli_query($conn, $sql)) {
    echo 1;
  } else {
    echo 0;
  }
}
?>