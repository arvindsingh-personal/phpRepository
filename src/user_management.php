<?php

use LDAP\Result;

include './connection.php';
$sql = 'SELECT * FROM users';
$result = mysqli_query($conn, $sql);

?>

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

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script>
    $(document).ready(function() {
      $(document).on('change', '#status', function() {
        status = $(this).val();
        var id = $(this).parent().parent().attr("id");
        $.ajax({
          url: 'user_management_server.php',
          method: "POST",
          data: {
            'status': status,
            'id': id
          },
          success: function(result) {
          }
        });
      });
      $(document).on('click', '.del', function() {
        var id = $(this).parent().parent().attr("id");
        $.ajax({
          url: 'user_management_server.php',
          method: "POST",
          data: {
            'id1': id
          },
          success: function(result) {
          }
        })
        $(this).parent().parent().remove();
      });
    });
  </script>

</head>

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
          <a href="blog_homepage.php">
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
      <div class="container p-5 user-manage" >
        <div class="row">
          <div class="col-1">User ID</div>
          <div class="col-2">User Name</div>
          <div class="col-3">Email</div>
          <div class="col-2">Password</div>
          <div class="col-1">Role</div>
          <div class="col-2">Status</div>
          <div class="col-1">Action</div>
        </div>
        <?php if (mysqli_num_rows($result) > 0) {
          while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="row" id="<?php echo $row['user_id']; ?>">
              <div class="col-1"><?php echo $row['user_id']; ?></div>
              <div class="col-2"><?php echo $row['user_name']; ?></div>
              <div class="col-3"><?php echo $row['email']; ?></div>
              <div class="col-2"><?php echo $row['password']; ?></div>
              <div class="col-1"><?php echo $row['role']; ?></div>
              <div class="col-2">
                <select class="form-control border-0 form-custom mb-4 rounded-pill" name="category" id="status">
                  <option value="" selected-disabled><?php echo $row['status']; ?></option>
                  <option value="Approved">Approved</option>
                  <option value="Unapproved">Unapproved</option>
                </select>
              </div>
              <div class="col-1">
                <a class="btn btn-danger mb-1 del" href="#" role="button">Delete</a>
              </div>
            </div>
        <?php }
        } ?>
      </div>
    </div>
  </div>



  <!-- JavaScript Bundle with Popper -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script> -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  <!-- jQuery CDN - Slim version (=without AJAX) -->
  <!-- <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script> -->
  <!-- Popper.JS -->
  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
    integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
    crossorigin="anonymous"></script> -->
  <!-- Bootstrap JS -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
  <!-- jQuery Custom Scroller CDN -->
  <!-- <script
    src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script> -->







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