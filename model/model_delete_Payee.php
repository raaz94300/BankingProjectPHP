<?php
	#model_delete_Payee.php
	require("./config.php");
	
					$payee_id=$_GET['payeeid'];
					
					
					
					
	 echo $sql="DELETE FROM tbl_payee WHERE payee_id=$payee_id";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../payee.php?sucess=recordDeleted"; 
			  </script>';
	}
	

?>