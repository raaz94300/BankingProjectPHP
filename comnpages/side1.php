<?php
	@session_start();
?>
<div class="entry-meta">
    <span id="publish_date"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?> </span>
    <span><i class="fa fa-inr"></i> <a href="#">Net Balanace</a> <span style="float:right;"><b><i class="fa fa-inr"></i><?php echo $_SESSION['bal']; ?> </b></span></span>
    <span><i class="fa fa-user"></i> <a href="./viewProfile.php">View Profile</a></span>
    <span><i class="fa fa-user"></i> <a href="./updateProfile.php">Update Profile</a></span>
    <span><i class="fa fa-heart"></i><a href="./changePassword.php">Change Password</a></span>
</div>