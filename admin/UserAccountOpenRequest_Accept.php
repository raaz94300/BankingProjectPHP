<?php
require('../model/config.php');
$select_userRequest="SELECT * FROM tbl_account_request WHERE status=0 AND ar_id=".$_REQUEST['ar_id'];
$data_sur=mysqli_query($conn,$select_userRequest);
if(mysqli_num_rows($data_sur)>0)
{
	$row_sur=mysqli_fetch_array($data_sur);	
	
		
	$name=$row_sur['name'];
	$email=$row_sur['email'];
	$phone=$row_sur['phone'];
	$userid='JSA0'.rand(245,685).'0'.$row_sur['ar_id'];
	$pass=$row_sur['phone'];
	$status=1;
	$usertype=1;
	
	$sql_insld="INSERT INTO tbl_logindetails( name, email, phone, userid, pass, status, usertype) VALUES('$name','$email','$phone','$userid','$pass',$status,$usertype)";
	$result=mysqli_query($conn,$sql_insld);
	
		//update Request Start
		$select_userRequestA="update tbl_account_request set status=1,userid='$userid' WHERE ar_id=".$_REQUEST['ar_id'];
		$data_sura=mysqli_query($conn,$select_userRequestA);
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