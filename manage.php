<?php session_start();
	if(isset($_SESSION['user'])){
	$user=$_SESSION['user'];
?>
<html>
	<head>
		<title>Complaint Management System</title>
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
					<li><a href="manager.php">Add Manager</a></li>
					<li><a href="product.php">Add Products</a></li>
					<li><a href="tech.php">Add Tech Person</a></li>
					<li><a href="manage.php">Manage record</a></li>
					
				</ul>
			</div>
			<div class="content">
				<h1>Welcome <?php echo $user; ?> </h1><span><a href="logout.php">logout</a></span>
					
					<div id="box">
						<div class="box-top">
							<h2>View Records</h2>
						</div>
						<div class="box-panel">
							<table id="frm">
								<tr>
									<td><a href="viewmanager.php">View All manager</a></td>
								</tr>
								<tr>
									<td><a href="viewtech.php">View All Tech</a></td>
								</tr>
								<tr>
									<td><a href="viewproducts.php">View All Products</a></td>
								</tr>
								<tr>
									<td><a href="viewclients.php">View All Clients</a></td>
								</tr>
								<tr>
									<td><a href="viewsolutions.php">View All solutions</a></td>
								</tr>
							</table>
						</div>
					</div>
			</div>
		</div>
		
	</body>
</html>
<?php }else{
	header("location:admin.php");
}?>
