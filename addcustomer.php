<?php
	include 'connection.php';
	$username=$_GET['username'];
	$password=$_GET['password'];
	$cname=$_GET['cname'];
	$address=$_GET['address'];
	$phno=$_GET['phno'];
	$email=$_GET['email'];
	
	$sql="insert into customer_register(username,password,customer_name,address,phno,email)	values('$username','$password','$cname','$address','$phno','$email')";
	//$sql = "INSERT INTO customer_register( cid,  username, password, customer_name, address, email, phno) VALUES ('4', 'hari', 'hari', 'hariom', 'hsaj', 'kbjs@knfd.com', '34535345354')";
	
	if(!$sqlresult=mysqli_query($conn, $sql)){die(mysqli_error($conn));}	
	if($sqlresult){
		$link="<a href='index.php'>Login Here</a>";
		header("location:customerSignup.php?success=successfully registerd&link=$link");
		
	}else{
		echo "<script>alert(error);</script>";
	}
?>