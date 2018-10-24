<?php
#model_fundTransfer.php

if(isset($_POST['fundDeposit_btn']))
{
	require("./config.php");				
					
					$senderId=$_POST['suserid'];				
					$recieverId=$_POST['suserid'];
					
					$camt=$_POST['amount'];
					$damt=0;
					$pm=$_POST['paymentmethod'];
					$ckn="No : ".$_POST['chequeNo'];
					$remark=$_POST['remark'];
					$remark=$remark.$pm;
					$bal=0;
					if($_POST['chequeNo']>0){$remark=$remark.$ckn;}
					
					
		
	 $sql="INSERT INTO tbl_transaction( txn_remark, txn_DebitAmt, txn_CreditAmt,txn_userid, txn_senderid, txn_recieverid ) VALUES ('$remark',$damt,$camt,'$senderId','','$recieverId')";
	
	$result=mysqli_query($conn,$sql);
	if($result)
	{
		$sql_bal_select="SELECT `balance` FROM `tbl_userbalance` WHERE `userid`='$recieverId'";
		$result_bal_select=mysqli_query($conn,$sql_bal_select);
		if(mysqli_num_rows($result_bal_select)>0)
		{
			$r=mysqli_fetch_array($result_bal_select);
			echo $bal=$camt+$r[0];
			echo "<br>";
			$curr_timestamp = date('Y-m-d H:i:s');
			echo $sql_bal_update="UPDATE tbl_userbalance SET balance =$bal, updateDate='$curr_timestamp' WHERE userid='$recieverId'";
			$result_bal_update=mysqli_query($conn,$sql_bal_update);
			$_SESSION['bal']=$bal;
		}
		else{
			$sql_bal_insert=" INSERT INTO `tbl_userbalance`( userid,`balance`, `updateDate`) VALUES ('$recieverId',$camt,now())";
			$result_bal_insert=mysqli_query($conn,$sql_bal_insert);
		}
			
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		
		echo '<script type="text/javascript">                
                window.location = "../statement.php?sucess=109"; 
			  </script>';
	}
	else{
		echo '<script type="text/javascript">                
                window.location = "../FundDeposite.php?error=109"; 
			  </script>';
	}
}





?>