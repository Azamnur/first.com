<html>
<head>      
	<title>Selecting Table in MySQLi Server</title>   
</head> 
<body>

<?php
     include('../bootstrap.php');
    session_start();
    if(!isset($_SESSION['auth_id'])&& !$_SESSION['auth_id']>0){
        die('Not Authorized');
    }
    
    ?>
	<?php
		$conn = mysqli_connect('localhost', 'root', '', 'my_market');

		if(! $conn ){
			echo 'Connected failure<br>';
		}

		$id = $_POST['id'];

		$sql = "SELECT name, password FROM user where id = " . $id;

		$result = mysqli_query($conn, $sql);

		if(mysqli_num_rows($result)>0){
		$row = mysqli_fetch_assoc($result);
		$name = $row["name"];
		$password = $row["password"];
		}
		mysqli_close($conn);
	?>

	<form method="POST" action="update.php">
		<fieldset>
			<legend>Форма для изменения информации о пользователе</legend>
			Input name: <input type="text" name="name" value="<?php echo $name;?>"><br>
			Input password: <input type="password" name="password" value="<?php echo $password;?>"><br>
			<input type="submit" name="send" value="Update">
		</fieldset>
	</form>
</body>
</html>
