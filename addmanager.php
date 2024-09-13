<?php
	include 'connection.php';
	$username=$_GET['username'];
	$password=$_GET['password'];
	$mname=$_GET['mname'];
	$address=$_GET['address'];
	$phno=$_GET['phno'];
	$email=$_GET['email'];
	
	$sql="insert into manager_register(username,password,manager_name,address,phno,email)
	values('$username','$password','$mname','$address','$phno','$email')";
	if(!$sqlresult=mysqli_query($conn, $sql)){die(mysqli_error($conn));}	
	if($sqlresult){
		header("location:manager.php?success=successfully registerd");
	}else{
		echo "<script>alert(error);</script>";
	}
?>