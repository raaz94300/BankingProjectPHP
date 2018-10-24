<?php
require('../model/config.php');
$select_AccT="SELECT * FROM tbl_account_request WHERE status=1 AND userid='".$_REQUEST['userid']."'";
$data_sur=mysqli_query($conn,$select_AccT);
if(mysqli_num_rows($data_sur)>0)
	{
		// Status 3 was shows to Account Status Terminated
		$row_sur=mysqli_fetch_array($data_sur);	
		//update Request Start
		$update_AccT="update tbl_account_request set status=3 WHERE userid='".$_REQUEST['userid']."'";
		$data_surr=mysqli_query($conn,$update_AccT);
		//update Request Code End
		$update_AccTld="update tbl_logindetails set status=3 WHERE userid='".$_REQUEST['userid']."'";
		$data_surrld=mysqli_query($conn,$update_AccTld);
		
		
	
	
		echo '<script type="text/javascript">                
                window.location = "./TerminatedAccount.php?sucess=104"; 
			  </script>';
	}
else{
		echo '<script type="text/javascript">                
                window.location = "./UserAccountOpenRequest.php?error=104"; 
			  </script>';
	}

	
	
						
	
?>