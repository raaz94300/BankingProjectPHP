<?php
require("./config.php");
if(isset($_POST['updateProfile_btn']))
{
					
					$userid=$_SESSION['uid'];
					
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
					
	 echo $sql="UPDATE tbl_account_request SET name='$name', fname='$fname', adhaar='$adhaar',pan='$pan', padd='$padd', pcity='$pcity', pdistrict='$pdistrict', pstate='$pstate', ppincode='$ppincode', cadd='$cadd', ccity='$ccity', cdistrict='$cdistrict', cpincode='$cstate', cstate='$cpincode', phone='$phone', email='$email' WHERE userid='$userid'";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../viewProfile.php?sucess=passwordChange"; 
			  </script>';
	}
	
}
else{
	
	
}

?>