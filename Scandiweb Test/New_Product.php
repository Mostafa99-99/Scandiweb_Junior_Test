
 



<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Adding a product page</title>
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
   if(isset($_POST['save'])){
        $SKU=$_POST['SKU'];
        $Name=$_POST['Name'];
        $Price=$_POST['Price'];
        $Size=$_POST['Size'];
		$Weight=$_POST['Weight'];
		$Height=$_POST['Height'];
		$Width=$_POST['Width'];
		$Length=$_POST['Length'];
        $sql="INSERT INTO product(SKU,Name,Price,Size,Weight,Dimension) VALUES ('$SKU','$Name','$Price','$Size', '$Weight','$Height $Width $Length')";
        $result=mysqli_query($con,$sql);
		
		
		if(isset($result)){
        if($result){
             echo "<script>document.location.href='index.php'</script>";
		
         }
     }
	 else 
		 echo "error";
     
 }
  
?>




<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1 data-aos="fade-up">Product Add</h1>
                
            </div>
			
			<div  class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
			 <button class="buttonn1" type="submit" form="product_form" value="Save" name="save" style="margin-left: 320px" >Save</button>
			 <a href="index.php" class="buttonn1" >Cancel</a>
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

   
   
    
	
	
    <section id="contact" class="contact">
	
      <div class="container">  
        <div class="row">

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
		  
            <form id="product_form" method="POST" class="form-group">
			
              <div >
			    <h5> SKU: </h5>
                <input type="text" class="form-control" name="SKU"  placeholder="Your SKU" required>
              </div>
			  <br>
              <div >
			    <h5> Name: </h5> 
                <input type="text" class="form-control" name="Name"  placeholder="Your Name" required>
              </div>
			  <br>
              <div>
			    <h5> Price ($): </h5>
                <input type="text" class="form-control" name="Price" placeholder="Price" required>
              </div>
			  
			   <br>
			    <div >
                   <h5 for="cars">Type Switcher:</h5>

                   <select class="dropbtn" id="types">
				      <div class="dropdown-content">
                      <option value="Size">Size</option>
                      <option value="Weight">Weight</option>
                      <option value="Dimensions">Dimensions</option>
                    </select> 
                </div>
				
              <br>
			  
			  <div id="Size" class="data" >
			    <h5> Size (MB): </h5> 
                <input type="text" class="form-control" name="Size"  placeholder="Size">
              </div>
			  
			  
			  <div id="Weight" class="data" >
			    <h5> Weight (KG): </h5> 
                <input type="text" class="form-control" name="Weight" placeholder="Weight">
              </div>
			  
			  
			  <div id="Dimensions" class="data" >
			    <h5> Height (CM): </h5>
                <input type="text" class="form-control" name="Height" placeholder="Height">
				<br>
				<h5> Width (CM): </h5>
                <input type="text" class="form-control" name="Width"  placeholder="Width">
				<br>
                <h5> Length (CM): </h5>
                <input type="text" class="form-control" name="Length" placeholder="Length">
              </div>

			  <br>
			 
			 
			
			     
			
            </form>
          </div>

        </div>

      </div>
	  
    </section>
	
 

  

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


<script src="resources/bootstrap/purecounter/purecounter.js"></script>
<script src="resources/bootstrap/aos/aos.js"></script>
<script src="resources/bootstrap/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="resources/bootstrap/glightbox/js/glightbox.min.js"></script>
<script src="resources/bootstrap/isotope-layout/isotope.pkgd.min.js"></script>
<script src="resources/bootstrap/swiper/swiper-bundle.min.js"></script>
<script src="resources/bootstrap/php-email-form/validate.js"></script>


<script src="resources/js/main.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>


   <script> 
   $(document).ready(function(){
	$("#types").on('change', function(){
		$(".data").hide();
		$("#" + $(this).val()).fadeIn(700);
	}).change();
});
</script>










</body>

</html>
