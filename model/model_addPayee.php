<?php
if(isset($_POST['addPayee_btn']))
{
	require("./config.php");				
					$senderId=$_SESSION['uid'];
					$recieverName=$_POST['pname'];
					$recieverId=$_POST['puserid'];
					$remark=$_POST['remark'];
					


					
	$sql_selectPayee="Select * from tbl_account_request where userid='$recieverId' AND status=1";				
					
	$data=mysqli_query($conn,$sql_selectPayee);				
		 if(mysqli_num_rows($data)>0)
		 {					
					
					
					
	 $sql="INSERT INTO tbl_payee( payee_userid, sender_userid,  payee_name, payee_remark) VALUES ('$recieverId','$senderId','$recieverName','$remark')";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../payee.php?sucess=106"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "../AddPayee.php?error=116"; 
			  </script>';
	}

	}//if num rows
	
	else{		
		echo '<script type="text/javascript">                
                window.location = "../AddPayee.php?error=106"; 
			  </script>';
	}
}
else{
	
	
}

?>