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
							<table class="table">
								<tr>
									<th>Payee Name</th>
									<th>Payee Account ID</th>									
									<th>Remark</th>									
									<th>Action</th>									
								</tr>
								<?php 		
								 
								          $suserid=$_SESSION['uid'];
								 
								 
											$select_payee="SELECT payee_id, payee_name,payee_userid,payee_remark FROM tbl_payee where status=1  AND sender_userid='$suserid'";
											$payeeData=mysqli_query($conn,$select_payee);				
											while($payee_row=mysqli_fetch_array($payeeData))
											{
										?>
								
								
								<tr>
									<td><?php echo $payee_row['payee_name'];?></td>
									<td><?php echo $payee_row['payee_userid'];?></td>
									<td><?php echo $payee_row['payee_remark'];?></td>
																		
									<td>
										<a href="./EditPayee.php?payeeid=<?php echo $payee_row['payee_id'];?>" class="btn btn-success">Edit</a>
										<a href="./model/model_delete_Payee.php?payeeid=<?php echo $payee_row['payee_id'];?>" class="btn btn-danger">Delete</a>
									</td>	
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