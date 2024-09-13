<?php
include "connection.php";
$username=$_POST['username'];
$password=$_POST['password'];
$usertype=$_POST['usertype'];

if($usertype=="customer"){
$sql="select * from customer_register where username='$username' and password='$password'";
if(!$result=mysqli_query($conn, $sql)){die(mysqli_error($conn));}
if(mysqli_num_rows($result)==1){
	session_start();
	$_SESSION['user']=$username;
	header("location:customerview.php");
}else{
	header("location:index.php?error=wrong data");
}
}
else if($usertype=="manager"){
$sql="select * from manager_register where username='$username' and password='$password'";
if(!$result=mysqli_query($conn, $sql)){die(mysqli_error($conn));}
if(mysqli_num_rows($result)==1){
	session_start();
	$_SESSION['user']=$username;
	header("location:managerview.php");
}else{
	header("location:index.php?error=wrong data");
}
}
else if($usertype=="techperson"){
$sql="select * from techperson_register where username='$username' and password='$password'";
if(!$result=mysqli_query($conn,$sql)){die(mysqli_error($conn));}
if(mysqli_num_rows($result)==1){
	session_start();
	$_SESSION['user']=$username;
	header("location:techview.php");
}else{
	header("location:index.php?error=wrong data");
}
}

?>