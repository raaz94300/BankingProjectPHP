<?php
require('model/config.php');
$userid=$_SESSION['uid'];
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Loan Apply</title>

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
				<li><a href="welcome.php">Home</a></li>
				<li><a href="#">Loan</a></li>
				<li>Loan Apply</li>			
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
                               
                                <h4>Apply for Loan </h4>
                                <!--Work Area Start -->
							<form action="./model/model_card_apply.php" method="post" role="form" class="contactForm">
							
                            <div class="form-group">
								<input type="text" name="suserid" class="form-control" value="<?php echo$userid; ?>" id="name"  readonly />
                            <div class="validation"></div>
                            </div>
							<div class="form-group">
								<select class="form-control" name="cardtype">
									<option>Select Card Type</option>
									<option value="Credit Cart">Credit Cart</option>
									<option value="Debit Cart">Debit Cart</option>
											
								</select>
                            <div class="validation"></div>
                            </div>
							
							<div class="form-group">
								<select class="form-control" name="limit">
									<option>Select Card Limit </option>
									<option value="25000"> INR 25000 </i></option>
									<option value="50000"> INR 50000</i></option>
									<option value="100000"> INR 100000</i></option>
									<option value="150000"> INR 150000</i></option>
											
								</select>
                            <div class="validation"></div>
                            </div>
							
							
							
							 <div class="form-group">
								<input type="number" name="annualincome" class="form-control" id="name" placeholder="Annual Income "  />
                            <div class="validation"></div>
                            </div>
							
							 <div class="form-group  ">
                                    <textarea class="form-control" name="remark" rows="2"  placeholder="Remark"></textarea>
                                    <div class="validation"></div>
                            </div>
							
							
							
                        <div class="text-center"><button type="submit" name="loanReq_btn" class="btn btn-primary btn-lg" required="required">Apply Card</button></div>
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