<?php
	if(isset($_REQUEST['error']) && $_REQUEST['error']==106 )
	{
		echo"<script> 
			alert('User Not Found Please Check UserID and Try again');
		
		</script>";
		
	}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Add Payee</title>

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
	<?php include('./comnpages/header2.php');?>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="index.html">Home</a></li>
				<li>Welcome</li>			
			</div>		
		</div>	
	</div>
	
	<section id="blog" class="container">
        <div class="blog">
            <div class="row">
                 <div class="col-md-12">
                    <div class="blog-item">
                        <div class="row">
                            <div class="col-xs-12 col-sm-4">
                                <?php require("./comnpages/side1.php");?>
								<br>
                                <?php require("./comnpages/side2.php");?>
								<br>
                                <?php require("./comnpages/side3.php");?>
								<br>
                                <?php require("./comnpages/side4.php");?>
                            </div>
                               
                            <div class="col-xs-12 col-sm-8 blog-content">
                               
                                <h4>Add Payee </h4>
                                <!--Work Area Start -->
							<form action="./model/model_addPayee.php" method="post" role="form" class="contactForm">
							<input type="hidden"  name="suserid" value='1'>
                            <div class="form-group">
								<input type="text" name="pname" class="form-control" id="name" placeholder="Payee Name" />
                            <div class="validation"></div>
                            </div>
							 <div class="form-group">
								<input type="text" name="puserid" class="form-control" id="name" placeholder="Payee Account ID"  />
                            <div class="validation"></div>
                            </div>
							 <div class="form-group  ">
                                    <textarea class="form-control" name="remark" rows="2"  placeholder="Remark"></textarea>
                                    <div class="validation"></div>
                            </div>
							
							
							
                        <div class="text-center"><button type="submit" name="addPayee_btn" class="btn btn-primary btn-lg" required="required">Add Payee</button></div>
                    </form>	
								
								
								
								
								
								
								
                                <!--Work Area Start -->
                               
                            </div>
                        </div>    
                    </div><!--/.blog-item-->
                        
                  </div><!--/.col-md-8-->
					
                 </div><!--/.row-->
        </div>
    </section><!--/#blog-->
	<?php include('./comnpages/footer.php');?>
	
   <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="js/jquery-2.1.1.min.js"></script>
	<script src="js/jquery.js"></script>	
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>  
	<script src="js/wow.min.js"></script>
	<script src="js/functions.js"></script>
	
</body>
</html>