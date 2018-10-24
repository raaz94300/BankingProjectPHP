<?php

	require("./config.php");
				if(isset($_SESSION['uid']))
				{
					$name=$_SESSION['name'];
				}else
				{
					$name=$_POST['name'];
				}					
				$email=$_POST['email'];
					$phone=$_POST['phone'];
					$subject=$_POST['subject'];
					$message=$_POST['message'];
					
	 $sql="INSERT INTO tbl_query( name, email,  phone, subject, message) VALUES ('$name','$email','$phone','$subject','$message')";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "../contact.php?sucess=106"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "../contact.php?error=106"; 
			  </script>';
	}


?>