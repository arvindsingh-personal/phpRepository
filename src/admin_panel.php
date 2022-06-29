<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>

  <!-- <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css"> -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
  <!-- CSS only -->

  <link rel="stylesheet" href="writeblog.css">
  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
  <!-- Our Custom CSS -->
  <link rel="stylesheet" href="style.css">
  <!-- Scrollbar Custom CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>



  <!-- Font Awesome JS -->
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
  <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>

  <!-- <script type="text/javascript">
    $(document).ready(function() {


    });
  </script> -->

  <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script> -->
  
 
</head>

<body>


<div class="wrapper">
    <!-- Sidebar -->
    <nav id="sidebar" >
      <div class="sidebar-header p-5 text-white">
        <h3><center>ADMIN</center>  DASHBOARD</h3>
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
    <span  id="content" >
      <nav class="navbar navbar-expand-lg navbar-light ">

          <button type="button" id="sidebarCollapse" class="btn btn-lg" style="background-color: #ff8000; color:white">
            <i class="fas fa-align-left"></i>
            <span>Toggle Sidebar</span>
          </button>
      </nav>
    </span>
    <div>
      <img class="img-fluid" src="https://ui-lib.com/blog/wp-content/uploads/2022/01/material-ui-admin-dashboard.png" alt="" style="margin-top: 90px;">
    </div>
    </div>
  </div>
 
 
  
  <!-- JavaScript Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
    integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
    crossorigin="anonymous"></script>
  







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