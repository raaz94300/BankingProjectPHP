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
	</style>
  </head>
  <body>
	<?php include('./comnpages/header2.php');?>
	<div id="breadcrumb">
		<div class="container">	
			<div class="breadcrumb">							
				<li><a href="welcome.php">Home</a></li>
				<li><a href="#">Loan</a></li>			
				<li>All Loan</li>		
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
                               
                                <h4>All Applyed Loan</h4>
                                <!--Work Area Start -->
							<table class="table">
								<tr>
									<th>Sno.</th>
									<th>Card No</th>
									<th>Card Type</th>									
									<th>Amount Limit</th>									
									<th>Apply Date</th>									
									<th>remark</th>									
									<th>Status</th>									
																
								</tr>
								<?php 		
								 
								          $suserid=$_SESSION['uid'];
								 
								 
											$select_payee="SELECT * FROM tbl_card_request WHERE  userid ='$suserid'";
											$payeeData=mysqli_query($conn,$select_payee);
											$counter=0;											
											while($payee_row=mysqli_fetch_array($payeeData))
											{
												$counter++;
												
												if($payee_row['status']==0){$st='Not Approved';}
												else if($payee_row['status']==1){$st=' Approved';}
												else if($payee_row['status']==2){$st=' Rejected';}
												else if($payee_row['status']==3){$st=' Close';}
												
												
										?>
								
								
								<tr>
									<td><?php echo $counter;?></td>
									<td><?php echo $payee_row['cardNo'];?></td>
									<td><?php echo $payee_row['crtype'];?></td>
									<td><?php echo $payee_row['crlimit'];?></td>
									<td><?php echo $payee_row['currentDate'];?> </td>
									<td><?php echo $payee_row['remark'];?>  </td>
									<td><?php echo $st;?></td>
																		
										
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