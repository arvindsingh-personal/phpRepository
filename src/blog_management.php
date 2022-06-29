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

$sql = 'SELECT * FROM blog ORDER BY blog_id DESC';
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
  <link href="css/bootstrap.min.css" rel="stylesheet">

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

  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

  <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"> -->
  <!-- CSS only -->

  <link rel="stylesheet" href="writeblog.css">
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  
  <!-- Scrollbar Custom CSS -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
  <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script> -->


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


  <div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar">
      <div class="sidebar-header p-5 text-white">
        <h3>
          <center>ADMIN</center> DASHBOARD
        </h3>
      </div>

      <ul class="list-unstyled components">
        <li class=" pb-4">
          <a href="blog_homepage.php" >
            <i class="fas fa-home"></i>
            Blog</a>
          
        </li>
        <li class="pb-4">
          <a href="user_management.php">
            <i class="bi bi-people"></i>
            User Management</a>
        </li>
        <li class="pb-4">
          <a href="blog_management.php">
            <i class="bi bi-mailbox2"></i>
            Blog Management</a>
        </li>
        <li class="pb-4">
          <a href="about.php">
            <i class="fas fa-briefcase"></i>
            About</a>
        </li>
        <li class="pb-4">
          <a href="contact.php">
            <i class="fas fa-briefcase"></i>
            Contact</a>
        </li>
       
        <li class="pb-4">
          <a href="#">
            <i class="fa fa-question"></i>
            FAQ</a>
        </li>

      </ul>
    </nav>



    <div style="width: 100%;">
      <span id="content" >
        <nav class="navbar navbar-expand-lg navbar-light ">

          <button type="button" id="sidebarCollapse" class="btn btn-lg" style="background-color: #ff8000; color:white">
            <i class="fas fa-align-left"></i>
            <span>Toggle Sidebar</span>
          </button>
        </nav>
      </span>

      <div class="container me-5 ms-5" style="padding-top: 80px;">
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
                    <a href="single_page.php?blog_id=<?php echo $row['blog_id']; ?>&user_id=<?php echo $row['user_id']; ?>" style="text-decoration: none;">
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
          } ?>

        </div>
      </div>
    </div>
  </div>
  </div>



  <!-- End of .container -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>


  <!-- JavaScript Bundle with Popper -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>




  <script>
    $(document).ready(function() {
      $('#form').on('submit', function(e) {
        e.preventDefault(e);
        $.ajax({
          url: 'upload.php',
          method: 'POST',
          contentType: false,
          processData: false,
          cache: false,
          data: new FormData(this),
          success: function(result) {
            $('#error').text(result);
          }
        });
      });

      $('#sidebarCollapse').on('click', function() {
        $('#sidebar').toggleClass('active');
      });

    });
  </script>

</body>
</html>