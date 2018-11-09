<!DOCTYPE html>
<html>
<head>
	<title>Administrator login</title>
	<meta charset="utf-8">
	<style type="text/css">
		body{
			width: 1000px;
			margin: 0 auto;
		}

		form{
			width: 300px;
			margin: 0 auto;
		}
	</style>
</head>

<?php
     include('../bootstrap.php');
    if(array_key_exists("send", $_POST)):?>
<?php
	$conn = mysqli_connect('localhost', 'root', '', 'my_market');

	if(!$conn){
		mysqli_error();
		echo "error";
		die();
	}

	$sql = 'select * from user';

	$result = mysqli_query($conn, $sql);

	$row = mysqli_fetch_all($result, MYSQLI_ASSOC);

	mysqli_close($conn);

	$id = -1;
	$Llogin = $_POST['login'];
	$Lpassword = $_POST['password'];
	
	for ($i=0; $i < count($row); $i++) { 
		foreach ($row[$i] as $key => $value) {
			if($Llogin==$row[$i]["name"]){
				$id = $row[$i]['id'];
				$login = $row[$i]['name'];
				$password = $row[$i]['password'];
			}
		}
	}
	if($id == -1){
		echo "Такого пользователя не существует";
	} else {
		if($Llogin == $login && $Lpassword == $password){
    session_start();
    $_SESSION['name']=$login;
    $_SESSION['auth_id']=$id;
    
            
			header("Location:http://first.com/admin/panel.php");
		} else {
			header("Location:http://first.com/index.php");
		}
	}
?>
<?php else: ?>
<body>
<?php
    include('title.php');
    ?>
	<br><br><br><br><br><br><br><br><br><br><br><br>
	<form method="POST">
		<fieldset>
			<legend>Введите логин а пароль</legend>
			Login: <input type="text" name="login"> <br>
			Password <input type="password" name="password"> <br>
			<input type="submit" name="send">
			<a href="logout.php">Logout</a>
		</fieldset>
	</form>

	<?php endif; ?>
</body>
</html>