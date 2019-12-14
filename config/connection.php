<?php
$conn = mysqli_connect("localhost","root","","log_in");
if (!$conn){
	echo "Error".mysql_connect_error();
}
if ($conn){
	echo "connected";
}
?>