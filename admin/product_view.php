<!DOCTYPE html>
<html>
<head>
	<title>Каждый продукт</title>
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
		$connection = mysqli_connect('localhost', 'root', '', 'my_market');

		if(!$connection){
			mysqli_error();
			echo "error";
			die();
		}

		$id = $_GET['id'];

		$sql = 'select * from product where id='.$id;

		$result = mysqli_query($connection, $sql);

		$rows = mysqli_fetch_assoc($result);
		if(mysqli_num_rows($result)>0){
			

		echo "<table border='1'>";
		echo "<tr><td>Name</td><td>Type</td><td>cost</td><td>count</td><td>Size</td></tr>";
		echo "<tr><td>" . $rows['name'] . "</td>" 
		. "<td>" . $rows['type'] . "</td>" .
		"<td>" . $rows['cost'] . "</td>" .
		"<td>" . $rows['count'] . "</td>" .
		"<td>" . $rows['size'] . "</td>" ;
            if($rows['photo']!=''){
                echo "<td> <img src='../" . $rows['photo'] . "'></td>";    
            }else{
                echo "<td><img src='../photo/organization.png'></td>";
                
            }
        

		echo "<a href='products.php'>Все продукты</a>";
		}
	?>
</body>
</html>