<?php
require("./config.php");

$id=$_POST['id'];
$pass=$_POST['pass'];
$type=$_POST['ldtype'];

$select_logincheck="SELECT user_id, name, email, phone, userid, usertype FROM tbl_logindetails WHERE ((userid='$id' AND pass='$pass') AND usertype=$type AND 	status=1)";

$data_lc=mysqli_query($conn,$select_logincheck);
if(mysqli_num_rows($data_lc)>0)
{
	$row_lc=mysqli_fetch_array($data_lc);
		$_SESSION['uid'] = $row_lc['userid'];
		$_SESSION['emailid'] = $row_lc['email'];
		$_SESSION['name'] = $row_lc['name'];
		$_SESSION['bal']=0;
	if($row_lc['usertype']==2)
	{
		
		echo '<script type="text/javascript">                
					window.location = "../admin/index.php"; 
				  </script>';
	}
	else if($row_lc['usertype']==1)
	{
		$sql_bal_select="SELECT `balance` FROM `tbl_userbalance` WHERE `userid`='".$row_lc['userid']."'";
		$result_bal_select=mysqli_query($conn,$sql_bal_select);
		if(mysqli_num_rows($result_bal_select)>0)
		{
			$r=mysqli_fetch_array($result_bal_select);
			$_SESSION['bal']=$r[0];
		}	
			
			
		echo '<script type="text/javascript">                
					window.location = "../welcome.php?sucess=101"; 
				  </script>';
	}
}
else{
	if($type==2)
	{
		echo '<script type="text/javascript">                
					window.location = "../admin/login.php?error=105&msg=LoginFail"; 
				  </script>';
	}
	else if($type==1)
	{
		echo '<script type="text/javascript">                
					window.location = "../login.php?error=105&msg=LoginFail"; 
				  </script>';
	}
	
	
}
?>