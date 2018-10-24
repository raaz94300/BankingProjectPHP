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
                <h2>Login to your Account</h2>
                <p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
            </div> 
            <div class="row contact-wrap"> 
                <div class="status alert alert-success" style="display: none"></div>
                <div class="col-md-4  col-md-offset-4">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="./model/logincheck.php" method="post" role="form" class="contactForm">
					<input type="hidden"  name="ldtype" value='1'>
                            <div class="form-group">
								<input type="text" name="id" class="form-control" id="name" placeholder="Your UserID" />
                            <div class="validation"></div>
                            </div>
							 <div class="form-group">
								<input type="password" name="pass" class="form-control" id="name" placeholder="Your Password"  />
                            <div class="validation"></div>
                            </div>
							
							
							
							
                        <div class="text-center"><button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Login</button></div>
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