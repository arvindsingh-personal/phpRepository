<?php

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <script>
    function signup() {

      let name = document.getElementById('fullname').value;
      let email = document.getElementById('email').value;
      let password = document.getElementById("password").value;
      let flag = 1;
      if (name == '' || email == '' || password == '') {
        alert("ALl firlds are required");
        flag = 0;
      }
      if (flag == 1) {


        $.ajax({
          url: 'signup_server.php',
          method: 'POST',
          data: {
            "Name": name,
            "Email": email,
            "Password": password
          },
          success: function(result) {
            alert("You are successfully registered");
           
          }
        })
      }
    }
  </script>

  <div>
    <center>
      <h1>Sing up</h1>
    </center>
    <table>
      <tr>
        <td>Full Name :</td>
        <td><input type="text" id='fullname'></td>
      </tr>
      <tr>
        <td>Email :</td>
        <td><input type="email" id="email"></td>
      </tr>
      <tr>
        <td>Password :</td>
        <td><input type="password" id='password'></td>
      </tr>
    </table>
    <table>
      <tr>
        <td></td>
        <td><button onclick="signup()">Sing up</button></td>
      </tr>
    </table>
    <p>Already have an account ? <a href="singin.php">Login</a></p>
  </div>


  <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js" integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>

</html>