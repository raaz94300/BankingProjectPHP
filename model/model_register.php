<?php
if(isset($_POST['reg_btn']))
{
	require("./config.php");				
					$name=$_POST['name'];
					$fname=$_POST['fname'];
					$adhaar=$_POST['adhaar'];
					$pan=$_POST['pan'];
					$padd=$_POST['padd'];
					$pcity=$_POST['pcity'];
					$pstate=$_POST['pstate'];
					$pdistrict=$_POST['pdistrict'];
					$ppincode=$_POST['ppincode'];
					$cadd=$_POST['cadd'];
					$ccity=$_POST['ccity'];
					$cdistrict=$_POST['cdistrict'];
					$cstate=$_POST['cstate'];
					$cpincode=$_POST['cpincode'];
					$phone=$_POST['phone'];
					$email=$_POST['email'];
	
	echo $sql="INSERT INTO `tbl_account_request`( `name`, `fname`, `adhaar`, `pan`, `padd`, `pcity`, `pdistrict`, `pstate`, `ppincode`, `cadd`, `ccity`, `cdistrict`, `cpincode`, `cstate`, `phone`, `email`) VALUES ('$name','$fname','$adhaar','$pan','$padd','$pcity','$pdistrict','$pstate','$ppincode','$cadd','$ccity','$cdistrict','$cpincode','$cstate','$phone','$email')";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../login.php?sucess=101"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "../register.php?error=101"; 
			  </script>';
	}
}
else{
	
	
}

?>