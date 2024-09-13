<?php
	include 'connection.php';
	$bid=$_GET['bug_id'];
	$sol=$_GET['sol'];
	
	
	$sql="update bug_details set solution='$sol' where bug_id='$bid' ";
	
	if(!$sqlresult=mysqli_query($conn,$sql)){die(mysqli_error($conn));}	
	if($sqlresult){
		header("location:techbugs.php");
	}else{
		echo "<script>alert(error);</script>";
	}
?>