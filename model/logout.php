<?php
session_start();
ob_start();
unset($_SESSION['uid']);
unset($_SESSION['emailid']);

#header('location:login.php');
echo '<script type="text/javascript">
         window.location = "../login.php";
      </script>';
?>