<!DOCTYPE html>
<html>
<head>
	<title>Добавить товар</title>
</head>
<body>
<?php
    include('title.php');
    include('../bootstrap.php');
    ?>
	<form method="POST" enctype="multipart/form-data">
		<fieldset>
			<legend>Форма для добавления нового товара</legend>
			Input name: <input type="text" name="name" required /><br>
			Input type: <input type="text" name="type" required /><br>
			Input cost: <input type="text" name="cost" required /><br>
			Input count: <input type="text" name="count" required /><br>
			Input size: <input type="text" name="size" required /><br>
			Input for man: <input type="text" name="for_man" required /><br>
			Load image: <input type="file" name="picture"  required= /><br>
			<input type="submit" name="send" value="Добавить">
		</fieldset>
	</form>
<?php
    session_start();
    if(!isset($_SESSION['auth_id']) && !$_SESSION['auth_id']>0){
        die('Not Authorized');
    }
    
    ?>
	<?php
		$connection = mysqli_connect('localhost', 'root', '', 'my_market');

		if(!$connection){
			mysqli_error();
    		echo "error";
    		die();
  		}

  		if(isset($_POST['send'])){
  			$path = 'photo/' . $_FILES['picture']['name'];
  			$sql = "insert into product (name, type, cost, count, size, for_man, photo) values (" . "'" .
  			$_POST['name'] . "', '" . $_POST['type'] . "', '" .  $_POST['cost'] . "', " .
  			$_POST['count'] . ", '" . $_POST['size'] . "', " . $_POST['for_man'] . ", '" . $path . "')";
  			
  			
  			var_dump($_FILES);
  			if(!copy($_FILES['picture']['tmp_name'], "../".$path)){
  				echo "что-то пошло не так!";
  			}
            
  			echo "<br> ". $path;
  			mysqli_query($connection, $sql);
  		} else {
  		}
	?>
</body>
</html>