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
							<form action="./model/model_loanRequest.php" method="post" role="form" class="contactForm">
							
                            <div class="form-group">
								<input type="text" name="suserid" class="form-control" value="<?php echo$userid; ?>" id="name"  readonly />
                            <div class="validation"></div>
                            </div>
							<div class="form-group">
								<select class="form-control" name="loneid">
									<option>Select Payee</option>
									<?php 		
								 
								          $suserid=$_SESSION['uid'];
								 
								 
											$select_payee="SELECT * FROM tbl_loan WHERE status = 1";
											
											$payeeData=mysqli_query($conn,$select_payee);				
											while($payee_row=mysqli_fetch_array($payeeData))
											{
										?>
									<option value="<?php echo $payee_row['loan_id'];?>"><?php echo $payee_row['loan_name'];?> <b>Intrest Rate : <?php echo $payee_row['loan_persentage'];?> % </b></option>
											<?php } ?>
								</select>
							
								
                            <div class="validation"></div>
                            </div>
							 <div class="form-group">
								<input type="number" name="amount" class="form-control" id="name" placeholder="Loan Ammount "  />
                            <div class="validation"></div>
                            </div>
							<div class="form-group">
								<input type="number" name="duration" class="form-control" id="name" placeholder="Duration in Year "  />
                            <div class="validation"></div>
                            </div>
							<div class="form-group">
								<input type="date" name="dob" class="form-control" id="name" placeholder="Date of Birth "  />
                            <div class="validation"></div>
                            </div>
							 <div class="form-group  ">
                                    <textarea class="form-control" name="remark" rows="2"  placeholder="Remark"></textarea>
                                    <div class="validation"></div>
                            </div>
							
							
							
                        <div class="text-center"><button type="submit" name="loanReq_btn" class="btn btn-primary btn-lg" required="required">Apply Loan</button></div>
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