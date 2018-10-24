<?php
@ob_start();
@session_start();
if(!isset($_SESSION['uid']))
{
	/*echo "session not Found <br>";
	echo $_SESSION['uid'];*/
header('location:login.php?error=356');
}
else{
	#echo "session  Found ";
}

?>