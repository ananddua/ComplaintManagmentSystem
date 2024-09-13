<?php
	include 'connection.php';
	$bid=$_GET['bid'];
	$edate=$_GET['edate'];
	$tid=$_GET['tid'];
	$assign="assigned";
	
	$sql="update bug_details set assigned='$assign',expected_date='$edate',tech_id='$tid' where bug_id='$bid' ";
	
	if(!$sqlresult=mysqli_query($conn,$sql)){die(mysqli_error($conn));}	
	if($sqlresult){
		header("location:assignedbugs.php?success=successfully Assigned");
	}else{
		echo "<script>alert(error);</script>";
	}
?>