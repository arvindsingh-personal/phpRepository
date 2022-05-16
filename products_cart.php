<?php include 'config_cart.php'; ?>
<?php
session_start();
ob_start();

// echo "<pre>";
// var_dump($_SESSION);
// echo "<pre>";




if (!isset($_SESSION['prod'])) {
	$_SESSION['prod'] = array();
}

function check_product_exists($product_id)
{
	// prod existts or not in cart	

	foreach ($_SESSION['prod'] as $key => $value) {
		if ($key == $product_id) {
			return true;
		}
	}

	return false;
}

function find_product_by_id($product_id)
{
	global $products;

	return  array_pop(array_filter($products, function ($item) use ($product_id) {
		return $item['id'] == $product_id;
	}));
}

// echo "@@@";
// var_dump(find_product_by_id(102));


// var_dump(check_product_exists(101));


?>
<html>

<head>
	<title>
		Products
	</title>
	<link href="style_cart.css" type="text/css" rel="stylesheet">
</head>

<body>

	<?php include 'header_cart.php'; ?>
	<div id="main">
		<div id="products">
			<?php
			foreach ($products as $key => $value) {

				// $id=$value["id"];
				echo '<div id="' . $value["id"] . '" class="product">';
				echo '<img src="' . $value["img"] . '">';
				echo '<h3 class="title"><a href="#">' . $value["product_number"] . '</a></h3>';
				echo '<span>Price:' . $value["price"] . '</span>';
				echo '<a class="add-to-cart" href="products_cart.php?id_number=' . $value["id"] . '">' . $value["Cart"] . '</a>';
				echo '</div>';
			}
			?>
		</div>
	</div>
	<?php
	if (isset($_GET['id_number'])) {
		//   echo $_GET["id_number"];

		$product_id = (int)$_GET['id_number'];

		// foreach ($products as $key => $value) {
		if (check_product_exists($product_id)) {
			echo "product exists";
			$_SESSION['prod'][$product_id]['quantity'] += 1;
		} else {
			$product = find_product_by_id($product_id);
			// echo "---";
			// var_dump($product);
			// echo "---";
			//  $_SESSION['prod'][$value['id']][$value['quantity']] = 0;
			$_SESSION['prod'][$product_id] = $product;
		}
		// }

		header("location: products_cart.php");
		exit();
	}



	?>
	<div id="cart">
		<table>
			<tr>
				<th>Product</th>
				<th>Price</th>
				<th>Quantity</th>
			</tr>
			<?php

			foreach ($_SESSION['prod'] as $value2) { ?>
				<tr>
					<td><?php echo $value2['product_number']; ?></td>
					<td><?php echo $value2['price']; ?></td>
					<td><?php echo $value2['quantity']; ?></td>
				</tr>

			<?php
			}
			?>
			<?php
			//   session_start();
			//   session_unset();
			//   session_destroy();
			?>
		</table>
		<center><div id="reset1" >
			<a href="reset.php">Reset</a>
		</div>
	    </center>
		
       

		<?php include 'footer_cart.php'; ?>

		<script>

			window.scrollTo(0, document.body.scrollHeight);

		</script>
</body>

</html>