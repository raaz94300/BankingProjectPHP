<?php
require('../model/config.php');
$select_userRequest="SELECT * FROM `tbl_card_request` WHERE `status`=0 AND crrid=".$_REQUEST['crrid'];
$data_sur=mysqli_query($conn,$select_userRequest);
if(mysqli_num_rows($data_sur)>0)
{
	$row_sur=mysqli_fetch_array($data_sur);	
		$cno=rand(100000041,499999012);
		//update Request Start
		echo $update_userLoanRequestA="update tbl_card_request set status=1, cardNo='$cno'   WHERE crrid=".$_REQUEST['crrid'];
		#die();
		$data_sura=mysqli_query($conn,$update_userLoanRequestA);
		//update Request Code End
		
	
		echo '<script type="text/javascript">                
                window.location = "./card.php?sucess=102"; 
			  </script>';
	
}
	
	
						
	
?>