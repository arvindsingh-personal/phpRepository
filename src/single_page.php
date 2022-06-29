<?php
include './connection.php';
session_start();
if (isset($_SESSION['user_name'])) {
  $user_name = $_SESSION['user_name'];
  if($user_name == "Admin") {
    $log = 2;
  }
  else {
    $log = 1;
  } 
}

if (!isset($_SESSION['user_name'])) {
  $log = 0;
}
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
  <?php
  if (isset($_GET['blog_id']) && isset($_GET['user_id'])) { ?>
    <script>
      blog_id = <?php echo $_GET['blog_id']; ?>; 
      user_id = <?php echo $_GET['user_id']; ?>;
      $.ajax({
        url: 'single_page_server.php',
        method: 'POST',
        data: {
          'blog_id': blog_id,
          'user_id': user_id
        },
        success: function(result) 
        {
          var text = JSON.parse(result);
          text1 = text['text1'];
          text2 = text['text2'];
          $('.show').html(text1);
          $('.recent').html(text2);
        }
      });

      $(document).on('click','#del',function(e){
        e.preventDefault();
        id = $(this).closest('div').attr('id');
        $(this).closest('div').remove();
        $.ajax({
          url:'single_page_delete.php',
          method:"POST",
          data:{'id':id},
          success:function(result){
           $('.show').html("<center><h1>Blog deleted</h1></center>")
          }
        });
        
      });
    </script>
  <?php }
  ?>
  <style>
    .heading {
      font-family: 'Six Caps', sans-serif;
    }

    .content {
      font-family: 'Almarai', sans-serif;
      font-family: 'Charis SIL', serif;
      font-family: 'Monoton', cursive;
      font-family: 'Orbitron', sans-serif;
      font-family: 'Oswald', sans-serif;
      font-family: 'PT Serif', serif;

      /* font-family: 'Work Sans', sans-serif; */
    }
  </style>
</head>

<body>

  <!-- header -->
  <nav class="navbar navbar-expand-lg " style="background-color:black;">
    <div class="container-fluid p-5">
      <a class="navbar-brand text-light" href="#">Navbar</a>
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

        <p class="name fs-4 fw-bolder" >
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
                  <!-- <i class="fa-solid fa-circle-plus fa-beat"></i> -->
                </button>
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </nav>

  <div class="m-5 border shadow-lg show"></div>

  <div class="ms-5 fs-4 " style="color: dark;">Recent Posts</div> 

  <a href="blog_homepage.php" id="see_all">See All</a>

  <div class="ms-5" style="padding-top: 80px;"> 
    <div class="row recent">
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
  <!-- End of .container -->
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>