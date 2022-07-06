<?php
session_start();

include('Config.php');
include('Product_Class.php');

$db = new DatabaseConnection;


if(isset($_POST['save']))
{
    $inputData = [

        'sku' => mysqli_real_escape_string($db->conn,$_POST['sku']),
        'name' => mysqli_real_escape_string($db->conn,$_POST['name']),
        'price' => mysqli_real_escape_string($db->conn,$_POST['price']),
        'size' => mysqli_real_escape_string($db->conn,$_POST['size']),
		'weight' => mysqli_real_escape_string($db->conn,$_POST['weight']),
		'height' => mysqli_real_escape_string($db->conn,$_POST['height']),
		'width' => mysqli_real_escape_string($db->conn,$_POST['width']),
		'lenght' => mysqli_real_escape_string($db->conn,$_POST['lenght']),
    ];

    $product = new Product_Class;
    $result = $product->create($inputData);
    
    if($result)
    {
      
         echo "<script>{document.location.href='index.php'};</script>";
		
    }
    
  } 

?>