<?php


	echo "Hello in index page";
	if(isset($_POST['submit'])){
		 header("Location:login.php");
	}
	?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post">
		<input type="submit" name="submit" value="logout">
	</form>
</body>
</html>