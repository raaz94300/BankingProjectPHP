<?php
require('../model/config.php');
$select_userRequest="SELECT * FROM `tbl_loan_request` WHERE `status`=0 AND loan_req_id=".$_REQUEST['loan_req_id'];
$data_sur=mysqli_query($conn,$select_userRequest);
if(mysqli_num_rows($data_sur)>0)
{
	$row_sur=mysqli_fetch_array($data_sur);	
		
		$loan_start_date=$_REQUEST['loan_start_date'];
		$loan_end_date=$_REQUEST['loan_end_date'];
		
	
		//update Request Start
		echo $update_userLoanRequestA="update tbl_loan_request set status=1,  loan_Start_Date='$loan_start_date', loan_End_Date='$loan_end_date' WHERE loan_req_id=".$_REQUEST['loan_req_id'];
		#die();
		$data_sura=mysqli_query($conn,$update_userLoanRequestA);
		//update Request Code End
		
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "./UserAccountOpenRequest.php?sucess=102"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "./UserAccountOpenRequest.php?error=102"; 
			  </script>';
	}
}
	
	
						
	
?>