<?php
include './connection.php';


if (isset($_POST['name'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql1 = "SELECT * from users";
  $result = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($name = $row['user_name'] && $email = $row['email']) {
        echo 0;
        break;
      }
    }
  } else {
    $sql = "INSERT INTO users(`user_name`, `email`, `password`,`role`,`status`)
            VALUES ('$name', '$email', '$password','User','Unapproved')";
    if (mysqli_query($conn, $sql)) {
      echo 1;
    } else {
      echo 0;
    }
  }
}

?>

