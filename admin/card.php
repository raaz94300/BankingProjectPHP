<?php
require('../model/config.php');
$select_userRequest="SELECT * FROM tbl_card_request";
$data_sur=mysqli_query($conn,$select_userRequest);
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Admin :: Loan Request</title>

    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.js"></script>
      <script src="js/respond.min.js"></script>
      <script src="js/lte-ie7.js"></script>
    <![endif]-->
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
       <!--header Start-->
      <?php require('./comnpages/header.php'); ?>
	  <!--header end-->

      <!--sidebar start-->
	   <?php require('./comnpages/side.php'); ?>
      <!--sidebar end-->

      <!--main content start-->
      <section id="main-content">
          <section class="wrapper">
		  <div class="row">
				<div class="col-lg-12">
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Loan Department</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-bars"></i>Loan</li>
						<li><i class="fa fa-square-o"></i>New Loan Request</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-12">
                      <section class="panel">
                        <!-- 
						 <header class="panel-heading">
                              Advanced Table
                          </header>
						  -->
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
                              <tr>
                                 
									<th>Sno.</th>
									<th>User ID</th>
									<th>Card No</th>
									<th>Card Type</th>									
									<th>Amount Limit</th>									
									<th>Apply Date</th>									
									<th>remark</th>									
									<th>Status</th>
                              </tr>
							  <?php 		
								 
								          $suserid=$_SESSION['uid'];
								 
								 
											$select_payee="SELECT * FROM tbl_card_request ";
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
									<td>
										<a href="UserAccountByID_view.php?userid=<?php echo$payee_row['userid'];?>">
											<?php echo$payee_row['userid']; ?>
										</a>
									</td>
									<td><?php echo $payee_row['cardNo'];?></td>
									<td><?php echo $payee_row['crtype'];?></td>
									<td><?php echo $payee_row['crlimit'];?></td>
									<td><?php echo $payee_row['currentDate'];?> </td>
									<td><?php echo $payee_row['remark'];?>  </td>
									<td><?php echo $st;?></td>
																		
										
									<?php }	  ?>	
                                 

                                 
                              </tr>
							  
                             </tbody>
                        </table>
                      </section>
                  </div>
              </div>
              
              <!-- page end-->
          </section>
      </section>
      <!--main content end-->
      <!-----Credit Start ------>
		  <?php include("./comnpages/credit.php");?>
          <!-----Credit End ------>
  </section>
  <!-- container section end -->
    <!-- javascripts -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="js/scripts.js"></script>


  </body>
</html>
