<?php
include './connection.php';

if (isset($_POST['blog_id'])) {
  $blog_id = $_POST['blog_id'];
  $sql = 'SELECT * FROM blog';
  $result = mysqli_query($conn, $sql);
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($blog_id == $row['blog_id']) {
        $text = '<div class="container" id='.$blog_id.' style="padding-bottom:70px;">
        <p class="display-1 container heading" contentEditable="true" style="word-spacing: 10px;">' . $row['blog_heading'] . '</p>
        <p class="pt-4"><img src="uploads/' . $row['blog_image'] . '" style="width:100%;height:100%; "></p>
        <p class="fs-3 pt-5 content" contentEditable="true" style="color:rgb(58, 57, 57);">' . $row['blog_content'] . '</
        p>
        <hr class="p-2">
        <span class="fs-3 edit_delete" style="float:right">
        <a class=" btn btn-lg text-white border-0" id="button" type="button" href="#" style="background-color:#ff8000;">Save</a>
         </span>
        </div>';
        echo $text;
        break;
      }
    }
  }
}

if(isset($_POST['heading']) && isset($_POST['content'])) {
  $blog_id = $_POST['blog_id1'];
  $user_id = $_POST['user_id'];
  $heading = $_POST['heading'];
  $content = $_POST['content'];
  $sql = "UPDATE `blog` SET `blog_heading`='$heading',`blog_content`= '$content' WHERE `blog_id` = '$blog_id'";
  if(mysqli_query($conn, $sql)) {
    echo 1;
  }
  else {
    echo 0;
  }

}

