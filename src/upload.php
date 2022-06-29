<?php
session_start();
include './connection.php';

if (!empty($_POST['title']) && !empty($_POST['content']) && $_FILES['file1']) {
  $fileName = $_FILES['file1']['name'];
  $fileTmpName = $_FILES['file1']['tmp_name'];
  $size = $_FILES['file1']['size'];
  $error  = $_FILES['file1']['error'];
  $title = $_POST['title'];
  $content  = $_POST['content'];
  // echo $img;

  if ($error == 0) {
    $image_ex = pathinfo($fileName, PATHINFO_EXTENSION);

    $image_ex_lc = strtolower($image_ex);

    $allowed_exs = array("jpg", "jpeg", "png");

    if (in_array($image_ex_lc, $allowed_exs)) {
      $image_upload_path = 'uploads/' . $fileName;
      move_uploaded_file($fileTmpName, $image_upload_path);
      $user_id = $_SESSION['user_id'];
      $user_name = $_SESSION['user_name'];
      $sql = "INSERT INTO `blog`(`user_id`,`blog_heading`,`blog_content`,`blog_image`,`user_name`,`blog_date`)
              VALUES('$user_id','$title','$content','$fileName','$user_name',now())";
      mysqli_query($conn, $sql);
      // header('location: ./views.php');
    } else {
      $em = "You can not upload files of this type"; 
      echo $em;
    }
  } else {
    $em = "Unkwon error occurred!";
    echo $em;
  }
}
?>
