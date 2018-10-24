<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Company-HTML Bootstrap theme</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/animate.css">
	<link href="css/prettyPhoto.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet" />	
	
    <style>
    .form-group .form-control
	{
		
		border-color: #382b2b;
	}
	</style>
  </head>
  <body>
	<?php include('./comnpages/header.php');?>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Register</li>			
			</div>		
		</div>	
	</div>
	
<br >
	
	<section id="contact-page">
        <div class="container">
            <div class="center">        
                <h2>Creat an Account </h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-12 ">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="./model/model_register.php" method="post" role="form" class="contactForm">
                            <div class="form-group col-md-6">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                            </div>
							 <div class="form-group col-md-6">
								<input type="text" name="fname" class="form-control" id="name" placeholder="Father Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                            </div>
							
							<div class="form-group col-md-6">
								<input type="text" name="adhaar" class="form-control" id="name" placeholder="Adhhar Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                            </div>
							 <div class="form-group col-md-6">
								<input type="text" name="pan" class="form-control" id="name" placeholder="PAN Number" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                            </div>
						
							<h4 class="col-md-12">Permanent Address</h4>
                            
                            <div class="form-group col-md-6">
                                    <textarea class="form-control" name="padd" rows="2" data-rule="required" data-msg="Please write something for us" placeholder="Address"></textarea>
                                    <div class="validation"></div>
                            </div>
							
							<div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="pcity" id="email" placeholder="city"  />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="pdistrict" id="phone" placeholder="District"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="ppincode"  placeholder="Pincode"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="pstate" id="phone" placeholder="State"  />
                                    <div class="validation"></div>
                            </div>
							
							
							<h4 class="col-md-12">Communication Address</h4>
							
                            
                            <div class="form-group col-md-6">
                                    <textarea class="form-control" name="cadd" rows="2" data-rule="required" data-msg="Please write something for us" placeholder="Address"></textarea>
                                    <div class="validation"></div>
                            </div>
							
							<div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="ccity" id="email" placeholder="city" data-rule="email" data-msg="Please enter a valid email" />
                                    <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="cdistrict" id="phone" placeholder="District"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="cpincode" id="phone" placeholder="Pincode"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="cstate" id="phone" placeholder="State"  />
                                    <div class="validation"></div>
                            </div>
								
							<div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Mobile"  />
                                    <div class="validation"></div>
                            </div>
							<div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" id="phone" placeholder="Your Email Address"  />
                                    <div class="validation"></div>
                            </div>
							
							
							
                        <div class="text-center"><button type="submit" name="reg_btn" class="btn btn-primary btn-lg" required="required">Submit Query</button></div>
                    </form>                       
                </div>
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-page-->
	
	<?php include('./comnpages/footer.php');?>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
    <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
	<script src="js/functions.js"></script>
    <script src="contactform/contactform.js"></script>
    
</body>
</html>