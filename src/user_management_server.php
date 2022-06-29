<?php
include './connection.php';
if(isset($_POST['status'])) {
    $status = $_POST['status'];
    $id = $_POST['id'];
    // echo $status;
    // echo $id;
    $sql = "UPDATE `users` SET `status` = '".$status."' WHERE `user_id` = ".$id;
    if(mysqli_query($conn,$sql)){
        echo 1;
    }
    else {
        echo mysqli_error($conn);
    }
}
if(isset($_POST['id1'])) {
  $id = $_POST['id1'];
  $sql = "DELETE FROM `users` WHERE users.user_id = ".$id;
  mysqli_query($conn,$sql);
  $sql1 = "DELETE FROM `blog` WHERE blog.user_id = ".$id;
  mysqli_query($conn,$sql1);
}

if(isset($_POST['data'])) {
    $result = $_POST['data'];
    if($result == 1 || $result == 2) {
        echo 1;
    }
    else {
        echo 0;
    }
}
?>