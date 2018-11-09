<!DOCTYPE html>
<html>
<head>
	<title>Admin's  panel</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			width: 1000px;
			margin: 0 auto;
		}

		button{
			margin: 0 auto;
		}
	</style>
</head>
<body>
<?php
     include('../bootstrap.php');
    session_start();
    if(!isset($_SESSION['auth_id'])&& !$_SESSION['auth_id']>0){
        die('Not Authorized');
    }
    
    ?>
	<button><a href="http://first.com/admin/products.php">Products</a></button><br><br><br>
	<button><a href="http://first.com/admin/users.php">Users</a></button>
</body>
</html>