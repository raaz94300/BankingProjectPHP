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
                               
                                <h4>Transaction History </h4>
							<!--Work Area Start -->
							<form action="./statement.php" method="post" role="form" class="contactForm">
							
                            <div class="form-group col-sm-4">
								<input type="date" name="sdate" class="form-control" value="JSA045701" id="name"   />
                            <div class="validation"></div>
                            </div>
							<div class="form-group col-sm-4">
								<input type="date" name="edate" class="form-control" value="JSA045701" id="name"   />
                            <div class="validation"></div>
                            </div>
							<div class="text-center col-sm-4"><button type="submit" name="txnsearch_btn" class="btn btn-primary btn-lg" required="required">Check Transactions</button></div>
							</form>	
							<table class="table">
								<tr>
									<th>Transaction ID</th>
									<th>Date </th>									
									<th>Remark</th>									
									<th>Debit (INR) (-)</th>									
									<th>Credit (INR) (+)</th>									
									<?php if(!isset($_REQUEST['txnsearch_btn']))
											{	?>
												<th>Balance (INR)</th>	
									<?php	}	?>											
								</tr>
								
								<?php 		
								 
											$suserid=$_SESSION['uid'];							 
											
											$select_txn="SELECT * FROM tbl_transaction WHERE txn_userid='$suserid' AND txn_status=1 order by txn_time";
											
											
											
											if(isset($_REQUEST['txnsearch_btn']))
											{
												$sdate=$_REQUEST['sdate'];
												$edate=$_REQUEST['edate'];
												
												echo $select_txn="SELECT * FROM tbl_transaction WHERE txn_userid='$suserid' AND txn_status=1 AND (txn_time>='$sdate' AND txn_time<='$edate' )order by txn_time";
											}
											
											$txnData=mysqli_query($conn,$select_txn);	
											$tamt=0;			
														
											while($txn_row=mysqli_fetch_array($txnData))
											{
											$damt=$txn_row['txn_DebitAmt'];			
											$camt=$txn_row['txn_CreditAmt'];
											$tamt=$tamt+$camt;
											$tamt=$tamt-$damt;
								?>
								
								<tr>
									<td><?php echo $txn_row['txn_id'];?> </td>
									<td><?php echo $txn_row['txn_time'];?> </td>									
									<td><?php echo $txn_row['txn_remark'];?> </td>									
									<td><?php echo $txn_row['txn_DebitAmt'];?></td>									
									<td><?php echo $txn_row['txn_CreditAmt'];?></td>	
										<?php if(!isset($_REQUEST['txnsearch_btn']))
											{	?>									
												<th> <?php echo $tamt;?></th>									
										<?php	}
										?>			
								</tr>
								
								<?php }	  ?>
								
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