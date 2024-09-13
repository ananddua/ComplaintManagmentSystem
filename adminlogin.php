<?php
include "connection.php";
$username=$_POST['username'];
$password=$_POST['password'];
$sql="select * from admin where username='$username' and password='$password'";
if(!$result=mysqli_query($conn, $sql)){die(mysqli_error($conn));}
if(mysqli_num_rows($result)==1){
	session_start();
	$_SESSION['user']=$username;
	header("location:dashboard.php");
}else{
	header("location:admin.php?error=wrong data");
}

?>