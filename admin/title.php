
        <?php
 include('../bootstrap.php');
 session_start();
  echo 'Hi'. $_SESSION['name'];
?>
<a href="logout.php">Logout</a>
   