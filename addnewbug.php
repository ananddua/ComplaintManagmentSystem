<?php
	include 'connection.php';
	$product_name=$_GET['product_name'];
	$priority=$_GET['priority'];
	$summary=$_GET['summary'];
	$details=$_GET['details'];
	$cid=$_GET['cid'];
	$os=$_GET['os'];
	$soft=$_GET['software'];
	$assigned="not assigned";
	
	$sql="insert into bug_details(product_name,priority,summary,details,os,software,date,customer_id,assigned)
	values('$product_name','$priority','$summary','$details','$os','$soft',now(),'$cid','$assigned')";
	if(!$sqlresult=mysqli_query($conn,$sql)){die(mysqli_error($conn));}	
	if($sqlresult){
		header("location:newbugs.php?success=successfully registerd");
	}else{
		echo "<script>alert(error);</script>";
	}
?>