<?php
	include 'connection.php';
	$pname=$_GET['pname'];
	$version=$_GET['version'];
	$vendor=$_GET['vendor'];
	$mid=$_GET['mid'];
	
	$sql="insert into product_register(product_name,version,vendor,mid)
	values('$pname','$version','$vendor','$mid')";
	if(!$sqlresult=mysqli_query($conn, $sql)){die(mysqli_error($conn));}	
	if($sqlresult){
		header("location:product.php?success=successfully registerd");
	}else{
		echo "<script>alert(error);</script>";
	}
?>