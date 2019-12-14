<?php 
    
session_start();
require('config/connection.php');
if(isset($_POST['reg'])){
  header("Location:register.php");
}if(isset($_POST) and !empty($_POST)){
        $email = $_POST['email'];
        $password = ($_POST['password']);
        $query = mysqli_query($conn,"SELECT * from users where email='$email' and password='$password'");
         if (mysqli_num_rows($query) >= 1) {
      
         $_SESSION['email'] = $email;
         $errors = ' MATCH';
         header("Location:index.php");
         }else{

                $errors = 'NOT MATCH';
        
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
    <input type="email" name="email">
    <input type="password" name="password">
    <input type="submit" name="submit" value="login">
    <input type="submit" name="reg" value="register">

  </form>
</body>
</html>