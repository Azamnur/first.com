<!DOCTYPE html>
<html>
<head>
	<title>User adding</title>
</head>
<body>
<?php
     include('../bootstrap.php');
    session_start();
    if(!isset($_SESSION['auth_id'])&& !$_SESSION['auth_id']>0){
        die('Not Authorized');
    }
    
    ?>
<?php if(array_key_exists("send", $_POST)):?>
<?php
		$conn = mysqli_connect('localhost', 'root', '', 'my_market');
		
		if(! $conn ){
			echo 'Connected failure<br>';
		}
		
		$name = $_POST['name'];
		$password = $_POST['password'];

		$sql = "insert into user values(null, '".$name."', '".$password."', '1234')";

		header("Location:http://first.com/admin/useradd.php");
		mysqli_query($conn, $sql);
		mysqli_close($conn);

?>
<?php else: ?>
<form method="POST">
		<fieldset>
			<legend>Форма для добавления нового пользователя</legend>
			Input name: <input type="text" name="name"><br>
			Input password: <input type="password" name="password"><br>
			<input type="submit" name="send" value="Add">
		</fieldset>
	</form>

<?php endif; ?>
</body>
</html>