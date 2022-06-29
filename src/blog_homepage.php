<?php
include './connection.php';
session_start();
if (isset($_SESSION['user_name'])) {
  $user_name = $_SESSION['user_name'];
  if ($user_name == "Admin") {
    $log = 2;
  } else {
    $log = 1;
  }
}

if (!isset($_SESSION['user_name'])) {
  $log = 0;
}

$sql = 'SELECT blog.blog_id, blog.user_id, blog.blog_heading, blog.blog_content, blog.blog_image,blog.user_name, blog.blog_date, users.status FROM blog INNER JOIN users ON blog.user_id = users.user_id ORDER BY blog_id DESC';
$result = mysqli_query($conn, $sql);
?>

<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>

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

</head>
<style>
  body {
    --bs-body-font-family: var(--bs-font-monospace);
    --bs-body-line-height: 1.4;
    --bs-body-bg: var(--bs-gray-100);
  }

  .table {
    --bs-table-color: var(--bs-gray-600);
    --bs-table-bg: var(--bs-gray-100);
    --bs-table-border-color: transparent;
  }
</style>

<body>
  <!-- header -->
  <nav class="navbar navbar-expand-lg fixed-top" style="background-color:black;">
    <div class="container-fluid p-5">
      <a class="navbar-brand text-light" href="#"><img class="img-fluid" src="img/Blog_pic.png" alt="" width="150px" height="30px"></a>
      <button class="navbar-toggler bg-light" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active m-2" aria-current="page" href="#">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active m-2 " href="#">PODCAST</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active m-2" aria-current="page" href="about.php">ABOUT</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active m-2" aria-current="page" href="contact.php">CONTACT</a>
          </li>

          <?php if ($log == 1 || $log == 2) { ?>
            <li class="nav-item">
              <a class=" nav-link active btn rounded-pill " href="logout.php" role="button">LOG OUT</a>
            </li>
          <?php }
          if ($log == 0) { ?>
            <li class="nav-item">
              <a class=" nav-link active btn rounded-pill " href="login.php" role="button">SIGN IN</a>
            </li>
          <?php } ?>

        </ul>

        <p class="name fs-4 fw-bolder">
          <?php if ($log == 1) { ?>
            <a href="my_posts.php" style="margin: auto; position: absolute;top:45px; right:120px; color:aqua; text-decoration:none;">
              <?php echo $user_name; ?>
            <?php } ?>

            <?php if ($log == 2) { ?>
              <a href="admin_panel.php" style="margin: auto; position: absolute;top:45px; right:120px; color:aqua; text-decoration:none;">
                <?php echo $user_name; ?>
              <?php } ?>
              </a>
        </p>
        <div class="row mt-5">

          <div class="col mx-auto">
            <div class=" fw-light"></div>
            <div class="input-group">
              <input class="form-control border-end-0 border-start-0 border-top-0 border-bottom-0" type="search" value="SEARCH..." id="example-search-input">
              <span class="input-group-append">
                <button class="btn border-0  border ms-n5" style="color:white;" type="button">
                  <i class="bi bi-search"></i>
                  
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>


  <!-- Carousel Start -->
  <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s" style="margin-top:13.1%;">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1">
          <img class="img-fluid" src="img/carousel-1.jpg" alt="Image">
        </button>
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="1" aria-label="Slide 2">
          <img class="img-fluid" src="img/carousel-2.jpg" alt="Image">
        </button>
        <button type="button" data-bs-target="#header-carousel" data-bs-slide-to="2" aria-label="Slide 3">
          <img class="img-fluid" src="img/carousel-3.jpg" alt="Image">
        </button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="w-100" src="img/carousel-1.jpg" alt="Image">
          <div class="carousel-caption">
            <div class="" style="max-width: 900px;">
              <h1 class="display-4 text-white  animated ">Publish your passions, your way
              </h1>
              <h4 class="text-white text-uppercase mb-4 animated zoomIn">Create a unique and beautiful blog easily.</h4>
              <a class=" btn btn-lg text-white border-0 p-3 create" type="button" style="background-color:#ff8000;">CREATE YOUR BLOG</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/carousel-2.jpg" alt="Image">
          <div class="carousel-caption">
            <div class="p-3" style="max-width: 900px;">
              <h1 class="display-4 text-white  animated ">Publish your passions, your way
              </h1>
              <h4 class="text-white text-uppercase mb-4 animated zoomIn">Create a unique and beautiful blog easily.</h4>
              <a class=" btn btn-lg text-white border-0 p-3 create" type="button" style="background-color:#ff8000;">CREATE YOUR BLOG</a>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <img class="w-100" src="img/carousel-3.jpg" alt="Image">
          <div class="carousel-caption">
            <div class="p-3" style="max-width: 900px;">
              <h1 class="display-4 text-white  animated ">Publish your passions, your way
              </h1>
              <h4 class="text-white text-uppercase mb-4 animated zoomIn">Create a unique and beautiful blog easily.</h4>
              <a class=" btn btn-lg text-white border-0 p-3 create" type="button" style="background-color:#ff8000;">CREATE YOUR BLOG</a>
            </div>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>

  <div class="container me-5" style="padding-top: 80px;">
    <div class="row">
      <?php
      if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          if ($row['status'] == "Approved") { ?>
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
                          <?php echo $row['user_name']; ?>
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
      }
      ?>
    </div>
  </div>

  <!-- footer -->
  <!-- Remove the container if you want to extend the Footer to full width. -->
  <div class="pt-5">

    <footer class="text-center text-lg-start" style="background-color: black;">
      <div class="container d-flex justify-content-center py-5 ">
        <a class="btn btn-lg btn-floating mx-2 text-light fs-2" href="https://www.facebook.com/" role="button" style="background-color: black;"><i class="bi bi-facebook"></i></a>
        <a class="btn btn-lg btn-floating mx-2 text-light fs-2" href="https://www.youtube.com/" role="button" style="background-color: black;"><i class="bi bi-youtube"></i></a>
        <a class="btn btn-lg btn-floating mx-2 text-light fs-2" href="https://www.instagram.com/" role="button" style="background-color: black;"><i class="bi bi-instagram"></i></a>
        <a class="btn btn-lg btn-floating mx-2 text-light fs-2" href="https://www.twitter.com/" role="button" style="background-color: black;"><i class="bi bi-twitter"></i></a>

      </div>

      <!-- Copyright -->
      <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2023 by The Artifact.
        <a class="text-white" href="#!" style="text-decoration: none;">Proudly created by Arvind Singh</a>
      </div>
      <!-- Copyright -->
    </footer>

  </div>

  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content" style="background-color:black">

        <div class="modal-body fw-bold text-white fs-3">
          SIGN IN FIRST TO CREATE A BLOG
        </div>
        <!-- <div class="modal-footer"> -->
        <button class="btn btn-lg" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal" style="background-color:#ff8000 ;">OK</button>
        <!-- </div> -->
      </div>
    </div>
  </div>

  <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">Open first modal</a>
  <!-- End of .container -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $(".create").click(function() {
        $.ajax({
          url: 'user_management_server.php',
          method: 'POST',
          data: {
            'data': <?php echo $log; ?>
          },
          success: function(result) {
            if (result != 1) {
              $('#exampleModalToggle').modal('show');
            } else
              location.href = "writeblog.php";
          }
        });
      });
    });
  </script>

</body>

</html>