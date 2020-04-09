<?php 
session_start();

$action = $_POST['action'];

if ($action == "Login" ) {

	$usr = $_POST['username'];

	$_SESSION['authenticated'] = true;
	
}
?>

<!DOCTYPE html>
<html>
  <meta charset="utf-8">
  <title>Login</title>
  <body>
  <form method="post" action="login.php">
    <h2>Login</h2>
    <label>Username: <input type="text" name="username"></label>
    <input type="submit" name="action" value="Login"> 
  </form>
	</body>
</html>