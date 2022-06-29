<?php
include './connection.php';

session_start();
if (isset($_SESSION['user_name'])) {
  $log = 1;
  $user_name = $_SESSION['user_name'];
}
if (!isset($_SESSION['user_name'])) {
  $log = 0;
}
if (isset($_SESSION['user_id'])) {
  $user_id = $_SESSION['user_id'];
}

$sql = "SELECT * FROM blog WHERE blog.user_id = '$user_id' ORDER BY blog_id DESC"; 
$result = mysqli_query($conn, $sql);

?>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Charis+SIL:ital,wght@0,700;1,400;1,700&family=Monoton&family=Orbitron&family=Oswald:wght@300&family=PT+Serif&family=Six+Caps&family=Smooch&display=swap" rel="stylesheet">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Charis+SIL:ital,wght@0,700;1,400;1,700&family=Monoton&family=Orbitron&family=Oswald:wght@300&family=PT+Serif&family=Six+Caps&family=Smooch&family=Work+Sans&display=swap" rel="stylesheet">

  <!-- Favicon -->
  <link href="img/favicon.ico" rel="icon">

  <!-- Google Web Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

  <!-- Icon Font Stylesheet -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

  <!-- Libraries Stylesheet -->
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet"> 
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

  <!-- Customized Bootstrap Stylesheet -->
  <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->

  <!-- Template Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.2/font/bootstrap-icons.css" integrity="sha384-eoTu3+HydHRBIjnCVwsFyCpUDZHZSFKEJD0mc3ZqSBSb6YhZzRHeiomAUWCstIWo" crossorigin="anonymous">

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <!-- CSS only -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="blog_homepage.css">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
 
 <!-- header -->
 <nav class="navbar navbar-expand-lg " style="background-color:black;">
    <div class="container-fluid p-5">
      <a class="navbar-brand text-light" href="#"><img class="img-fluid" src="img/Blog_pic.png" alt="" width="150px" height="30px"></a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active " aria-current="page" href="blog_homepage.php">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active " href="#">PODCAST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="contact.php">CONTACT</a>
          </li>
          <li class="nav-item">
            <a class=" nav-link active btn rounded-pill " href="logout.php" role="button">SIGN OUT</a>
            <!-- <a class="nav-link active text-light" href="#"></a> -->
          </li>
        </ul>
        <p class="name fs-4 fw-bolder"  style="margin: auto; position: absolute;top:40px; right:120px; color:aqua; text-decoration:none;">
          My Posts
          <p>
        </p>
        <div class="row mt-5">
          <div class="col mx-auto">
            <div class=" fw-light"></div>
            <div class="input-group">
              <input class="form-control border-end-0 border-start-0 border-top-0 border-bottom-0" type="search" value="SEARCH..." id="example-search-input">
              <span class="input-group-append">
                <button class="btn border-0  border ms-n5" style="color:white;" type="button">
                  <i class="bi bi-search"></i>
                  <!-- <i class="fa-solid fa-circle-plus fa-beat"></i> -->
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>
  
  
  <div class="container me-5" style="padding-top: 80px;">
    <div class="row">
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
          <div class="col mb-5">
            <div class="card" style="width: 22rem;">

              <a href="single_page.php?blog_id=<?php echo $row['blog_id']; ?>&user_id=<?php echo $row['user_id']; ?>">
                <img src="uploads/<?php echo $row['blog_image']; ?>" class="card-img-top" alt="..." height="300px">
              </a>

              <div class="card-body div1">
                <a href="single_page.php?blog_id=<?php echo $row['blog_id']; ?>&user_id=<?php echo $row['user_id']; ?>">
                  <div class="row">
                    <div class="col-2">
                      <p class="display-5 py-2 pt-3 profile"><i class="bi bi-person-circle "></i></p>
                    </div>
                    <div class="col-10 pt-3">
                      <div>
                        Me
                      </div>
                      <div>
                      <?php echo $row['blog_date']; ?>
                      </div>
                    </div>
                  </div>
                  <h3 class="card-title heading pb-4"><?php echo $row['blog_heading']; ?></h3>
                </a>
                <a href="single_page.php?blog_id=<?php echo $row['blog_id']; ?>&user_id=<?php echo $row['user_id']; ?>" style="text-decoration: none; ">
                  <div class="content">
                    <p class="card-text lead"><?php echo $row['blog_content']; ?></p>
                  </div>
                </a>

              </div>

              <div class="card-body">
                <hr style="width:300px;">
                <span class="card-link">0 views</span>
                <span class="card-link">0 comments</span>
                <span class="card-link ">0 <i class="bi bi-heart text-danger fw-bold"></i></span>
              </div>
            </div>
          </div>

      <?php }
      }
      ?>


    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>