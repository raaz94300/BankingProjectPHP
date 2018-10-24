<?php
require('model/config.php');
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
	table{
		color:black;
	}
	.datatable tr td{
		vertical-align: middle ! important;
		
	}
	.datatable tr th{
		vertical-align: middle ! important;
		text-align:center
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
				<li>Loan Details</li>			
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
                               
                                <h4>Approved Loan Deatails </h4>
                                <!--Work Area Start -->
							<table class="table datatable">
								<tr>
									<th>Sno.</th>
									<th>Loan Type</th>		
									<th>Amount</th>									
									<th>Start Date</th>									
									<th>End Date</th>									
									<th>Duration</th>									
									<th>Payable Amount</th>									
									<th>EMI</th>									
																	
																	
								</tr>
								<?php 		
								 
								          $suserid=$_SESSION['uid'];
								 
								 
											$select_payee="SELECT lr.loan_Start_Date,lr.loan_End_Date, 	lr.loanid,lr.createdate, lr.amount,  lr.duration, lr.status, lr.userid,l.loan_name,l.loan_persentage FROM tbl_loan_request lr, tbl_loan l WHERE lr.userid ='$suserid' AND lr.loanid=l.loan_id AND lr.status=1";
											$payeeData=mysqli_query($conn,$select_payee);
											$counter=0;											
											while($payee_row=mysqli_fetch_array($payeeData))
											{
												$counter++;
												$p=$payee_row['amount'];								
												$t=$payee_row['duration'];								
												$r=$payee_row['loan_persentage'];								
												$pa=((($r*$t*$p)/100)+$p)
										?>
								
								
								<tr>
									<td><?php echo $counter;?></td>
									<td><?php echo $payee_row['loan_name'];?></td>									
									<td><i class="fa fa-inr"></i> <?php echo $payee_row['amount'];?></td>
									<td><?php echo $payee_row['loan_Start_Date'];?></td>
									<td><?php echo $payee_row['loan_End_Date'];?></td>
									<td><?php echo $payee_row['duration'];?> Years</td>
									<td><b> <i class="fa fa-inr"></i> <?php echo $pa;?></b></td>
									<td><b> <i class="fa fa-inr"></i> <?php echo round(($pa/$t)/12);?></b> (Monthly)<br>
									<b> <i class="fa fa-inr"></i> <?php echo round(($pa/$t)/4);?></b> (Quarterly)<br>
									<b> <i class="fa fa-inr"></i> <?php echo round(($pa/$t));?></b> (Yearly)</td>
									
										
										
									<?php }	  ?>									
								</tr>
							</table>
								
								
								
								
								
								
								
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