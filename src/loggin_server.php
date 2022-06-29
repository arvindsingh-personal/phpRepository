<?php
session_start();
include './connection.php';
if (!isset($_SESSION['user_id'])) {
  $_SESSION['user_id'] = array();
}
if (!isset($_SESSION['user_name'])) {
  $_SESSION['user_name'] = array();
}

if (isset($_POST['email']) && $_POST['password']) {
  $email = $_POST['email'];
  $password = $_POST['password'];
  $sql = 'SELECT * FROM users';
  $result = mysqli_query($conn, $sql);
  $flag = 0;

  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if (($email == $row['email']) && ($password == $row['password'])) {

        $_SESSION['user_id'] = $row['user_id'];
        if ($row['role'] == 'User') {
          $_SESSION['user_name'] = $row['user_name'];
          $flag = 1;
        }
        if ($row['role'] == 'Admin') {
          $flag = 2;
          $_SESSION['user_name'] = "Admin";
        }
        break;
      }
    }
    echo $flag;
  } else {
    echo $flag;
  }
}

