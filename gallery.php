<?php 
  session_start();
  if(!isset($_SESSION['images'])) {
      $_SESSION['images'] = array();
  }
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
   
      if(isset($_POST['Submit'])) {
          $file = $_FILES['file'];
          
          $fileName = $_FILES['file']['name'];
          $fileTmpName = $_FILES['file']['tmp_name'];
          $fileSize = $_FILES['file']['size'];
          $fileError = $_FILES['file']['error'];
          $fileType = $_FILES['file']['type'];

          $fileExt = explode('.', $fileName);
          $fileActualExt = strtolower(end($fileExt));

          //$allowed = array('jpg', 'jpeg', 'png','pdf');
          $fileNameNew = uniqid('', true).".".$fileActualExt;
                     $fileDestination = 'uploads/'.basename($fileNameNew );
                     move_uploaded_file($fileTmpName, $fileDestination);
        //   $_SESSION['images']= $fileDestination;
        array_push($_SESSION['images'], $fileDestination);
      }

    ?>

    <form action="#" method="POST" enctype="multipart/form-data">
        <input type="file" name="file">
        <button type="submit" name="Submit">Upload</button>
    </form>
     <div>
         <?php
         foreach($_SESSION['images'] as $store) {?>
             <img alt="image" src="<?php echo $store ?>" width=130px; height=130px  >
        <?php } ?>
         
     </div>
   
</body>
</html>