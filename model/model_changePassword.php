<?php
require("./config.php");
if(isset($_POST['changepass_btn']))
{
					
					$userid=$_SESSION['uid'];
					$oldpass=$_POST['oldpassword'];
					$newpass=$_POST['newpassword'];
					
	echo  $sql="UPDATE tbl_logindetails SET pass='$newpass' WHERE userid='$userid' AND pass='$oldpass'";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../login.php?sucess=passwordChange"; 
			  </script>';
	}
	
}


?>