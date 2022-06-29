
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
  <!-- MDB -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.css" rel="stylesheet" />

  <!-- MDB -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.2.0/mdb.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

  <script>
    $(document).ready(function () {
      $('#loggin').click(function () {

        var email = $('#form2Example17').val();
        var password = $('#form2Example27').val();
        var flag = 1;

        if (email == null || email == "") {
          $('#emailErr').append("Name can't be blank");
          flag = 0;

        }
        if (password == null || password == "") {
          $('#passwordErr').append("Password must be same");
          flag = 0;
        }

        if (flag == 1) {
          $.ajax({
            url: 'loggin_server.php',
            method: 'POST',
            data: {
              'email': email,
              'password': password
            },
            success: function (result) { 
              if(result == 0){
                $('#error').text("Wrong email and password combination!"); 
              }
              else if(result == 1) {
                $('#error').text(""); 
                location.href="blog_homepage.php";
              }
              else if(result == 2) {
                location.href="admin_panel.php";
              }
            }
          });
        }
      });
    });
  </script>
  <style>
    .error {
      color: red;
    }
  </style>
</head>

<body>
  <section class="vh-100" style="background-color: black;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem;">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block ">
                <img src="https://revenuearchitects.com/wp-content/uploads/2017/02/Blog_pic.png" alt="login form" class="img-fluid"  style="border-radius:1rem 0 0 1rem ; margin-top:170px;" />
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">

                  <form>

                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219;"></i>
                      <span class="h1 fw-bold mb-0">Blog</span>
                    </div>

                    <h5 class="fw-normal mb-3 pb-3" style="letter-spacing: 1px;">Sign into your account</h5>
                    <span class="text-danger" id="error" style="margin-bottom:10px;"></span>
                    <div class="form-outline mb-4 ">
                      <input type="email" id="form2Example17" class="form-control form-control-lg" />
                      <span class="error" id="emailErr"></span>
                      <label class="form-label" for="form2Example17">Email address</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="form2Example27" class="form-control form-control-lg" />
                      <span class="error" id="passwordErr"></span>
                      <label class="form-label" for="form2Example27">Password</label>
                    </div>

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block" id="loggin" type="button">Login</button>
                    </div>

                    <a class="small text-muted" href="#!">Forgot password?</a>
                    <p class="mb-5 pb-lg-2" style="color: #393f81;">Don't have an account? <a href="signup.php"
                        style="color: #393f81;">Register here</a></p>
                    <a href="#!" class="small text-muted">Terms of use.</a>
                    <a href="#!" class="small text-muted">Privacy policy</a>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>

</html>