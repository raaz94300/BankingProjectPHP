<?php
require('../model/config.php');

	$loan_name=$_POST['loan_name'];
			$loan_persentage=$_POST['loan_persentage'];
			$status=$_POST['status'];
	 $sql="INSERT INTO tbl_loan( loan_name, loan_persentage, status ) VALUES ('$loan_name',$loan_persentage,$status)";				
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		echo '<script type="text/javascript">                
                window.location = "./Loan.php?sucess=111"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "./addLoan.php?error=111"; 
			  </script>';
	}


?>