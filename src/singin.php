<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Singup</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
    <script>
  function singin() {
    let email = document.getElementById('email').value;
    let password = document.getElementById('password').value;
    let flag = 1;

    if(email == '' || password == '') {
        alert("All fileds are required");
        flag = 0;
    }
    if(flag == 1) {
        $.ajax({
            url:'singin_server.php',
            method:'POST',
            data: { "Email":email, "Password":password},
            success: function(result) {
                if(result == 0) 
                  alert("You are not a registered user");
                if(result == 1)
                  alert("Successfully Logged in");
            }
        })
    }
    

  }
    </script>
    <center><h2>Sing In</h2></center>
    <table>
        <tr>
            <td>Email: </td><td><input type="text" id="email"></td>
        </tr>
        <tr>
            <td>Password: </td><td><input type="password" id="password"></td>
        </tr>
    </table>
    <table>
        <tr><td><button onclick="singin()">Sing in</button></td></tr>
    </table>
    <p>Not Registered yet ? <a href="signup.php" >Register</a></p>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.20.0/js/mdb.min.js" integrity="sha512-XFd1m0eHgU1F05yOmuzEklFHtiacLVbtdBufAyZwFR0zfcq7vc6iJuxerGPyVFOXlPGgM8Uhem9gwzMI8SJ5uw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>