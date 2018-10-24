<?php
#model_fundTransfer.php

if(isset($_POST['fundTransfer_btn']))
{
	require("./config.php");				
					
					$senderId=$_POST['suserid'];				
					$recieverId=$_POST['puserid'];
					$damt=$_POST['amount'];
					$camt=0;
					$remark=$_POST['remark'];
					$bal=0;		
		$bal=$_SESSION['bal'];		
		if($damt<=$bal)
		{			
	
	 $sql="INSERT INTO tbl_transaction( txn_remark, txn_DebitAmt, txn_CreditAmt,txn_userid, txn_senderid, txn_recieverid ) VALUES ('$remark',$damt,$camt,'$senderId','','$recieverId'),('$remark',$camt,$damt,'$recieverId','$senderId','')";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{		
			$bal=$_SESSION['bal']-$damt;			
			$curr_timestamp = date('Y-m-d H:i:s');
			$sql_bal_update="UPDATE tbl_userbalance SET balance =$bal, updateDate='$curr_timestamp' WHERE userid='$senderId'";
			$result_bal_update=mysqli_query($conn,$sql_bal_update);
			$_SESSION['bal']=$bal;
		#------------------------------------------------------------------------
		$sql_bal_select="SELECT `balance` FROM `tbl_userbalance` WHERE `userid`='$recieverId'";
		$result_bal_select=mysqli_query($conn,$sql_bal_select);
		if(mysqli_num_rows($result_bal_select)>0)
		{
			$r=mysqli_fetch_array($result_bal_select);
			echo $bal=$damt+$r[0];
			echo "<br>";
			$curr_timestamp = date('Y-m-d H:i:s');
			echo $sql_bal_update="UPDATE tbl_userbalance SET balance =$bal, updateDate='$curr_timestamp' WHERE userid='$recieverId'";
			$result_bal_update=mysqli_query($conn,$sql_bal_update);
			
		}
		else{
			$sql_bal_insert=" INSERT INTO `tbl_userbalance`( userid,`balance`, `updateDate`) VALUES ('$recieverId',$damt,now())";
			$result_bal_insert=mysqli_query($conn,$sql_bal_insert);
		}
		
		#------------------------------------------------------------------------
		
			echo '<script type="text/javascript">                
                window.location = "../statement.php?sucess=109"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "../FundTransfer.php?error=109"; 
			  </script>';
	}
		}
		else{
			echo '<script type="text/javascript">                
                window.location = "../FundTransfer.php?error=111"; 
			  </script>';
			
		}
}





?>