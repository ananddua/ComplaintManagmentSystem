<?php session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
	include 'connection.php';
	$sql="select * from techperson_register where username='$user'";
	if(!$result=mysqli_query($conn,$sql)){die(mysqli_error($conn));}
	while($row=mysqli_fetch_array($result)){
		$tid=$row['tid'];
	}
?>
<html>
	<head>
		<title>Complaint Mamnagement System</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
		<style>
			#frm{margin:0px auto 0px auto;}
			td{padding:10px;}
		</style>
	</head>
	<body>
		<div id="header">
				<div class="logo"><a href="#"><span>Complaints </span>Management System</a></div>
	</div>
		<div id="container">
			<div class="sidebar">
				<ul id="nav">
					<li><a class="selected" href="#">Home</a></li>
					
					<li><a href="techbugs.php">Complaints To Assign</a></li>
							
				</ul>
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>View Records</h2>
						</div>
						<div class="box-panel">
							
						</div>
					</div>
			</div>
		</div>
		
	</body>
</html>
<?php }else{
	header("location:admin.php");
}?>
