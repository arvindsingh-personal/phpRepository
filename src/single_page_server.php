<?php
session_start();
include './connection.php';

if (isset($_POST['blog_id']) && isset($_POST['user_id']) && isset($_SESSION['user_id'])) {
  $blog_id = $_POST['blog_id'];
  $user_id = $_POST['user_id'];
  $sql = 'SELECT * FROM blog';
  $result = mysqli_query($conn, $sql);
  $text = "";
  $text2 = "";
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      $show = '';
      if ($_SESSION['user_id'] == $row['user_id'] || $_SESSION['user_name'] == "Admin") {
        $show = '<hr class="p-2">
        <span class="fs-3 edit_delete" style="float:right">
        <a href="edit_blog.php?blog_id=' . $blog_id . '&user_id=' . $user_id . '"><i class="bi bi-pen m-5"></i></a>
        <a href="#" id="del"><i class="bi bi-trash "></i></a>
        </span>';
      }
      if ($blog_id == $row['blog_id']) {
        // print_r($row['blog_id']);
        $text = '<div class="container blog" id=' . $blog_id . ' style="padding-bottom:70px; padding-top:50px">
        
          <span class="display-5 mt-5 profile1"><i class="bi bi-person-circle "></i> 
        </span>
          <span>
            ' . $row['user_name'] . ' 
          </span>
          <span> 
           ' . $row['blog_date'] . ' 
          </span> 
       
      
        <p class="display-1 container heading" style="word-spacing: 10px;">' . $row['blog_heading'] . '</p>
        <p class="pt-4"><img src="uploads/' . $row['blog_image'] . '" style="width:100%;height:100%; "></p>
        <p class="fs-3 pt-5 content" style="color:rgb(58, 57, 57);">' . $row['blog_content'] . '</
        p>' . $show . ' 
        </div>';
        break;
      }
    }
  }
  $sql1 = "SELECT * FROM `blog` WHERE NOT blog_id = $blog_id ORDER BY blog_id DESC LIMIT 3 ";
  $result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
      $text2 .= '<div class="col mb-5">
      <div class="card" style="width: 22rem;">
        <a href="single_page.php?blog_id=' . $row['blog_id'] . '&user_id=' . $user_id . '">
          <img src="uploads/' . $row['blog_image'] . '" class="card-img-top" alt="..."height="300px">
        </a>
        <div class="card-body div1">
          <a href="single_page.php?blog_id=' . $row['blog_id'] . '&user_id=' . $user_id . '" >
            <h3 class="card-title heading pb-4">' . $row['blog_heading'] . '</h3>
          </a>
        </div>
        <div class="card-body">
          <hr style="width:300px;">
          <span class="card-link">0 views</span>
          <span class="card-link">0 comments</span>
          <span class="card-link ">0 <i class="bi bi-heart text-danger fw-bold"></i></span>
        </div>
      </div>
    </div>';
    }
  }
  echo json_encode(array('text1' => $text, 'text2' => $text2));
}


if (isset($_POST['blog_id']) && isset($_POST['user_id']) && !isset($_SESSION['user_id'])) {
  $blog_id = $_POST['blog_id'];
  $user_id = $_POST['user_id'];
  $sql = 'SELECT * FROM blog';
  $result = mysqli_query($conn, $sql);
  $text = "";
  $text2 = "";
  if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      if ($blog_id == $row['blog_id']) {
        // print_r($row['blog_id']);
        $text = '<div class="container blog" id=' . $blog_id . ' style="padding-bottom:70px; padding-top:50px">
        
          <span class="display-5 mt-5 profile1"><i class="bi bi-person-circle "></i>
        </span>
          <span>
            ' . $row['user_name'] . ' 
          </span>
          <span> 
           ' . $row['blog_date'] . ' 
          </span> 
       
      
        <p class="display-1 container heading" style="word-spacing: 10px;">' . $row['blog_heading'] . '</p>
        <p class="pt-4"><img src="uploads/' . $row['blog_image'] . '" style="width:100%;height:100%; "></p>
        <p class="fs-3 pt-5 content" style="color:rgb(58, 57, 57);">' . $row['blog_content'].'</
        p>
        </div>';
        break;
      }
    }
  }
  $sql1 = "SELECT * FROM `blog` WHERE NOT blog_id = $blog_id ORDER BY blog_id DESC LIMIT 3 ";
  $result1 = mysqli_query($conn, $sql1);
  if (mysqli_num_rows($result1) > 0) {
    while ($row = mysqli_fetch_assoc($result1)) {
      $text2 .= '<div class="col mb-5">
      <div class="card" style="width: 22rem;">
        <a href="single_page.php?blog_id=' . $row['blog_id'] . '&user_id=' . $user_id . '">
          <img src="uploads/' . $row['blog_image'] . '" class="card-img-top" alt="..."height="300px">
        </a>
        <div class="card-body div1">
          <a href="single_page.php?blog_id=' . $row['blog_id'] . '&user_id=' . $user_id . '" >
            <h3 class="card-title heading pb-4">' . $row['blog_heading'] . '</h3>
          </a>
        </div>
        <div class="card-body">
          <hr style="width:300px;">
          <span class="card-link">0 views</span>
          <span class="card-link">0 comments</span>
          <span class="card-link ">0 <i class="bi bi-heart text-danger fw-bold"></i></span>
        </div>
      </div>
    </div>';
    }
  }
  echo json_encode(array('text1' => $text, 'text2' => $text2));
}

?>