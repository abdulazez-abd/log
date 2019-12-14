<?php

	require('config/connection.php');

	$errors = '';
	$sucess = '';
	if(isset($_POST['login'])){
		 header("Location:login.php");
	}elseif (isset($_POST) and !empty($_POST)){
		$name = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];


		if(empty($email)){
			$errors .= ' The email is empty';
		}if(empty($name)){
			$errors .= ' The name is empty';
		}if(empty($password)){
			$errors .= ' The password is empty';
		}

	if (!empty($name) and !empty($email) and !empty($password)){
		
		  	$query ="INSERT INTO users SET id=' ' , name='$name' , password='$password' ,  email='$email'" ;		  
		
			 if(mysqli_query($conn,$query)){
			 	echo "sucess";
			 	 $_SESSION['email'] = $email;
        		 header("Location:index.php");
			 }
		}
	}
 


  ?>





<!DOCTYPE html>
<html>
<head>
	<title>register</title>
</head>
<body>
	<form method="post">
	<label>name</label>
	<input type="text" name="name"><br>
	<label>email</label>
	<input type="text" name="email"><br>
	<label>password</label>
	<input type="text" name="password"><br>
	<p style="background-color: red"><?php  if(isset($_POST)){ echo $errors ;} ?></p><br>
	<input type="submit" name="submit" value="register"><br>
	<input type="submit" name="login" value="login">

	</form>
</body>
</html>