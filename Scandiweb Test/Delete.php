
<?php
include('Config.php');
include('Product_Class.php');

$db = new DatabaseConnection;

if(isset($_POST['delete-product-btn'])){
		
		if(isset($_POST['select-to-delete']))
{
	 foreach($_POST['select-to-delete'] as $deleteid){
	 
    $SKU = mysqli_real_escape_string($db->conn, $deleteid);
    $product = new Product_Class;
    $result = $product->delete_checkbox($SKU);
	 }
	 
	 
    if($result)
    {
         header("Location: index.php");
          exit(0);
        // echo "<script>{document.location.href='index.php'};</script>";
    }
        else
    {
     
        header("Location: index.php");
        exit(0);
    }
    
  
 }
  else
    {
     
        header("Location: index.php");
        exit(0);
    }
 
}
?>