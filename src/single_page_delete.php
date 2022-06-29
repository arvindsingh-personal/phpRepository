<?php
if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM blog WHERE `blog_id` = '$id'";
    if (mysqli_query($conn, $sql)) {
      echo 1;
    } else {
      echo 0;
    }
  }
?>