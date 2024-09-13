<?php session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
?>
<html>
	<head>
		<title>Complaint Management System</title>
		<link rel="stylesheet" type="text/css" href="style.css"/>
	</head>
	<body>
		<div id="header">
		<div class="logo"><a href="#"><span>Complaints </span>Management System</a></div>
	</div>
		<div id="container">
			<div class="sidebar">
				<ul id="nav">
					<li><a class="selected" href="#">Home</a></li>
					<li><a href="manager.php">Add Manager</a></li>
					<li><a href="product.php">Add Products</a></li>
					<li><a href="tech.php">Add Tech Person</a></li>
					
					
				</ul>
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1>
					
					<div id="box">
						<div class="box-top">
							<h2>Admin Content</h2>
						</div>
						<div class="box-panel">
							main content goes here
						</div>
					</div>
			</div>
		</div>
		
	</body>
</html>
<?php }else{
	header("location:admin.php");
}?>
