<?php
require('./model/config.php');
$select_userRequest="SELECT * FROM tbl_account_request WHERE userid='".$_SESSION['uid']."'";
$data_sur=mysqli_query($conn,$select_userRequest);
if(mysqli_num_rows($data_sur)>0)
{
	$row_sur=mysqli_fetch_array($data_sur);									
	
?>

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
                               
                                <h4>User Profile </h4>
                                <!--Work Area Start -->
								
								
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
								
							  
					
                              
							  <?php
									
								}#if
							  
							  ?>
                             </tbody>
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