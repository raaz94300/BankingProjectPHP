<?php
require("./config.php");
if(isset($_POST['updatePayee_btn']))
{					$payee_id=$_REQUEST['payeeid'];
					$payee_userid=$_REQUEST['puserid'];
					$payee_name=$_REQUEST['pname'];
					$payee_remark=$_REQUEST['remark'];
					
					
					
	 echo $sql="UPDATE tbl_payee SET payee_userid='$payee_userid',payee_name='$payee_name',payee_remark='$payee_remark' WHERE payee_id=$payee_id";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../payee.php?sucess=recordUpdated"; 
			  </script>';
	}
	
}
else{
	
	
}

?>