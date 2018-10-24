<?php
require('../model/config.php');
$select_userRequest="SELECT * FROM tbl_account_request WHERE userid='".$_REQUEST['userid']."'";
$data_sur=mysqli_query($conn,$select_userRequest);
if(mysqli_num_rows($data_sur)>0)
{
	$row_sur=mysqli_fetch_array($data_sur);	
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

    <title>Blank | Creative - Bootstrap 3 Responsive Admin Template</title>

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
					<h3 class="page-header"><i class="fa fa fa-bars"></i> Accounts</h3>
					<ol class="breadcrumb">
						<li><i class="fa fa-home"></i><a href="index.php">Home</a></li>
						<li><i class="fa fa-bars"></i>Accounts</li>
						<li><i class="fa fa-bars"></i><a href="UserAccountOpenRequest.php">New Account Request</a></li>
						<li><i class="fa fa-square-o"></i>Account Details</li>
					</ol>
				</div>
			</div>
              <!-- page start-->
              <div class="row">
                  <div class="col-lg-10">
                      <section class="panel">
                        <!-- 
						 <header class="panel-heading">
                              Advanced Table
                          </header>
						  -->
                          
                          <table class="table table-striped table-advance table-hover">
                           <tbody>
								<tr>
									 <th width="30%"><i class="icon_profile"></i> Account ID</th>
									 <th><?php echo$row_sur['userid']; ?></th>
								</tr> 
								<tr>
									 <th width="30%"><i class="icon_profile"></i> Full Name</th>
									 <th><?php echo$row_sur['name']; ?></th>
								</tr> 
								  <tr> 
									<th><i class="icon_profile"></i> Father Name</th>
									 <td><?php echo$row_sur['fname']; ?></td>
								 </tr> 
								<tr>
									<th><i class="icon_profile"></i> Adhaar Number</th>
									 <td><?php echo$row_sur['adhaar']; ?></td>
								</tr> 
								<tr> 
									<th><i class="icon_profile"></i> PAN Number</th>
									 <td><?php echo$row_sur['pan']; ?></td>
								 </tr> 
								<tr>
									<th><i class="icon_pin_alt"></i> Permanent Address</th>
									 <td>
											<b>Address : </b><?php echo$row_sur['padd']; ?><br>
											<b>City : </b><?php echo$row_sur['pcity']; ?><br>
											<b>District : </b><?php echo$row_sur['pdistrict']; ?><br>
											<b>State : </b><?php echo$row_sur['pstate']; ?><br>
											<b>Pin Code : </b><?php echo$row_sur['ppincode']; ?><br>
									 
									 </td>
								 </tr> 
								<tr>
									<th><i class="icon_pin_alt"></i> Local Address</th>
									 <td>
											<b>Address : </b><?php echo$row_sur['cadd']; ?><br>
											<b>City : </b><?php echo$row_sur['ccity']; ?><br>
											<b>District : </b><?php echo$row_sur['cdistrict']; ?><br>
											<b>State : </b><?php echo$row_sur['cstate']; ?><br>
											<b>Pin Code : </b><?php echo$row_sur['cpincode']; ?><br>
									 
									 </td>
								 
                                 </tr> 
								<tr>
									<th><i class="icon_mail_alt"></i> Email</th>
									<th><?php echo$row_sur['email']; ?></th>									
                                 </tr> 
								<tr>
									<th><i class="icon_mobile"></i> Mobile</th> 
									<th><?php echo$row_sur['phone']; ?></th>									
								 </tr> 
								<tr>
									<th><i class="icon_calendar"></i> Date</th>
									 <td><?php echo$row_sur['creatdate']; ?></td>
								 </tr> 
								<tr>
									<th><i class="icon_cogs"></i>Status</th>
									 <th>
									 <?php
											if($row_sur['status']==0)
											{
												echo"Request Not Accepted"; 
											}
											if($row_sur['status']==1)
											{
												echo"Request Accepted"; 
											}
											if($row_sur['status']==2)
											{
												echo"Request Rejected"; 
											}
											if($row_sur['status']==3)
											{
												echo"Account Terminated"; 
											}
									 
									 ?></th>
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
<?php
}#if
else{
	echo '<script type="text/javascript">                
                window.location = "./ViewAccount.php?error=151"; 
			  </script>';
}
							  
							  ?>