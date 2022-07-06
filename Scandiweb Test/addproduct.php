
 



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

?>




<section id="hero" class="d-flex align-items-center">

    <div class="container">
        <div class="row">
            <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <br>
                <br>
                <h1 data-aos="fade-up">Product Add</h1>
                
            </div>
			
			<div  class="col-lg-6 order-1 order-lg-2" data-aos="fade-left">
			 <button class="buttonn1" type="submit" form="product_form" value="Save" name="save" style="margin-left: 320px">Save</button>
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

   
   
    
	
	<p id="warning" style="margin-left: 580px; color: red"></p>
	
    <section id="contact" class="contact">
      <div class="container">  
        <div class="row">

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="300">
		   
		 <form id="product_form" action="Insert_Product.php" onsubmit="return validate();" name="product_form"  method="POST" class="form-group">
			   
              <div >
			    <h5> SKU: </h5>
                <input type="text" class="form-control" id="sku" name="sku"  placeholder="Your SKU">
              </div>
			  <br>
              <div >
			    <h5> Name: </h5> 
                <input type="text" class="form-control" id="name" name="name"  placeholder="Your Name">
			  </div> 
			  <br>
              <div>
			    <h5> Price ($): </h5>
				<input type="text" class="form-control" id="price" name="price" placeholder="Price">
              </div>
			  
			   <br>
			    <div >
                   <h5>Type Switcher:</h5>

                   <select class="dropbtn" id="productType">
				      <div class="dropdown-content">
                      <option value="DVD">DVD-disc</option>
                      <option value="Book">Book</option>
                      <option value="Furniture">Furniture</option>
                    </select> 
                </div>
				
              <br>
			  
			  <div id="DVD" class="data" >
			    <h5> Size (MB): </h5> 
                <input type="text" class="form-control" id="size" name="size"  placeholder="Size">
				<br>
				<p style="color: red">Please, provide disc space in MB</p>
              </div>
			  
			  
			  <div id="Book" class="data" >
			    <h5> Weight (KG): </h5> 
                <input type="text" class="form-control" id="weight" name="weight" placeholder="Weight">
                <br>
				<p style="color: red">Please, provide Weight in Kg</p>
			  </div>
			  
			  
			  <div id="Furniture" class="data" >
			    <h5> Height (CM): </h5>
                <input type="text" class="form-control" id="height" name="height" placeholder="Height">
				<br>
				<h5> Width (CM): </h5>
                <input type="text" class="form-control" id="width" name="width"  placeholder="Width">
				<br>
                <h5> Length (CM): </h5>
                <input type="text" class="form-control" id="lenght" name="lenght" placeholder="Lenght">
                <br>
				<p style="color: red">Please, provide height, width and length in CM</p>
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


<script type="text/javascript">
    
   $(document).ready(function(){
	$("#productType").on('change', function(){
		$(".data").hide();
		$("#" + $(this).val()).fadeIn(700);
	}).change();
});




    function validate()
    {
    var sku = document.product_form.sku.value;
    var name = document.product_form.name.value;
	var price = document.product_form.price.value;
	var size = document.product_form.size.value;
	var weight = document.product_form.weight.value;
	var height = document.product_form.height.value;
	var width = document.product_form.width.value;
	var lenght = document.product_form.lenght.value;
	var productType = document.getElementById('productType').value;
	
	
	
 
    if (sku==null || sku=="")
    {
	  document.getElementById("warning").innerHTML = "Please, submit required data";
      return false;
    }
    if (name==null || name=="")
    {
	  document.getElementById("warning").innerHTML = "Please, submit required data";
      return false;
    }
    if (price==null || price=="")
    {
       document.getElementById("warning").innerHTML = "Please, submit required data";
      return false;
    }
	
	
	if(productType == "DVD"){
		if(size==null || size==""){
		        document.getElementById("warning").innerHTML = "Please, submit required data";
				return false;
		}
	}
	
	if(productType == "Book"){
		if(weight==null || weight==""){
		        document.getElementById("warning").innerHTML = "Please, submit required data";
				return false;
		}
	}
	
	if(productType == "Furniture"){
	     if(height==null || height=="" || width==null || width=="" ||  lenght==null || lenght==""){
                document.getElementById("warning").innerHTML = "Please, submit required data";			
			    return false;
		}
	 }
	 
	 
	 if (isNaN(price)){  
        document.getElementById("warning").innerHTML="Please, Enter Numeric value only in Price Field";  
     return false;  
    }
	
	if (isNaN(size)){  
        document.getElementById("warning").innerHTML="Please, Enter Numeric value only in Size Field";  
     return false;  
    }
	
	if (isNaN(weight)){  
        document.getElementById("warning").innerHTML="Please, Enter Numeric value only in Weight Field";  
     return false;  
    }
	
	if (isNaN(height)){  
        document.getElementById("warning").innerHTML="Please, Enter Numeric value only in Height Field";  
     return false;  
    }
	
	if (isNaN(width)){  
        document.getElementById("warning").innerHTML="Please, Enter Numeric value only in Width Field";  
     return false;  
    }
	
	if (isNaN(lenght)){  
        document.getElementById("warning").innerHTML="Please, Enter Numeric value only in Length Field";  
     return false;  
    }
	  
	  
	  
	}

</script>










</body>

</html>
