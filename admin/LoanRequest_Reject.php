<?php
require('../model/config.php');
$select_userRequest="SELECT * FROM tbl_loan_request WHERE status=0 AND loan_req_id=".$_REQUEST['loan_req_id'];
$data_sur=mysqli_query($conn,$select_userRequest);
if(mysqli_num_rows($data_sur)>0)
	{
		$row_sur=mysqli_fetch_array($data_sur);	
		//update Request Start
		$select_userRequestR="update tbl_loan_request set status=2 WHERE loan_req_id=".$_REQUEST['loan_req_id'];
		$data_surr=mysqli_query($conn,$select_userRequestR);
		//update Request Code End
	
	
		echo '<script type="text/javascript">                
                window.location = "./LoanRequest.php?sucess=103"; 
			  </script>';
	}
else{
		echo '<script type="text/javascript">                
                window.location = "./LoanRequest.php?error=103"; 
			  </script>';
	}

	
	
						
	
?>