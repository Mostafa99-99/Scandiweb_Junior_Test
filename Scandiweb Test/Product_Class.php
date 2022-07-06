<?php



class Product_Class
{
    
	public function __construct()
    {
        $db = new DatabaseConnection;
        $this->conn = $db->conn;
    }
	
	
	public function delete_checkbox($SKU)
    {
        $product_SKU = mysqli_real_escape_string($this->conn,$SKU);
        $sql = "DELETE FROM product WHERE SKU='$product_SKU'";
        $result = $this->conn->query($sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
	
	
	 public function create($inputData)
    {
        $sku=$_POST['sku'];
        $name=$_POST['name'];
        $price=$_POST['price'];
        $size=$_POST['size'];
		$weight=$_POST['weight'];
		$height=$_POST['height'];
		$width=$_POST['width'];
		$lenght=$_POST['lenght'];

        $sql="INSERT INTO product(SKU,Name,Price,Size,Weight,Dimension) VALUES ('$sku','$name','$price','$size', '$weight','$height $width $lenght')";  
        
		$result = mysqli_query($this->conn, $sql);
        if($result){
            return true;
        }else{
            return false;
        }
    }
	
	
	
	
	
    public function index()
    {
        $sql="SELECT * FROM product";
        $result=$this->conn->query($sql);
        if($result->num_rows > 0){
            return $result; 
			
        }else{
            return false;
        }
    }
	
	
	  
}
?>