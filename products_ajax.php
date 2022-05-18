<?php
 session_start();
 include './config_ajax.php';
?>
<html>
<head>
	<title>
		Products
	</title>
	<link href="style_ajax.css" type="text/css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
<?php include './config_ajax.php'?>
<?php include './header_ajax.php' ?>
	<div id="main">
		<div id="products">
        <?php
			foreach ($_SESSION['products'] as $key => $value) {

				// $id=$value["id"];
				echo '<div id="' . $value["id"] . '" class="product">';
				echo '<img src="' . $value["img"] . '">';
				echo '<h3 class="title"><a href="#">' . $value["product_number"] . '</a></h3>';
				echo '<span>Price:' . $value["price"] . '</span>';
				echo '<a class="add-to-cart" href="#">' . $value["Cart"] . '</a>';
				echo '</div>';
			}
			?>
		</div>
	</div>
    <div>
        <table id="table">
            <tr>
                <th>ID</th><th>Product</th><th>Price</th><th>Delete</th>
            </tr>
        </table>
    </div>
    <script>
        $(document).ready(function(){
          $('.add-to-cart').click(function(){
              var id = $(this).closest('div')[0].id;
              $.ajax({
                  url: 'server.php',
                  type: 'POST',
                  data: {ID: id},
                  success: function(result){
                      $('#table').append(result);
                  }
              });
            });
        });
    </script>
	<?php include './footer_cart.php' ?>
</body>
</html>