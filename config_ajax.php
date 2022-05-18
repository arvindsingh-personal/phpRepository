<?php
session_start();
  $_SESSION['products'] = array(
      "product-101"=>array("id" => 101, "img" => "football.png", "product_name" => "Product 101", "price" => "$150.00", "Cart" => "Add To Cart", "quantity" => 1),

      "product-102"=>array("id" => 102, "img" => "tennis.png", "product_name" => "Product 102", "price" => "$120.00", "Cart" => "Add To Cart", 'quantity' => 1),

      "product-103"=>array("id" => 103, "img" => "basketball.png", "product_name" => "Product 103", "price" => "$90.00", "Cart" => "Add To Cart", 'quantity' => 1),

      "product-104"=>array("id" => 104, "img" => "table-tennis.png", "product_name)" => "Product 104", "price" => "$110.00", "Cart" => "Add To Cart", 'quantity' => 1),

      "product-105"=>array("id" => 105, "img" => "soccer.png", "product_name" => "Product 105", "price" => "$80.00", "Cart" => "Add To Cart", 'quantity' => 1)
  );
?>