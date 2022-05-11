<?php
$products = array(
    "Electronics" => array(
      "Television" => array(
        array(
        "id" => "PR001",
        "name" => "MAX-001",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR002",
        "name" => "BIG-301",
        "brand" => "Bravia"
        ),
        array(
        "id" => "PR003",
        "name" => "APL-02",
        "brand" => "Apple"
        )
      ),
      "Mobile" => array(
        array(
        "id" => "PR004",
        "name" => "GT-1980",
        "brand" => "Samsung"
        ),
        array(
        "id" => "PR005",
        "name" => "IG-5467",
        "brand" => "Motorola"
        ),
        array(
        "id" => "PR006",
        "name" => "IP-8930",
        "brand" => "Apple"
        )
      )
    ),
    "Jewelry" => array(
      "Earrings" => array(
        array(
        "id" => "PR007",
        "name" => "ER-001",
        "brand" => "Chopard"
        ),
        array(
        "id" => "PR008",
        "name" => "ER-002",
        "brand" => "Mikimoto"
        ),
        array(
        "id" => "PR009",
        "name" => "ER-003",
        "brand" => "Bvlgari"
        )
      ),
      "Necklaces" => array(
        array(
        "id" => "PR010",
        "name" => "NK-001",
        "brand" => "Piaget"
        ),
        array(
        "id" => "PR011",
        "name" => "NK-002",
        "brand" => "Graff"
        ),
        array(
        "id" => "PR012",
        "name" => "NK-003",
        "brand" => "Tiffany"
        )
      )
    )
        );
    
// echo count($products);
// echo count($products['Jewelry']);
  echo "<table width='400px'><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
  foreach($products as $key1 => $value1) { 

      foreach($value1 as $key2 => $value2) {

          foreach($value2 as $key3 => $value3) {
             echo "<tr>";
             echo "<td>" .$key1."</td>";
             echo "<td>" .$key2. "</td>";
             foreach($value3 as $value4) {

                 echo "<td>" .$value4. "</td>";

                 }
                 echo "</tr>";
             }
             
             }
            }         
            echo "</table><br>";
  
    echo "<table width='400px'><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
    foreach($products as $key1 => $value1) {

        foreach($value1 as $key2 => $value2) {
            if($key2 == 'Mobile'){
            foreach($value2 as $key3 => $value3) {

                echo "<tr><td>" .$key1. "</td>" ;
                echo "<td>" .$key2. "</td>" ;
                
                foreach($value3 as $value4) {

                    echo "<td>" .$value4. "</td>";
                }
                echo "</tr>";
            }
          }
        }
    }
    echo "</table><br>";
 
    echo "</table>";
    foreach($products as $key1 => $value1) {

        foreach($value1 as $key2 => $value2) {
            
            foreach($value2 as $key3 ) {
                if($key3["brand"]=='Samsung'){
                    echo "Product ID:" .$key3["id"]. "<br>";
                    echo "Product Name:" .$key3["name"]. "<br>"; 
                    echo "Subcategory:" .$key2. "<br>";
                    echo "Category :" .$key1. "<br>";
                }
            }
            echo "<br>";
        }
    }

echo "</table>";


echo "<br>";


foreach($products as $key1 => $value1) {
    foreach($value1 as $key2 => $value2) {
        foreach($value2 as $key3 => $value3) {
            if($value3["id"] == 'PR003') {
                unset($products[$key1][$key2][$key3]);
            }
        }
    }
}

echo "<table width='400px'><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
foreach($products as $key1 => $value1) { 

    foreach($value1 as $key2 => $value2) {

        foreach($value2 as $key3 => $value3) {
           echo "<tr>";
           echo "<td>" .$key1."</td>";
           echo "<td>" .$key2. "</td>";
           foreach($value3 as $value4) {

               echo "<td>" .$value4. "</td>";

               }
               echo "</tr>";
           }
           
           }
          }         
          echo "</table><br>";
          
echo "<br>";

echo "<table width='400px'><tr><th>Category</th><th>Subcategory</th><th>ID</th><th>Name</th><th>Brand</th></tr>";
foreach($products as $key1 => $value1) {

    foreach($value1 as $key2 => $value2) {
        
        foreach($value2 as $key3 => $value3 ) {
            if($value3["id"] == 'PR002'){
                echo "<tr>";
                echo "<td>" .$key1." </td>";
                echo "<td>" .$key2. "</td>";
                $value3["name"] = "BIG-555";
                foreach($value3 as $value4)  {
                    echo "<td>" .$value4. "</td>";
                }
               
            }
            else {
                echo "<tr>";
                echo "<td>".$key1."</td>";
                echo "<td>".$key2. "</td>";
                foreach($value3 as $value4) {
                    echo "<td>".$value4."</td>";
                }
            }
            echo "</tr>";
        }
       
    }
}
echo "</table>";

?>