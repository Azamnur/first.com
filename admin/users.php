<!DOCTYPE html>
<html>
<head>
	<title>Все пользователи</title>
	<style type="text/css">
		.edite{
			width: 200px;
		}
		form{
			display: inline;
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
	<h1>Все пользователи</h1>
	<button><a href="useradd.php">Добавить</a></button>
		
	<?php
		$conn = mysqli_connect('localhost', 'root', '', 'my_market');
		if(! $conn ){
			echo 'Connected failure<br>';
		}

		$sql = "select id, name, password from user";
		if(isset($_GET['sort']) && isset($_GET['column'])){
			$sql .= ' order by ' . $_GET['column'] . ' ' . $_GET['sort'];
		}

		$result = mysqli_query($conn, $sql);

		echo "<table border='1'>";
		echo "<tr><th>";
		echo "ID";
		echo "</th>";
		echo "<th>";
		echo "Name";
		echo "</th>";
		echo "<th>";
		echo "";
		echo "</th></tr>";
		while($row=mysqli_fetch_assoc($result)){
			echo "<tr><td>";
			echo $row['id'];
			echo "</td>";
			echo "<td>";
			echo $row['name'];
			echo "</td>";
			echo "<td class='edite'>";
			echo "<form method='POST' action='updateuser.php'>
					<input type=hidden name='id' value=".$row['id'].">
					<input type='submit' value='Редактировать'>
					</form> " . " | " . " 
					<form method='POST'>
					<input type=hidden name='id' value=".$row['id']."> 
					<input type='submit' name='send' value='Удалить'>
					</form>
				 ";
			echo "</td></tr>";
		}
		echo "</table>";

		if(isset($_POST['send'])){
		 	$sql = 'delete from user where id =' . $_POST['id'];
		 	mysqli_query($conn, $sql);
		 	mysqli_close($conn);
		}
	?>
		<button><a href="http://mymarket.io:88/users.php?sort=ASC&column=name">
			sort &darr;
		</a></button>
		<button><a href="http://mymarket.io:88/users.php?sort=DESC&column=name">
			sort &uarr;
		</a></button>
		<button><a href="http://mymarket.io:88/users.php?sort=ASC&column=id">
			refresh
		</a></button>

</body>
</html>