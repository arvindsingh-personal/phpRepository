<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sing up</title>
  <link rel="stylesheet" href="signup.css">

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
    $(document).ready(function() {
      $('#register').click(function() {

        var name = $('#form3Example1cg').val();
        var email = $('#form3Example3cg').val();
        var password = $('#form3Example4cg').val();
        var cpassword = $('#form3Example4cdg').val();
        var atposition = email.indexOf("@");
        var dotposition = email.lastIndexOf(".");
        var flag = 1;

        if (name == null || name == "") {
          $('#nameErr').text("Name can't be blank");
          flag = 0;

        }
        if (password.length < 6 || password == "") {
          $('#passwordErr').text("Password must be at least 6 characters long");
          flag = 0;

        }
        if (cpassword == "") {
          $('#cpasswordErr').text("This filed is required");
          flag = 0;

        }
        if (password != cpassword) {
          $('#cpasswordErr').text("Password must be same");
          flag = 0;

        }
        if (email == "") {
          $('#emailErr').text("Email is required");
          flag = 0;

        }

        if (atposition < 1 || dotposition < atposition + 2 || dotposition + 2 >= email.length) {
          $('#emailErr').append("Email is not valid");
          flag = 0;
        }

        if (flag == 1) {
          $.ajax({
            url: 'signup_server.php',
            method: 'POST',
            data: {
              'name': name,
              'email': email,
              'password': password,
            },
            success: function(result) {
              if (result == 1) {
                header('location: ./login.php');
              } else if (result == 0) {
                $('#exampleModalToggle').modal('show');
                
              }
            }
          });
        }
        $('#Modal').click(function(){
          $('#form3Example1cg').val("");
          $('#form3Example3cg').val("");
          $('#form3Example4cg').val("");
          $('#form3Example4cdg').val("");
        });
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


  <section class="vh-100 bg-image" style="background-image: url('https://cdn2.vectorstock.com/i/1000x1000/42/56/dark-background-overlap-layer-with-star-light-vector-26454256.jpg');">
    <div class="mask d-flex align-items-center h-100 gradient-custom-3">
      <div class="container h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-9 col-lg-7 col-xl-6">
            <div class="card" style="border-radius: 15px;">
              <div class="card-body p-5">
                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                <form>

                  <div class="form-outline mb-4">
                    <input type="text" id="form3Example1cg" class="form-control form-control-lg" />
                    <span class="error" id="nameErr"></span>
                    <label class="form-label" for="form3Example1cg">Your Name</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3cg" class="form-control form-control-lg" />
                    <span class="error" id="emailErr"></span>
                    <label class="form-label" for="form3Example3cg">Your Email</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cg" class="form-control form-control-lg" />
                    <span class="error" id="passwordErr"></span>
                    <label class="form-label" for="form3Example4cg">Password</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="password" id="form3Example4cdg" class="form-control form-control-lg" />
                    <span class="error" id="cpasswordErr"></span>
                    <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
                    <label class="form-check-label" for="form2Example3g">
                      I agree all statements in <a href="#!" class="text-body"><u>Terms of service</u></a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center">
                    <button type="button" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body" id="register">Register</button>
                  </div>

                  <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login.php" class="fw-bold text-body"><u>Login here</u></a></p>

                </form>

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
        <center><h5 class="modal-title" id="exampleModalToggleLabel">Users already exists.</h5></center>
        </div>
        <div class="modal-footer">
          <center><button class="btn btn-primary" id="Modal" data-bs-dismiss="modal">OK</button></center>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>