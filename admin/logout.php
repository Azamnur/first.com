<?php
 include('../bootstrap.php');
//session_destroy();
session_start();
    $_SESSION['name']=null;
    $_SESSION['auth_id']=null;
    header("Location:http://first.com/admin/index.php");
		
?>