<?php
include './connection.php';

if(isset($_POST["Email"])) {
    $email = $_POST["Email"];
    $password = $_POST["Password"];
    $flag = 0;

    $sql = "SELECT * from users";
    $result = mysqli_query($conn, $sql);

    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
           if($row["email"] == $email && $row["password"] == $password) {
            $flag = 1;
           }
        }
        if($flag === 0) {
            echo 0;
        }
        if($flag === 1){
            echo 1;
        }
    }
}

?>