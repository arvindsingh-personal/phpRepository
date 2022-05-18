<?php
include './config_ajax.php';
  if(isset($_POST['ID'])) {
      $id = $_POST['ID'];
      foreach($_SESSION['products'] as $key => $value) {
          if($value['id'] == $id) {
              $tr = "<tr><td>".$value['id']."</td><td>".$value['product_name']."</td><td>".$value['price']."</td><td><a href='#' class='Del'>delete</a></td></tr>";
              echo $tr;
          }
      }  
  }
  
?>
<script>
    $('.Del').click(function(){
       $(this).parents('tr').remove();
       
    });
</script>