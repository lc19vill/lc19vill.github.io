<!DOCTYPE html>
<html>
	<meta charset="UTF-8">
	<title>Welcome</title>
	<body>
		<form method="get" action="welcome.php">
<? 	
session_start();

if($_GET["action"] == null || $_GET["action"] == "Start Over") {
	echo '
		<label>Enter Your Name: <input type="text" name="username"></label>
		<input type="submit" name="action" value="Add Name">
	';
	$_SESSION['username'] = $_GET['username'];
}
else if($_GET["action"] == "Add Name") {
	echo '
		<h2>Welcome '.$_SESSION['username'].'</h2>
		<label>Enter Your Favorite Color: <input type="text" name="color"></label>
		<input type="submit" name="action" value="Add Color">
	';
}
else if($_GET["action"] == "Add Color") {
	echo '
		<h2 style="color: '.$_GET["color"].'">Welcome '.$_SESSION['username'].'</h2>
		<input type="submit" name="action" value="Start Over">
	';
}
?>
		</form>
	</body>
</html>