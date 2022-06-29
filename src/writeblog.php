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
        <h3>BLOG PAGE</h3>
      </div>

      <ul class="list-unstyled components">
        <li class=" pb-4">
          <a href="blog_homepage.php" >
            <i class="fas fa-home"></i>
            Blog</a>
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

    

    <div class="text-danger" id="error"></div>
    <div style="width: 100%;">
    <span  id="content">
      <nav class="navbar navbar-expand-lg navbar-light ">

          <button type="button" id="sidebarCollapse" class="btn btn-lg" style="background-color: #ff8000; color:white">
            <i class="fas fa-align-left"></i>
            <span>Toggle Sidebar</span>
          </button>

      </nav>
    </span>
  <form class="ms-3" id="form" enctype="multipart/form-data" style="padding-top: 50px;" method="POST">
    <div class=" flex-row align-items-center mb-4">
      <div class="form-outline flex-fill mb-0">
        <input class="form-control fw-bold fs-5" id="title" name="title" type="text" style="color:black;">
        <hr style="color:red">
        <label class="form-label fs-5" for="">Title</label>
        <input type="file" name="file1" id="file">
      </div>
      <section class="mt-5" style="background-color:lightgray">
        <div class="container-fluid p-4 h-100">
          <textarea class="border-0 fs-4" name="content" id="content" cols="54" rows="15" style="width:100%;" placeholder="Start writing here..."></textarea>
        </div>
      </section>
      <center><button class="btn btn-lg" type="submit" id="submit" name="submit" style="background-color: #ff8000; color:white;">Publish</button></center>
    </div>
    <div class="">
  </form>
    </div>
  </div>
 
 
  
  <!-- JavaScript Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

  <!-- Bootstrap JS -->
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