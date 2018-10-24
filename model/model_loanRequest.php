<?php
#model_fundTransfer.php

if(isset($_POST['loanReq_btn']))
{
	require("./config.php");				
					
					$senderId=$_POST['suserid'];		
					$loneid=$_POST['loneid'];
					$amount=$_POST['amount'];
					$duration=$_POST['duration'];
					$dob=$_POST['dob'];
					$remark=$_POST['remark'];
					
					
					
	
	 $sql="INSERT INTO tbl_loan_request( loanid, userid, amount, duration, dob, remark  ) VALUES ($loneid,'$senderId',$amount,$duration,'$dob','$remark')";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../welcome.php?sucess=110&msg=RequestSendSucess"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "../LoanApply.php.?error=110"; 
			  </script>';
	}
}





?>