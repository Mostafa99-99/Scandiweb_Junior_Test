




<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Product list</title>
    <meta content="" name="description">
    <meta content="" name="keywords">


    
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

   
    <link href="resources/bootstrap/aos/aos.css" rel="stylesheet">
    <link href="resources/bootstrap/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="resources/bootstrap/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="resources/bootstrap/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="resources/bootstrap/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="resources/bootstrap/remixicon/remixicon.css" rel="stylesheet">
    <link href="resources/bootstrap/swiper/swiper-bundle.min.css" rel="stylesheet">
   
    <link href="resources/css/style.css" rel="stylesheet">


</head>

<body>

<?php
    include('Config.php');
	include_once('Product_Class.php');
	
?>





<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <br>
                <br>
                <h1 data-aos="fade-up">Product List</h1>
                
            </div>
			<div  class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
			 <a  class="buttonn2" href="addproduct.php" style="margin-left: 300px" >ADD</a>
			 <button class="buttonn2" type="submit" form="product_form" name="delete-product-btn" >MASS DELETE</button>
			</div>          
        </div>
		
		<hr data-aos="fade-up">
    </div>

</section>

<main id="main">

   
    <section id="clients" class="clients clients">
        <div class="container">

        </div>
    </section>
   
   
   
  
  
    
<form action="Delete.php" id="product_form" method="POST">
    <section id="services" class="services">
        <div class="container">
            <div class="row">
			
			<?php 
			$product = new Product_Class;
            $result = $product->index();
                if($result)
                {
                 foreach($result as $row)
				 {
					$Final = array_filter($row);
					
		                ?>
						
			<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
			    <input type="checkbox" name="select-to-delete[]" value="<?=$row['SKU'];?>" class="larger"/>
				<label style="font-size: 14px; margin-right: 20px;">
				           
						<h5 style="font-size: 25px; font-family: Serif; text-align: center;">   
						   <?php 							 
							 //echo implode('<br>',$Final); 
						
							 foreach($Final as $key => $value)
                                          {
											 
											
											if($key == 'Size'){
											   echo $key.": ". $value." MB";
											   break;
											}
											if($key == 'Weight'){
											   echo $key.": ". $value."KG";
											   break;
											}
											if($key == 'Dimension'){
											   $Format = explode(' ',$value);
											   if(!empty($value)){
											   echo $key.": ".$Format[0]."x".$Format[1]."x".$Format[2];
											   }
											   break;
											    
											}
											
											else
											 if($key == 'Price'){
											   echo number_format((float)$value, 2, '.', '')." $";
											}
											 else
											  echo $value;
											
											
											?> <br> <?php
                                          }?><br>	

                      </h5>										  
                </label>
		     </div>
          </div>						
		    	<?php }
				
    	 } 
				?>
        	 
    </div>
 </div>							
</section>
	</form>	
    

  

    




  

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<script src="resources/bootstrap/purecounter/purecounter.js"></script>
<script src="resources/bootstrap/aos/aos.js"></script>
<script src="resources/bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="resources/bootstrap/glightbox/js/glightbox.min.js"></script>
<script src="resources/bootstrap/isotope-layout/isotope.pkgd.min.js"></script>
<script src="resources/bootstrap/swiper/swiper-bundle.min.js"></script>
<script src="resources/bootstrap/php-email-form/validate.js"></script>

<script src="resources/js/main.js"></script>

</body>

</html>
