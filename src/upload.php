<?php
 if(isset($_POST['submit'])) {
    $file = $_FILES['file'];~~
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));

    if($fileSize == 0) {
        echo "Please uplaod an image";
    }
    else if( $fileActualExt == 'png' ) {
        if($fileError === 0) {
            if( $fileSize <= 2000000 ) {
              $fileNewName = uniqid('',true).'.'.$fileActualExt;
              $fileDestination = 'uploads/'.$fileNewName;
              move_uploaded_file($fileTmpName, $fileDestination);
              header('location: index.php?result="uplaodsuccess"');
            } else {
                echo "Image size should not exceed 2mb";
            }
        } else {
            echo "There is some problem while uplaoding image";
        }
    } else {
        echo "Please uplaod image only of png type";
    }
 }

?>