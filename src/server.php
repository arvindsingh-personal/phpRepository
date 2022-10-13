<?php
session_start();

class AddToCart 
{
    public $id;
    public $name;
    public $price;
    public $quantity=1;

    function __construct($id,$name,$price,$quantity) 
      {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
      }
}

class cartArray{
 
    public function addToCart($object)
    {   // cheacks same products already exist in the cart or not
        if(array_key_exists($object->id,$_SESSION['productArray']))
        {
            $_SESSION['productArray'][$object->id]->quantity = $_SESSION['productArray'][$object->id]->quantity +1;
        }
        else
        {
            $_SESSION['productArray'][$object->id] =$object;
        }
    }
    // Display products from the cart
    public function display()
    {
        foreach($_SESSION['productArray']  as $key => $val)
        {
            echo '<tr style="text-align:center"><td>'.$val->id.'</td><td>'.$val->name.'</td><td>'.$val->price*$val->quantity.'</td><td>'.$val->quantity.'</td><td><button class="btn" id="deleteRow" style="width:100px;background: #3e9cbf;padding: 5px 8px 5px;border:1px solid #3e9cbf;
            cursor:pointer; 
            font-size:1.2em;
            display: block;
            max-width: 60%;
            margin: 20px auto 0px;
            text-decoration: none;
            text-shadow: 0 -1px 0px rgba(0, 0, 0, 0.3); 
            color: #fff;
            -webkit-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
            -moz-box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
            box-shadow: inset 0px 1px 0px #3e9cbf, 0px 5px 0px 0px #205c73, 0px 10px 5px #999;
            -moz-border-radius: 5px;
            -webkit-border-radius: 5px;
            border-radius: 5px;">Delete</button></td></tr>';
            
    }
    }
}

// display the products 
if(isset($_POST['ids'])){
    $id = $_POST['ids'];
    $product_nam = $_POST['names'];
    $price = $_POST['prices'];
    $quantity = $_POST['quant'];
    $product = new AddToCart($id,$product_nam,$price,$quantity);
    $cart = new cartArray();
    $cart->addToCart($product);
    $cart->display();
}

// products remove from cart
if(isset($_POST['delvalue']))
{
    $id = $_POST['delvalue'];
    unset($_SESSION['productArray'][$id]);
    $cart = new cartArray();
    $cart->display();
}




?>