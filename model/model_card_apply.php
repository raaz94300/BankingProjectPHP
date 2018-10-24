<?php
#model_fundTransfer.php

if(isset($_POST['loanReq_btn']))
{
	require("./config.php");				
					
					$senderId=$_POST['suserid'];
					$cardtype=$_POST['cardtype'];		
					$limit=$_POST['limit'];
					$annualincome=$_POST['annualincome'];					
					$remark=$_POST['remark'];
					
					
					
	
	 $sql="INSERT INTO tbl_card_request(  userid, crtype, crlimit, anual_Income, remark  ) VALUES ('$senderId','$cardtype','$limit','$annualincome','$remark')";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../welcome.php?sucess=110&msg=RequestSendSucess"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "../cardApply.php.?error=110"; 
			  </script>';
	}
}





?>