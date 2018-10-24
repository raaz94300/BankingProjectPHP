<?php
require('../model/config.php');
$select_userRequest="SELECT * FROM tbl_account_request WHERE status=0 AND ar_id=".$_REQUEST['ar_id'];
$data_sur=mysqli_query($conn,$select_userRequest);
if(mysqli_num_rows($data_sur)>0)
	{
		$row_sur=mysqli_fetch_array($data_sur);	
		//update Request Start
		$select_userRequestR="update tbl_account_request set status=2 WHERE ar_id=".$_REQUEST['ar_id'];
		$data_surr=mysqli_query($conn,$select_userRequestR);
		//update Request Code End
	
	
		echo '<script type="text/javascript">                
                window.location = "./UserAccountOpenRequest.php?sucess=103"; 
			  </script>';
	}
else{
		echo '<script type="text/javascript">                
                window.location = "./UserAccountOpenRequest.php?error=103"; 
			  </script>';
	}

	
	
						
	
?>