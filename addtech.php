<?php
	include 'connection.php';
	$username=$_GET['username'];
	$password=$_GET['password'];
	$tname=$_GET['tname'];
	$address=$_GET['address'];
	$phno=$_GET['phno'];
	$email=$_GET['email'];
	$mid=$_GET['mid'];
	
	$sql="insert into techperson_register(username,password,tech_name,address,phno,email,mid)
	values('$username','$password','$tname','$address','$phno','$email','$mid')";
	if(!$sqlresult=mysqli_query($conn, $sql)){die(mysqli_error($conn));}	
	if($sqlresult){
		header("location:tech.php?success=successfully registerd");
	}else{
		echo "<script>alert(error);</script>";
	}
?>